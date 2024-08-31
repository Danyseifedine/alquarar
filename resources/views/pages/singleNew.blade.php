@extends('layout.master')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <article class="news-article">
                        <header class="mb-4">
                            <h1 class="display-4 mb-3">{{ $news->title }}</h1>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-primary mx-2 fs-6 me-3">{{ $news->category->name }}</span>
                                <span class="text-muted"><i
                                        class="bi bi-clock mx-2 me-2"></i>{{ $news->created_at->format('d M, Y') }}</span>
                            </div>
                        </header>

                        <div class="position-relative mb-5">
                            <img class="img-fluid w-100 rounded" src="{{ asset($news->image) }}" alt="{{ $news->title }}">
                            <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-dark bg-opacity-50">
                                <div class="d-flex justify-content-between align-items-center text-white">
                                    <div>
                                        <i class="bi bi-person-circle mx-2 fs-5 me-2"></i>
                                        <span>{{ $news->writer }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-light rounded p-4 mb-5">
                            <h4 class="mb-3">الوصف</h4>
                            <div class="news-content">
                                {!! $news->description !!}
                            </div>
                        </div>

                        @if ($news->study)
                            <div class="bg-light rounded p-4 mb-5">
                                <h4 class="mb-3">الدراسة المرفقة</h4>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-file-earmark-pdf fs-2 text-danger me-3"></i>
                                    <a href="{{ asset($news->study) }}" class="btn mx-2 btn-primary" download>
                                        <i class="bi bi-download me-2 mx-2"></i>تحميل الدراسة (PDF)
                                    </a>
                                    <a href="{{ asset($news->study) }}" class="btn btn-secondary" target="_blank">
                                        <i class="bi bi-eye me-2 mx-2"></i>عرض الدراسة
                                    </a>
                                </div>
                            </div>
                        @endif
                        <div class="bg-light rounded p-4 mb-5">
                            <h4 class="mb-3">المصدر</h4>
                            <p>{{ $news->source }}</p>
                        </div>

                        <div class="mt-5">
                            <h4 class="mb-4">شارك الخبر</h4>
                            <div class="d-flex gap-3">
                                <a href="#" class="btn btn-outline-primary"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="btn btn-outline-info"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="btn btn-outline-success"><i class="bi bi-whatsapp"></i></a>
                                <a href="#" class="btn btn-outline-secondary"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="bg-light rounded p-4 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">أحدث الأخبار</h4>
                            @foreach ($latestNews as $item)
                                <div class="d-flex rounded overflow-hidden mb-3">
                                    <img class="img-fluid" src="{{ asset($item->image) }}"
                                        style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                    <a href="{{ route('news.show', $item) }}"
                                        class="h6 fw-semi-bold d-flex align-items-center bg-white px-3 mb-0">
                                        {{ Str::limit($item->title, 50) }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
