<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.head')
<style>
/* .overlay-img {
    position: absolute;
    bottom: -20px;
    right: -20px;
    border: 4px solid #fff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
} */

.circle-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #f8e1d9;
    border-radius: 50%;
    padding: 10px 20px;
    font-weight: bold;
    color: #6b3a2d;
    font-size: 14px;
    text-align: center;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

.text-brown {
    color: #a25b42;
}

.btn-brown {
    background-color: #a25b42;
    color: #fff;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn-brown:hover {
    background-color: #7c3f2a;
}
</style>

<body>
    @include('layouts.mobile_menu')


    </div>
    </div>
    @include('layouts.sidebar')

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
    <!--==============================
	Header Area
==============================-->
    @include('layouts.header')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/glow-treatment_bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">About Glow Treatment</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>About Glow Treatment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  <!--==============================
Glow Treatment Procedure Section
==============================-->
<section class="glow-treatment-section py-5 skin-section-bg">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side: Images -->
            <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                <!-- First Image -->
                <div class="col-lg-12 position-relative mb-4">
                    <div class="image-wrapper position-relative">
                        <img src="{{ asset('purnam/glow-treatment.jpg') }}" alt="Glow Treatment Before"
                            class="main-img rounded-4 shadow"
                            style="width: 550px; height: 300px; object-fit: cover;">
                        <div class="circle-badge"
                            style="position:absolute; top:15px; left:15px; background:#c28565; color:#fff; border-radius:20px; width:180px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; font-size:14px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                            Glow Treatment
                        </div>
                    </div>
                </div>

                <!-- Second Image -->
                <div class="col-lg-12 position-relative">
                    <div class="image-wrapper position-relative">
                        <img src="{{ asset('purnam/glow-treatment2.jpg') }}" alt="Glow Treatment After"
                            class="overlay-img rounded-4 shadow"
                            style="width: 550px; height: 300px; object-fit: cover;">
                        <div class="circle-badge"
                            style="position:absolute; top:15px; left:15px; background:#c28565; color:#fff; border-radius:20px; width:180px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; font-size:14px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                            Glow Treatment
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-6">
                <span class="text-uppercase fw-semibold mb-2 d-block"
                    style="color:#c28565; font-size:1rem; letter-spacing:2px;">
                    Brightness & Radiance
                </span>
                <h2 class="fw-bold mb-4"
                    style="font-size:3rem; color:#333; letter-spacing:-1.5px; line-height:1.2;">
                    Glow Treatment Procedure
                </h2>

                <p class="mb-4 lead" style="color:#555; font-size:1.15rem; line-height:1.8;">
                    <strong style="color:#c28565;">Glow Treatments</strong> are designed to restore skin’s natural radiance by removing dullness, deeply nourishing, and rejuvenating the skin to give a brighter, even-toned, and refreshed look.
                </p>

                <div class="row g-4">
                    <!-- Step 1 -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                    <i class="fas fa-sun me-2" style="color:#c28565;"></i>Brightening
                                </h5>
                                <p class="card-text" style="color:#666; line-height:1.7;">
                                    Reduces dullness and pigmentation for a naturally brighter skin tone.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                    <i class="fas fa-leaf me-2" style="color:#c28565;"></i>Rejuvenation
                                </h5>
                                <p class="card-text" style="color:#666; line-height:1.7;">
                                    Nourishes the skin with essential vitamins and hydration for a fresh, youthful glow.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div class="col-md-12">
                        <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                            <div class="card-body">
                                <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                    <i class="fas fa-star me-2" style="color:#c28565;"></i>Benefits of Glow Treatment
                                </h5>
                                <ul class="list-unstyled mb-0"
                                    style="font-size:0.95rem; color:#444; line-height:2;">
                                    <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Brightens skin tone instantly</li>
                                    <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Reduces dullness & tired look</li>
                                    <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Hydrates & nourishes deeply</li>
                                    <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Improves skin texture & softness</li>
                                    <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Safe for all skin types</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="mt-4">
                    <a href="/appointment" class="btn px-4 py-3"
                        style="background:#c28565; color:#fff; border-radius:8px; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2); transition:0.3s;">
                        Book Your Glow Treatment Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



    <!--==============================
			Footer Area
==============================-->
    @include('layouts.footer_link')




    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>



    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    @include('layouts.footer')


</body>

</html>