<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.head')
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
                    <p class="about-text">Centric applications productize front end portals visualize front end is results and value added</p>
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
                            <a href="blog-details.html"><img src="{{ asset('purnam/img/blog/recent-post-2-1.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Local residents and a few celebrities, too</a></h4>
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>19 June, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{ asset('purnam/img/blog/recent-post-2-2.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Local residents and a few celebrities, too</a></h4>
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
                    <p class="md-10">Sign Up to get updates & news about us . Get Latest Deals from Walker's Inbox to our mail address.</p>
                    <div class="footer-search-contact mt-25">
                        <form>
                            <input class="form-control" type="email" placeholder="Enter your email">
                        </form>
                        <div class="footer-btn mt-10">
                            <button type="submit" class="th-btn style3 fw-btn">Subscribe Now <i class="fa-regular fa-arrow-right"></i></button>
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
    </div><!--==============================
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
    </div><!--==============================
About Area  
==============================-->
<section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row">
                <div class="title-area text-center mb-20">
                    <span class="sub-title">What We Do</span>
                    <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title">Facial & Your Skincare Treatment</h2>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="serviceSlide1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">

                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img src="{{ asset('purnam/img/update_2/icon/service_1_1.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Chemical Peels</a></h3>
                            <p class="service-box_text">Chemical peels involve applying a chemical solution to the skin.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img src="{{ asset('purnam/img/update_2/icon/service_1_2.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Facial Treatment</a></h3>
                            <p class="service-box_text">Facials are a popular skin care treatment that involves cleansing, exfoliation</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img src="{{ asset('purnam/img/update_2/icon/service_1_3.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Laser & Light Therapy</a></h3>
                            <p class="service-box_text">Chemical peels involve applying a chemical solution to the skin.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img src="{{ asset('purnam/img/update_2/icon/service_1_4.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Acne Treatments</a></h3>
                            <p class="service-box_text">Various treatments are available for acne, including topical treatments</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="shape-mockup shape-wrapp jump d-none d-xxl-block" data-top="5%" data-right="0%"><img src="{{ asset('purnam/img/update_2/shape/leaves_1.png') }}" alt="shape">
        </div>
    </section><!--==============================
About Area  
==============================-->
    <div class="about-sec bg-smoke overflow-hidden space" id="about-sec" data-bg-src="{{ asset('purnam/about-bg-image.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="img-box6">
                        <div class="img1 wow fadeInLeft">
                            <!-- <img class="tilt-active" src="{{ asset('purnam/img/update_2/normal/about_1_1.jpg') }}" alt="About"> -->
                             <img class="tilt-active" src="{{ asset('purnam/woman-with-jade-roller.jpg') }}" alt="About">
                        </div>
                        <div class="counter-content style3">
                            <div class="th-counterup wow fadeInUp">
                                <div class="inner">
                                    <div class="th-icon">
                                        <img src="{{ asset('purnam/img/icon/counter_1_1.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="26">00</span>
                                            <span class="counter-number">+</span>
                                        </h3>
                                        <p class="counter-card_text">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="th-counterup wow fadeInUp">
                                <div class="inner">
                                    <div class="th-icon">
                                        <img src="{{ asset('purnam/img/icon/counter_1_4.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="36">00</span>
                                            <span class="counter-number">+</span>
                                        </h3>
                                        <p class="counter-card_text">Specialists Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-xl-5 wow fadeInRight">
                        <div class="title-area mb-25">
                            <span class="sub-title">About Us<img src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                            <h2 class="sec-title mb-20">We Provide Skincare Secrets for Radiance Unveiled</h2>
                            <p class="">Unveiling Skincare Secrets is an exclusive gateway to a world of luminous skin.
                                Our platform curates a wealth of expert insights, tried-and-true skincare secrets, and
                                tailored recommendations to help you.</p>
                        </div>
                        <div class="journey-wrap style2">
                            <div class="checklist">
                                <ul>
                                    <li>Customized Skincare Regimen</li>
                                    <li>Dermal Fillers and Injectables</li>
                                    <li>Lymphatic Drainage Massage</li>
                                    <li>The Microdermabrasion</li>
                                    <li>The Skin Tightening</li>
                                </ul>
                            </div>
                            <div class="journey-image style2">
                                <img src="{{ asset('purnam/skin-care-small.jpg') }}" alt="">
                                <a href="https://www.youtube.com/watch?v=ADmQTw4qqTY" class="play-btn popup-video">
                                    <i class="fa-sharp fa-solid fa-play"></i></a>
                            </div>
                        </div>
                        <div class="btn-group mt-25">
                            <a href="about.html" class="th-btn">Discover More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                            <div class="about-profile">
                                <div class="about-avater">
                                    <img src="{{ asset('purnam/img/update_2/shape/about-thumb_1.png') }}" alt="about">
                                </div>
                                <div class="media-body">
                                    <h5 class="title">Emily Jackson</h5>
                                    <span class="desig">CEO Of Rasm Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="appointment-area space" data-bg-src="{{ asset('purnam/img/update_3/bg/video_bg_1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="appointment-video style2">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-play-btn play-btn popup-video">
                            <i class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                    <div class="appointment-content style3">
                        <div class="title-area mb-25 text-center text-lg-start wow fadeInLeft">
                            <span class="sub-title">Hello There!<img src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                            <h2 class="sec-title">Where your well being is our priority</h2>
                            <p>Welcome to Rasm Plastic Surgery Clinic, where dreams of self-discovery and reinvention come
                                to life. Our state-of-the-art facility is a sanctuary of innovation and expertise,of the our
                                offering .</p>
                        </div>
                        <div class="btn-group mt-45">
                            <a href="about.html" class="th-btn">Discover More <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            <div class="feature-wrapper">
                                <div class="feature-icon">
                                    <a href="tel:+256214203215"><i class="fa-solid fa-phone"></i></a>
                                </div>
                                <div class="media-body">
                                    <a class="box-title" href="tel:+256214203215">+256 214 203 215</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="team-area-two overflow-hidden space">
        <div class="container">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center">
                    <span class="sub-title style2">Our Team</span>
                    <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title">Our Expert Surgeon at Rasm Plastic Surgery Clinic</h2>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="teamSlide2" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-block">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/update_3/team/team_1_1.jpg') }}" alt="Team">
                        </div>
                        <div class="team-block_content">
                            <h3 class="box-title"><a href="team-details.html">Lila Rodriguez</a></h3>
                            <span class="team-desig">Cosmatic Sergeon</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <h3 class="box-title"><a href="team-details.html">Lila Rodriguez</a></h3>
                            <span class="team-desig">Cosmatic Sergeon</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-block">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/update_3/team/team_1_2.jpg') }}" alt="Team">
                        </div>
                        <div class="team-block_content">
                            <h3 class="box-title"><a href="team-details.html">Henry Lewis</a></h3>
                            <span class="team-desig">Plastic Sergeon</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <h3 class="box-title"><a href="team-details.html">Henry Lewis</a></h3>
                            <span class="team-desig">Plastic Sergeon</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-block">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/update_3/team/team_1_3.jpg') }}" alt="Team">
                        </div>
                        <div class="team-block_content">
                            <h3 class="box-title"><a href="team-details.html">Mia Eva</a></h3>
                            <span class="team-desig">Cosmatic Sergeon</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <h3 class="box-title"><a href="team-details.html">Mia Eva</a></h3>
                            <span class="team-desig">Cosmatic Sergeon</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-block">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/update_3/team/team_1_4.jpg') }}" alt="Team">
                        </div>
                        <div class="team-block_content">
                            <h3 class="box-title"><a href="team-details.html">Amelia Chawla</a></h3>
                            <span class="team-desig">Plastic Sergeon</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <h3 class="box-title"><a href="team-details.html">Amelia Chawla</a></h3>
                            <span class="team-desig">Plastic Sergeon</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-block">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/update_3/team/team_1_5.jpg') }}" alt="Team">
                        </div>
                        <div class="team-block_content">
                            <h3 class="box-title"><a href="team-details.html">Lila Rodriguez</a></h3>
                            <span class="team-desig">Cosmatic Sergeon</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <h3 class="box-title"><a href="team-details.html">Lila Rodriguez</a></h3>
                            <span class="team-desig">Cosmatic Sergeon</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="shape-mockup movingX d-none d-lg-block" data-top="10%" data-right="0%"><img src="{{ asset('purnam/img/update_3/shape/shape_2.png') }}" alt="shape">
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
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
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