<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
    <div class="container">
        <a href="{{ route('landing') }}" class="navbar-brand">
            <img src="{{ asset('img/logo.png') }}" width="40" height="40" alt="Logo"
                class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('landing') }}"
                        class="nav-link {{ request()->is('/') ? 'active' : '' }}">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all.news') }}"
                        class="nav-link {{ request()->is('news') ? 'active' : '' }}">اخبار</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('adad') }}"
                        class="nav-link {{ request()->is('adad') ? 'active' : '' }}">الأعداد</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}"
                        class="nav-link {{ request()->is('contact') ? 'active' : '' }}">تواصل بنا</a>
                </li>
            </ul>
            @auth
                <div class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        مرحباً، {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('dashboard.home') }}">لوحة التحكم</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">تسجيل الخروج</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>
<!-- Navbar End -->
