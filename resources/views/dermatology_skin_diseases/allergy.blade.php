<!doctype html>
<html class="no-js" lang="zxx">

@include('layouts.head')

<body>
    <div class="preloader ">
        <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('purnam/img/logo.svg') }}" alt="Rasm">
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

    {{-- Sidemenu --}}
    <div class="sidemenu-wrapper d-none d-lg-block ">
        <div class="sidemenu-content bg-black2">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="index.html"><img src="{{ asset('purnam/img/logo-white.svg') }}" alt="Rasm"></a>
                    </div>
                    <p class="about-text">Centric applications productize front end portals visualize front end is
                        results and value added</p>
                    <div class="working-time">
                        <span class="title">We Are Available:</span>
                        <p class="desc">Mon-Sat: 08.00 am to 5.00 pm</p>
                    </div>
                    <div class="th-social  footer-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('purnam/img/blog/recent-post-2-1.jpg') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Local residents and
                                    a few celebrities, too</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>19 June, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('purnam/img/blog/recent-post-2-2.jpg') }}"
                                    alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Local residents and
                                    a few celebrities, too</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>22 June, 2024</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h4 class="widget_title">Newsletter</h4>
                <div class="newsletter-widget">
                    <p class="md-10">Sign Up to get updates & news about us . Get Latest Deals from Walker's Inbox to
                        our mail address.</p>
                    <div class="footer-search-contact mt-25">
                        <form>
                            <input class="form-control" type="email" placeholder="Enter your email">
                        </form>
                        <div class="footer-btn mt-10">
                            <button type="submit" class="th-btn style3 fw-btn">Subscribe Now <i
                                    class="fa-regular fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>

    {{-- Header Area --}}
    @include('layouts.header')

    {{-- Breadcumb --}}
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Allergy</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Allergy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="haircare-section py-5" style="background: linear-gradient(to right, #fdfaf6, #fff3eb);">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Left Image -->
                <div class="col-lg-6 text-center position-relative">
                    <div class="image-stack position-relative d-inline-block p-3"
                        style="background:#fff; border-radius:15px; box-shadow:0 15px 30px rgba(0,0,0,0.1); transform: rotate(-3deg);">

                        <img src="{{ asset('purnam/hair-treatment1.jpg') }}" alt="Allergy Treatment"
                            class="main-img rounded-4 shadow-lg"
                            style="width:320px; height:320px; object-fit:cover; border:4px solid #8b5e3c; transform:rotate(3deg) scale(1.05); transition:all 0.4s ease-in-out;">

                        <img src="{{ asset('purnam/hair-treatment2.jpg') }}" alt="Skin Allergy Care"
                            class="overlay-img rounded-4 shadow-lg position-absolute"
                            style="width:240px; height:240px; object-fit:cover; bottom:-50px; right:-80px; border:4px solid #fff; transform:rotate(-8deg) scale(1.1); transition:all 0.4s ease-in-out;">

                        <div class="position-absolute top-0 start-0 translate-middle badge rounded-pill px-4 py-3"
                            style="background:#a07855; color:#fff; font-size:1rem; font-weight:600; letter-spacing:1.5px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                            ALLERGY CARE
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#a07855; font-size:1rem; letter-spacing:2px;">
                        Relief for Sensitive Skin
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:2.7rem; color:#333; letter-spacing:-1px; line-height:1.3;">
                        Allergy Diagnosis & Treatment
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.1rem; line-height:1.8;">
                        <strong style="color:#a07855;">Skin and scalp allergies</strong> can cause itching, redness,
                        rashes, or irritation when your body reacts to certain triggers. At
                        <strong>Purnam</strong>, we identify the root cause of allergies and provide
                        targeted treatments for lasting relief.
                    </p>

                    <div class="row g-4">
                        <!-- Triggers -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855;">
                                        <i class="fas fa-exclamation-triangle me-2"></i>Common Triggers
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Dust, pollen, pet
                                            dander</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Hair dyes &
                                            cosmetics</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Foods &
                                            medications</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Insect bites,
                                            jewelry metals</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Our Approach -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855;">
                                        <i class="fas fa-stethoscope me-2"></i>Our Approach
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Advanced patch &
                                            allergy testing</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Targeted medicines
                                            & creams</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Soothing therapies
                                            for skin repair</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Lifestyle &
                                            trigger-avoidance plans</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855;">
                                        <i class="fas fa-award me-2"></i>Benefits
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Relief from
                                            itching & irritation</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Prevent recurrence
                                            of allergic rashes</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Safe & effective
                                            long-term solutions</li>
                                        <li><i class="fas fa-check me-2" style="color:#a07855;"></i>Healthier, more
                                            comfortable skin & scalp</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-4">
                        <a href="/appointment" class="btn px-4 py-3"
                            style="background:#a07855; color:#fff; border-radius:8px; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2); transition:0.3s;">
                            Book Consultation
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
