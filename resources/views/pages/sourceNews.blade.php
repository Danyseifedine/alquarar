@extends('layout.master')

@section('title', 'New Source')
@section('content')
    <div class="container mb-12" style="margin-top: 100px;">
        <h1>{{ $source }}</h1>
        <div class="row mt-4">
            @forelse ($news as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if ($item->image)
                            <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                            <a href="{{ route('news.show', $item) }}" class="btn btn-primary">اقرأ المزيد</a>
                        </div>
                        <div class="card-footer text-muted">
                            <small>{{ $item->created_at->format('Y-m-d') }}</small>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">لا توجد أخبار متاحة من هذا المصدر.</p>
                </div>
            @endforelse
        </div>
    </div>


@endsection
