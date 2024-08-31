@extends('layout.master')

@section('content')
    <!-- News Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">آخر الأخبار</h1>
                <p>تابع آخر الأخبار والمستجدات في مركزنا</p>
            </div>
            <div class="row g-4">
                @foreach ($news as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card h-100">
                            <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">{{ $item->created_at->format('d M, Y') }}</small>
                                    <a href="{{ route('news.show', $item) }}" class="btn btn-primary">اقرأ المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- News Section End -->
@endsection
