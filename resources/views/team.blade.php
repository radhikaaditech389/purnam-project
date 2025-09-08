<!doctype html>
<html class="no-js" lang="zxx">

@include('layouts.head')


<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <!--********************************
   		Code Start From Here 
	******************************** -->
    <!--==============================
     Preloader
  ==============================-->

  
    <div class="preloader ">
        <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('purnam/img/logo.svg') }}" alt="Rasm">
            <span class="loader"></span>
        </div>
    </div><!--==============================
    Mobile Menu
  ============================== -->
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
    </div><!--==============================
    Sidemenu
============================== -->
@include('layouts.sidebar')
<!--==============================
    Sidemenu
============================== -->
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
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Our Team</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
Team Area  
==============================-->
    <section class="team-area2 space">
        <div class="container">
            <div class="row gy-4">

                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_1.jpg') }}" alt="Team') }}">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Daniel Martin</a></h3>
                            <span class="team-desig">Hair Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_2.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Emma Mary</a></h3>
                            <span class="team-desig">Nail Designer</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_3.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Michel Jonson</a></h3>
                            <span class="team-desig">Beauty Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_4.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                            <span class="team-desig">Beauty Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_5.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Daniel Martin</a></h3>
                            <span class="team-desig">Spa Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_6.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Emma Mary</a></h3>
                            <span class="team-desig">Spa Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_7.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Michel Jonson</a></h3>
                            <span class="team-desig">Spa Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_8.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                            <span class="team-desig">Spa Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_9.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Daniel Martin</a></h3>
                            <span class="team-desig">Hair Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_10.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Emma Mary</a></h3>
                            <span class="team-desig">Hair Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_11.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Michel Jonson</a></h3>
                            <span class="team-desig">Hair Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_12.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                            <span class="team-desig">Hair Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="10%" data-right="0%"><img src="{{ asset('purnam/img/shape/flower_1_12.png') }}" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="10%" data-left="0%"><img src="{{ asset('purnam/img/shape/flower_1_16.png') }}" alt="shape">
        </div>
    </section> <!--==============================
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
@include('layouts.footer')


</body>

</html>