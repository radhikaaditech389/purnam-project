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
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/treatment-images/cyst_removal_poster1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Cyst Removal</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Cyst Removal</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="haircare-section py-5" style="background: linear-gradient(to right, #fdfaf6, #fff3f0);">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Left Side: Images -->
                <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                    <!-- First Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/treatment-images/cyst_removal.jpg') }}"
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
                            <img src="{{ asset('purnam/treatment-images/cyst_removal2.jpg') }}"
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
                        Minor Surgical Care
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:2.7rem; color:#333; letter-spacing:-1px; line-height:1.3;">
                        Cyst Removal Surgery
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.1rem; line-height:1.8;">
                        Skin cysts, such as <strong>sebaceous, epidermoid, or pilar cysts</strong>, are common
                        non-cancerous lumps that may cause discomfort, cosmetic concerns, or infection.
                        <strong>Cyst Removal Surgery</strong> is a safe outpatient procedure that completely
                        excises the cyst sac, preventing recurrence and restoring smooth, healthy skin.
                    </p>

                    <div class="row g-4">
                        <!-- Procedure -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855;">
                                        <i class="fas fa-tools me-2"></i>Procedure
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Performed under
                                            local anesthesia</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Small incision
                                            over the cyst</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Complete removal
                                            of cyst sac</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Minimal scarring
                                            with fine sutures</li>
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
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Eliminates pain,
                                            swelling, or discharge</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Improves cosmetic
                                            appearance</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Prevents infection
                                            and recurrence</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Quick recovery
                                            with minimal downtime</li>
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
                                    <i class="fas fa-notes-medical me-2"></i>Aftercare Tips
                                </h5>
                                <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Keep the area clean
                                        and covered initially</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Apply prescribed
                                        ointments regularly</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Avoid scratching or
                                        pressing the site</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Follow-up for stitch
                                        removal if advised</li>
                                    <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Report redness, pus,
                                        or swelling promptly</li>
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
