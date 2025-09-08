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
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/img/breadcumb/Contact_Page_BG.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">About Clinic</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>About Clinic</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
About Area  
==============================-->
    <section class="hydrafacial-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side: Images -->
                <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                    <div class="col-lg-12">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/hydra_facial.jpg') }}" alt="Hair Treatment"
                                class="main-img rounded-4 shadow" style="width: 550px; height: 300px;margin-bottom: 50px;
                            
}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="image-wrapper">
                            <img src="{{ asset('images/hydra_facial2.jpg') }}" alt="Hair Care"
                                class="overlay-img rounded-4 shadow" style="width: 550px; height: 300px;">
                        </div>
                    </div>
                    <div class="circle-badge">
                        <span>Hair Care</span>
                    </div>
                    <!-- </div> -->
                </div>

                <!-- Right Side: Content -->
                <div class="col-lg-6">
                    <h6 class="text-uppercase text-brown mb-2">Skin Rejuvenation</h6>
                    <h2 class="fw-bold mb-3">HydraFacial – Advanced Skin Care Solution</h2>
                    <p>
                        HydraFacial is a revolutionary non-invasive treatment that combines
                        cleansing, exfoliation, extraction, hydration, and antioxidant protection.
                        It delivers instant results with no downtime and is suitable for all
                        skin types, making it one of the most effective solutions for glowing,
                        youthful, and healthy-looking skin.
                    </p>
                    <h5 class="fw-semibold mt-3">✔ Common Skin Problems Treated:</h5>
                    <ul class="list-unstyled mb-3">
                        <li>✔ Oily & Congested Skin</li>
                        <li>✔ Fine Lines & Wrinkles</li>
                        <li>✔ Uneven Skin Tone & Texture</li>
                        <li>✔ Dry & Dehydrated Skin</li>
                        <li>✔ Enlarged Pores & Blackheads</li>
                        <li>✔ Sun Damage & Pigmentation</li>
                        <li>✔ Dull & Tired-Looking Skin</li>
                    </ul>

                    <h5 class="fw-semibold mt-3">✨ Benefits of HydraFacial:</h5>
                    <ul class="list-unstyled mb-3">
                        <li>✔ Deeply cleanses & detoxifies skin</li>
                        <li>✔ Provides intense hydration</li>
                        <li>✔ Improves elasticity & firmness</li>
                        <li>✔ Boosts skin radiance & glow</li>
                        <li>✔ Painless and relaxing treatment</li>
                        <li>✔ No irritation or downtime</li>
                    </ul>

                    <a href="{{ url('hydrafacial') }}" class="btn btn-brown px-4 py-2 mt-3">BOOK NOW →</a>
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