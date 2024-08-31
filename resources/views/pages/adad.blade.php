@extends('layout.master')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">مصادر الأخبار</h1>
        <div class="">
            @foreach ($news as $source)
                <div class="col-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $source->source }}</h5>
                            <a href="{{ route('source.news', ['source' => $source->source]) }}" class="btn btn-primary">عرض
                                الأخبار</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
