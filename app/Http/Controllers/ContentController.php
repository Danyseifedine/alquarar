<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function home()
    {
        $news = News::latest()->take(3)->get();
        return view('welcome', compact('news'));
    }

    public function news()
    {
        $news = News::all();
        return view('pages.news', compact('news'));
    }

    public function adad()
    {
        $news = News::select('source')->distinct()->get();
        return view('pages.adad', compact('news'));
    }

    public function contact()
    {
        return view('pages.contact-us');
    }

}
