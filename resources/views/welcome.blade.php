@extends('layout.master')

@section('content')
    <div class="container-fluid p-0 mb-5">
        <div class="hero-section">
            <div class="hero-content">
                <h1 class="display-3 text-white mb-4 animated fadeInDown">مجلة القرار® للبحوث العلمية المحكّمة<br>ElQarar
                    Journal for Refereed Scientific Research</h1>
                <p class="fs-5 text-white mb-4 pb-2 animated fadeInUp">امجلة شهرية – مسجلة في الرقم الدولي الموحَد للدوريات
                    ISSN 3006-7294 | موقع الكتروني – علم وخبر رقم 2019/214
                </p>
                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">المجلة</a>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="fa fa-book fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">نشر البحوث العلمية</h5>
                            <p>نقدم منصة لنشر البحوث العلمية المحكمة في مختلف المجالات، مع التركيز على الجودة والأصالة</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="bi bi-search fs-1 text-primary mb-4"></i>
                            <h5 class="mb-3">تحكيم علمي دقيق</h5>
                            <p>نضمن عملية تحكيم علمي دقيقة وشفافة لضمان جودة المحتوى المنشور في مجلتنا</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="bi bi-globe fs-1 text-primary mb-4"></i>
                            <h5 class="mb-3">انتشار عالمي</h5>
                            <p>نوفر منصة للباحثين لنشر أعمالهم على مستوى عالمي، مما يزيد من تأثير وانتشار أبحاثهم</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4 d-flex justify-content-center align-items-center flex-column">
                            <i class="bi bi-calendar-check fs-1 text-primary mb-4"></i>
                            <h5 class="mb-3">إصدارات دورية</h5>
                            <p>نصدر المجلة بشكل شهري، مما يضمن تدفقًا مستمرًا للمعرفة العلمية الحديثة في مختلف المجالات</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/me.jpg') }}" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">من نحن</h6>
                    <h1 class="mb-4">شركة القرار الإخبارية</h1>
                    <p class="mb-4">نحن شركة القرار، مؤسسة إخبارية رائدة في مجال الصحافة والإعلام. تأسست شركتنا بهدف تقديم
                        تغطية إخبارية شاملة وموضوعية للأحداث المحلية والعالمية. نسعى جاهدين لتزويد قرائنا بأحدث الأخبار
                        والتحليلات العميقة في مختلف المجالات السياسية والاقتصادية والاجتماعية والثقافية.</p>
                    <p class="mb-4">في القرار، نؤمن بأهمية الصحافة المستقلة ودورها الحيوي في المجتمع. نلتزم بأعلى معايير
                        المهنية والأخلاقية في عملنا، ونسعى دائمًا لتقديم محتوى إعلامي موثوق به ودقيق. فريقنا يضم نخبة من
                        الصحفيين والمحررين ذوي الخبرة، الذين يعملون بجد لتغطية الأحداث وتقديم رؤى متعمقة لقرائنا.</p>
                    <p class="mb-4">نحرص على مواكبة التطورات التكنولوجية في مجال الإعلام، ونقدم محتوانا عبر منصات متعددة
                        لضمان وصوله إلى أكبر شريحة من الجمهور. هدفنا هو أن نكون المصدر الأول للأخبار الموثوقة والتحليلات
                        العميقة، وأن نساهم في تشكيل وعي الجمهور وتعزيز الحوار المجتمعي البناء.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">الأخبار</h6>
                <h1 class="mb-5">أحدث الأخبار</h1>
            </div>
            <div class="row g-3">
                @foreach ($news as $new)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset($new->image) }}" class="card-img-top" alt="{{ $new->title }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-primary">{{ Str::limit($new->title, 50) }}</h5>
                                <p class="card-text flex-grow-1">{{ Str::limit($new->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <span class="text-muted d-flex align-items-center">
                                        <i class="bi bi-clock mx-2 fs-5 me-2"></i>
                                        <span>{{ $new->created_at->diffForHumans() }}</span>
                                    </span>
                                    <span class="text-muted d-flex align-items-center">
                                        <i class="bi bi-person fs-5 me-2"></i>
                                        <span>{{ $new->writer }}</span>
                                    </span>
                                </div>
                                <a href="{{ route('news.show', $new) }}" class="btn btn-outline-primary mt-3">اقرأ
                                    المزيد</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Categories Start -->
@endsection
