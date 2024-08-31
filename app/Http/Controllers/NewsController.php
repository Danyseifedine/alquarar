<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        $users = User::all();
        return view('dashboard.news.index', compact('news', 'users'));
    }

    public function add_news()
    {
        $users = User::all();
        $categories = Category::all();
        return view('dashboard.news.add_news', compact('users', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'writer' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'study' => 'mimes:pdf|max:10240',
            'source' => 'nullable',
        ]);

        $data = $request->except('image', 'study');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news/images'), $imageName);
            $data['image'] = 'news/images/' . $imageName;
        }

        if ($request->hasFile('study')) {
            $study = $request->file('study');
            $studyName = uniqid() . '.' . $study->getClientOriginalExtension();
            $study->move(public_path('news/studies'), $studyName);
            $data['study'] = 'news/studies/' . $studyName;
        }

        News::create($data);
        return redirect()->route('dashboard.news.index')->with('success', 'تم إنشاء النشاط بنجاح');
    }

    public function edit(News $news)
    {
        $users = User::all();
        $categories = Category::all();
        return view('dashboard.news.edit_news', compact('news', 'users', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'writer' => 'required',
            'category_id' => 'required|exists:categories,id',
            'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'new_study' => 'nullable|mimes:pdf|max:10240',
            'source' => 'nullable',
        ]);

        $data = $request->only(['title', 'description', 'writer', 'category_id', 'source']);

        if ($request->hasFile('new_image')) {
            $image = $request->file('new_image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('news/images'), $imageName);
            $data['image'] = 'news/images/' . $imageName;

            // Delete the old image if it exists
            if ($news->image && file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }
        }

        if ($request->hasFile('new_study')) {
            $study = $request->file('new_study');
            $studyName = uniqid() . '.' . $study->getClientOriginalExtension();
            $study->move(public_path('news/studies'), $studyName);
            $data['study'] = 'news/studies/' . $studyName;

            // Delete the old study if it exists
            if ($news->study && file_exists(public_path($news->study))) {
                unlink(public_path($news->study));
            }
        }

        $news->update($data);
        return redirect()->route('dashboard.news.index')->with('success', 'تم تحديث النشاط بنجاح');
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('dashboard.news.index')->with('success', 'تم حذف الخبر بنجاح');
    }

    public function show(News $news)
    {
        $latestNews = News::latest()->take(3)->get();
        return view('pages.singleNew', compact('news', 'latestNews'));
    }

    public function source(Request $request)
    {
        $source = $request->source;
        $news = News::where('source', $source)->get();
        return view('pages.sourceNews', compact('news', 'source'));
    }
}
