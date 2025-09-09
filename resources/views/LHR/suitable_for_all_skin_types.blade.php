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
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/treatment-images/fda_poster1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Suitable for All Skin Types (FDA Cleared)</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Suitable for All Skin Types (FDA Cleared)</li>
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
                            <img src="{{ asset('purnam/treatment-images/fda.jpg') }}"
                                alt="Laser Hair Removal All Skin Types" class="main-img rounded-4 shadow"
                                style="width: 550px; height: 400px; margin-bottom: 50px; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Second Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/treatment-images/fda2.jpg') }}" alt="Safe Hair Removal"
                                class="overlay-img rounded-4 shadow"
                                style="width: 550px; height: 400px; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#a07855; font-size:1rem; letter-spacing:2px;">
                        FDA-Approved Technology
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:3.2rem; color:#333; letter-spacing:-1.5px; line-height:1.2;">
                        Suitable for All Skin Types <br>(FDA Cleared)
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.15rem; line-height:1.8;">
                        Our <strong style="color:#a07855;">FDA-cleared laser hair removal</strong> technology is safe,
                        effective, and customized for every skin tone — from fair to deep complexions.
                        With advanced cooling systems and precision targeting, treatments are both
                        <strong style="color:#a07855;">gentle and highly effective</strong>, ensuring smooth, hair-free
                        skin
                        without damage or discomfort.
                    </p>

                    <div class="row g-4">
                        <!-- Concerns -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-info-circle me-2" style="color:#a07855;"></i>Concerns We
                                        Address
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Sensitivity
                                            on darker skin</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Risk of
                                            burns or pigmentation</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Patchy
                                            results with older methods</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Fear of
                                            pain during sessions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- How It Works -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-lightbulb me-2" style="color:#a07855;"></i>How It Works
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Adjustable
                                            wavelengths for all skin tones</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Smart
                                            cooling for comfort & safety</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Targeted
                                            follicle destruction</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>No damage
                                            to surrounding skin</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-heart me-2" style="color:#a07855;"></i>Benefits
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Safe for
                                            all skin colors</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Comfortable
                                            & pain-free experience</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Minimal
                                            risk of burns or marks</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Consistent,
                                            long-lasting results</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Why Choose Us -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#a07855; font-size:1.4rem;">
                                        <i class="fas fa-star me-2" style="color:#a07855;"></i>Why Choose Us?
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>FDA-cleared
                                            laser technology</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Custom
                                            settings for every skin tone</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Specialized
                                            dermatology team</li>
                                        <li><i class="fas fa-check-circle me-2" style="color:#a07855;"></i>Proven
                                            track record of safe results</li>
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
