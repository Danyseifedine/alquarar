@extends('layout.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">{{ __('تحقق من عنوان بريدك الإلكتروني') }}</h4>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني.') }}
                        </div>
                    @endif

                    <p class="mb-3">{{ __('قبل المتابعة، يرجى التحقق من بريدك الإلكتروني للحصول على رابط التحقق.') }}</p>
                    <p>{{ __('إذا لم تستلم البريد الإلكتروني') }},</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">{{ __('انقر هنا لطلب رابط آخر') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
