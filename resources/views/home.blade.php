@extends('layout.master')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">لوحة التحكم</h6>
                        <h1 class="mb-5">مرحباً بك في لوحة التحكم</h1>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row g-4">
                        <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <h5 class="mb-3">المستخدمين</h5>
                                    <p>إدارة حسابات المستخدمين</p>
                                </div>
                                <a class="btn btn-primary px-4" href="{{ route('dashboard.user.index') }}">إدارة
                                    المستخدمين</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item text-center pt-3">
                                <div class="p-4">
                                    <h5 class="mb-3">الأخبار</h5>
                                    <p>عرض وإنشاء الأخبار</p>
                                </div>
                                <a class="btn btn-primary px-4" href="{{ route('dashboard.news.index') }}">إدارة
                                    الأخبار</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
