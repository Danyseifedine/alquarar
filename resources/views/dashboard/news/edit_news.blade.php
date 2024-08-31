@extends('layout.master')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">تعديل الخبر</h6>
                        <h1 class="mb-5">تحديث بيانات الخبر</h1>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('dashboard.news.update', $news) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">العنوان</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $news->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">الوصف</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $news->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="user_id" class="form-label">المستخدم</label>
                            <input type="text" class="form-control" id="writer" name="writer"
                                value="{{ $news->writer }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="source" class="form-label">المصدر</label>
                            <input type="text" class="form-control" id="source" name="source"
                                value="{{ $news->source }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">الصورة الحالية</label>
                            @if ($news->image)
                                <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" class="img-fluid mb-2"
                                    style="max-width: 200px;">
                            @else
                                <p>لا توجد صورة</p>
                            @endif
                            <div class="mb-3">
                                <label for="current_study" class="form-label">الدراسة الحالية</label>
                                @if ($news->study)
                                    <p>
                                        <a href="{{ asset($news->study) }}" target="_blank"
                                            class="btn btn-sm btn-secondary">
                                            عرض الدراسة الحالية
                                        </a>
                                    </p>
                                @else
                                    <p>لا توجد دراسة</p>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">الفئة</label>
                            <select class="form-control" id="category_id" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $news->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="new_study" class="form-label">تحديث الدراسة (اختياري)</label>
                            <input type="file" class="form-control" id="new_study" name="new_study">
                        </div>
                        <div class="mb-3">
                            <label for="new_image" class="form-label">تحديث الصورة (اختياري)</label>
                            <input type="file" class="form-control" id="new_image" name="new_image">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">تحديث الخبر</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
