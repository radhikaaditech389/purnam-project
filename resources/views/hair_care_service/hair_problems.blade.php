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
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/treatment-images/hair_problem_poster1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Hair Problems (Dandruff, Alopecia)</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Hair Problems (Dandruff, Alopecia)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="haircare-section py-5" style="background: linear-gradient(to right, #fdfaf6, #fff1e6);">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side: Images -->
                <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                    <!-- First Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/treatment-images/hair_problems.jpg') }}"
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
                            <img src="{{ asset('purnam/treatment-images/hair_problem_treatment.jpg') }}"
                                alt="Alopecia Treatment" class="overlay-img rounded-4 shadow"
                                style="width: 550px; height: 400px; object-fit: cover;">
                            {{-- <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#a07855; color:#fff; border-radius:20px; width:155px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                Hair Care
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Right Side: Content -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#a07855; font-size:1rem; letter-spacing:2px;">
                        Scalp & Hair Health
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:3rem; color:#333; letter-spacing:-1.5px; line-height:1.2;">
                        Hair Problems: Dandruff & Alopecia
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.15rem; line-height:1.8;">
                        Struggling with <strong style="color:#a07855;">dandruff</strong> or
                        <strong style="color:#a07855;">alopecia</strong>? Our expert dermatologists
                        provide advanced solutions to restore scalp health, reduce hair fall, and
                        promote stronger, healthier hair growth.
                    </p>

                    <div class="row g-4">
                        <!-- Dandruff -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-snowflake me-2" style="color:#a07855;"></i>Dandruff
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Get rid of flaking & itching with targeted anti-fungal and soothing scalp
                                        treatments.
                                    </p>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Deep scalp
                                            analysis</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Anti-fungal
                                            therapy</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Hydration & detox
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Alopecia -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-leaf me-2" style="color:#a07855;"></i>Alopecia
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Advanced therapies to slow down hair loss, stimulate regrowth, and restore
                                        density.
                                    </p>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>PRP / GFC Therapy
                                        </li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>QR678 Injections
                                        </li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Laser & Meso
                                            Therapy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Our Approach -->
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-stethoscope me-2" style="color:#a07855;"></i>Our Approach
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Detailed scalp
                                            analysis & trichoscopy</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Targeted dandruff
                                            therapies</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Advanced alopecia
                                            treatments (PRP, QR678, Laser)</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Customized
                                            lifestyle & nutrition guidance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-award me-2" style="color:#a07855;"></i>Benefits of Our
                                        Treatment
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Relief from
                                            itching & flaking</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Reduced hair fall
                                            & stronger roots</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Visible regrowth
                                            in alopecia cases</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Restored scalp
                                            health & boosted confidence</li>
                                    </ul>
                                </div>
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
