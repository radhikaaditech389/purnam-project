<!doctype html>
<html class="no-js" lang="zxx">

@include('layouts.head')

<body>
    <div class="preloader ">
        <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('purnam/img/Punam_ben Logo.png') }}" alt="purnam">
            <span class="loader"></span>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div class="th-menu-wrapper">
        <div class="th-menu-area">
            <div class="mobile-logo">
                <a href="index.html"><img src="{{ asset('purnam/img/logo.svg') }}" alt="Rasm"></a>
                <div class="close-menu">
                    <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            @include('layouts.mobile_menu')
        </div>
    </div>

    {{-- Sidemenu --}}
    @include('layouts.sidebar')

    {{-- Header Area --}}
    @include('layouts.header')

    {{-- Breadcumb --}}
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/treatment-images/plastic_surgery_poster1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Plastic Surgery</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Plastic Surgery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="haircare-section py-5" style="background: linear-gradient(to right, #fdfaf6, #f0f8ff);">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Left Side: Images -->
                <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                    <!-- First Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/treatment-images/plastic_surgery.jpg') }}"
                                alt="Dandruff Treatment" class="main-img rounded-4 shadow"
                                style="width: 550px; height: 400px; margin-bottom: 50px; object-fit: cover;">
                            {{-- <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#a07855; color:#fff; border-radius:20px; width:155px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                Hair Problems
                            </div> --}}
                        </div>
                    </div>

                    <!-- Second Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/treatment-images/plastic_surgery2.jpg') }}"
                                alt="Alopecia Treatment" class="overlay-img rounded-4 shadow"
                                style="width: 550px; height: 400px; object-fit: cover;">
                            {{-- <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#a07855; color:#fff; border-radius:20px; width:155px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                Hair Care
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#a07855; font-size:1rem; letter-spacing:2px;">
                        Reconstructive & Cosmetic Solutions
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:2.7rem; color:#333; letter-spacing:-1px; line-height:1.3;">
                        Plastic Surgery
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.1rem; line-height:1.8;">
                        <strong>Plastic Surgery</strong> combines science and artistry to restore, reconstruct,
                        and enhance the natural appearance of the skin, face, and body. Whether for
                        <strong>cosmetic improvement, correction of deformities, or post-trauma reconstruction</strong>,
                        our advanced procedures are tailored to individual needs, ensuring safe, effective,
                        and natural-looking results.
                    </p>

                    <div class="row g-4">
                        <!-- Types of Plastic Surgery -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855;">
                                        <i class="fas fa-user-md me-2"></i>Procedures Offered
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Scar revision
                                            surgery</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Burn
                                            reconstruction</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Facial
                                            rejuvenation & cosmetic surgery</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Breast & body
                                            contouring procedures</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Earlobe, lip, &
                                            eyelid corrections</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855;">
                                        <i class="fas fa-heart me-2"></i>Benefits
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Restores function
                                            & natural appearance</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Improves
                                            self-confidence & quality of life</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Corrects birth
                                            defects, trauma, or aging signs</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Delivers
                                            long-lasting, natural results</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aftercare -->
                    <div class="mt-4">
                        <div class="card border-0 shadow-sm" style="background:#fff; border-radius:10px;">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color:#a07855;">
                                    <i class="fas fa-notes-medical me-2"></i>Aftercare Guidance
                                </h5>
                                <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Follow wound care and
                                        dressing instructions</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Take prescribed
                                        medications on time</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Avoid strenuous
                                        activity until cleared by surgeon</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Attend scheduled
                                        follow-up visits</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Maintain healthy skin
                                        & lifestyle for better outcomes</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-4">
                        <a href="/appointment" class="btn px-4 py-3"
                            style="background:#a07855; color:#fff; border-radius:8px; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2); transition:0.3s;">
                            Book Appointment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer Area --}}
    @include('layouts.footer_link')

    {{-- Scroll To Top --}}
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    {{-- All Js File --}}
    @include('layouts.footer')
</body>

</html>
