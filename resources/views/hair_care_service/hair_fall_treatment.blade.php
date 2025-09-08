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
                <h2 class="breadcumb-title">Diffuse Hair Fall Treatment</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Diffuse Hair Fall Treatment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="haircare-section py-5" style="background: linear-gradient(to right, #fdfaf6, #ffece0);">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Left Side: Images -->
                <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                    <!-- First Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/treatment-images/hair_fall_treatment.jpg') }}" alt="Dandruff Treatment"
                                class="main-img rounded-4 shadow"
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
                            <img src="{{ asset('purnam/treatment-images/hair_fall.jpg') }}" alt="Alopecia Treatment"
                                class="overlay-img rounded-4 shadow"
                                style="width: 550px; height: 400px; object-fit: cover;">
                            {{-- <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#a07855; color:#fff; border-radius:20px; width:155px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                Hair Care
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#a07855; font-size:1rem; letter-spacing:2px;">
                        Restore Hair Density
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:3.2rem; color:#333; letter-spacing: -1.5px; line-height:1.2;">
                        Diffuse Hair Fall Treatment
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.15rem; line-height:1.8;">
                        Diffuse hair fall is a condition where hair shedding occurs evenly across the scalp, causing a
                        gradual loss of volume and density. At <strong style="color:#a07855;">our clinic</strong>, we
                        combine medical expertise with advanced therapies to strengthen follicles and restore natural
                        growth.
                    </p>

                    <div class="row g-4">
                        <!-- What is it & Symptoms -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background: #fff; border-radius: 10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-info-circle me-2" style="color:#a07855;"></i>About & Symptoms
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Diffuse hair fall affects both men and women at any age.
                                    </p>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Thinning
                                            across scalp</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Reduced
                                            hair density</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Excessive
                                            shedding on wash/comb</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Widening
                                            hair parting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Causes -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background: #fff; border-radius: 10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-exclamation-circle me-2" style="color:#a07855;"></i>Causes
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Multiple factors can lead to diffuse hair thinning:
                                    </p>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Nutritional
                                            deficiencies</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Stress &
                                            poor lifestyle</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Hormonal
                                            imbalances (Thyroid, PCOS)</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Illness or
                                            medications</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Treatments -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background: #fff; border-radius: 10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-leaf me-2" style="color:#a07855;"></i>Treatment Approach
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Our personalized treatments address the root cause:
                                    </p>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>PRP & GFC
                                            Growth Therapy</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Mesotherapy
                                            with vitamins & peptides</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Low-Level
                                            Laser Therapy (LLLT)</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Nutritional
                                            & lifestyle guidance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Why Choose Us -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background: #fff; border-radius: 10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-star me-2" style="color:#a07855;"></i>Why Choose Us?
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Trusted expertise and proven results:
                                    </p>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Experienced
                                            dermatologists & trichologists</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Advanced
                                            non-surgical solutions</li>
                                        <li><i class="fas fa-check-circle me-2"
                                                style="color:#a07855;"></i>Personalized treatment plans</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Long-term
                                            care & support</li>
                                    </ul>
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
