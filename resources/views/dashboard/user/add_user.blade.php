@extends('layout.master')

@section('content')
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">إضافة مستخدم</h6>
                        <h1 class="mb-5">إنشاء مستخدم جديد</h1>
                    </div>

                    <form action="{{ route('dashboard.user.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control" minlength="9" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" minlength="9" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">إنشاء المستخدم</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
