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
                <h2 class="breadcumb-title">Keloid Hypertrophic Scar Treatment</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Keloid Hypertrophic Scar Treatment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="haircare-section py-5" style="background: linear-gradient(to right, #fdfaf6, #f2f9ff);">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Left Image -->
                <div class="col-lg-6 text-center position-relative">
                    <div class="image-stack position-relative d-inline-block p-3"
                        style="background:#fff; border-radius:15px; box-shadow:0 15px 30px rgba(0,0,0,0.1); transform:rotate(-2deg);">

                        <img src="{{ asset('purnam/hair-treatment1.jpg') }}" alt="Keloid Treatment"
                            class="main-img rounded-4 shadow-lg"
                            style="width:320px; height:320px; object-fit:cover; border:4px solid #2f6d82; transform:rotate(2deg) scale(1.05); transition:all 0.4s ease-in-out;">

                        <img src="{{ asset('purnam/hair-treatment2.jpg') }}" alt="Hypertrophic Scar Removal"
                            class="overlay-img rounded-4 shadow-lg position-absolute"
                            style="width:240px; height:240px; object-fit:cover; bottom:-50px; right:-80px; border:4px solid #fff; transform:rotate(-5deg) scale(1.1); transition:all 0.4s ease-in-out;">

                        <div class="position-absolute top-0 start-0 translate-middle badge rounded-pill px-4 py-3"
                            style="background:#2f6d82; color:#fff; font-size:1rem; font-weight:600; letter-spacing:1.5px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                            DERMATOSURGERY
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#2f6d82; font-size:1rem; letter-spacing:2px;">
                        Scar Management
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:2.7rem; color:#333; letter-spacing:-1px; line-height:1.3;">
                        Keloid & Hypertrophic Scar Treatment
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.1rem; line-height:1.8;">
                        <strong style="color:#2f6d82;">Keloids</strong> and <strong>hypertrophic scars</strong> are
                        overgrowths of scar tissue that can be itchy, painful, or cosmetically concerning.
                        At our clinic, we use advanced <strong>scar management therapies</strong> to flatten, soften,
                        and
                        improve the appearance of these scars, while minimizing recurrence.
                        Every treatment is tailored to your scar type and skin needs.
                    </p>

                    <div class="row g-4">
                        <!-- Treatments -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#2f6d82;">
                                        <i class="fas fa-syringe me-2"></i>Treatment Options
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>
                                            <strong>Intralesional Steroid Injections</strong> – reduces thickness &
                                            discomfort
                                        </li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>
                                            <strong>Cryotherapy</strong> – freezing keloids to flatten & shrink them
                                        </li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>
                                            <strong>Surgical Excision</strong> – careful removal of scar tissue with
                                            recurrence control
                                        </li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>
                                            <strong>Laser Therapy</strong> – smoothens surface & reduces redness
                                        </li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>
                                            <strong>Silicone Gel/Sheets</strong> – non-invasive scar softening approach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#2f6d82;">
                                        <i class="fas fa-heart me-2"></i>Benefits
                                    </h5>
                                    <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Flattens raised
                                            scars effectively</li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Relieves itching &
                                            tenderness</li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Improves cosmetic
                                            appearance</li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Minimizes chance
                                            of recurrence</li>
                                        <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Boosts
                                            self-confidence & comfort</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Aftercare -->
                    <div class="mt-4">
                        <div class="card border-0 shadow-sm" style="background:#fff; border-radius:10px;">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color:#2f6d82;">
                                    <i class="fas fa-notes-medical me-2"></i>Aftercare Tips
                                </h5>
                                <ul class="list-unstyled mb-0" style="color:#444; line-height:1.8;">
                                    <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Protect treated area
                                        from friction & trauma</li>
                                    <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Apply silicone
                                        gels/sheets as recommended</li>
                                    <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Follow medication
                                        schedule strictly</li>
                                    <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Avoid unnecessary sun
                                        exposure</li>
                                    <li><i class="fas fa-check me-2" style="color:#2f6d82;"></i>Attend regular
                                        follow-ups to prevent recurrence</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-4">
                        <a href="/appointment" class="btn px-4 py-3"
                            style="background:#2f6d82; color:#fff; border-radius:8px; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2); transition:0.3s;">
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
