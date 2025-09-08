<!doctype html>
<html class="no-js" lang="zxx">

@include('layouts.head')
<body>
    <!-- <div class="preloader ">
        <button class="th-btn style3 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <img src="{{ asset('purnam/img/logo.svg') }}" alt="Rasm">
            <span class="loader"></span>
        </div>
    </div> 
   -->
  @include('layouts.mobile_menu')
  
@include('layouts.sidebar')

@include('layouts.header')

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/img/breadcumb/Contact_Page_BG.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Appointment</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
Appointment Area  
==============================-->
    <div class="position-relative space">
        <div class="container">
            <form action="booking.php" method="POST" class="booking-form-area ajax-booking">
                <div class="booking-title-area">
                    <div class="title-area mb-40 text-center wow fadeInUp">
                        <span class="sub-title style2">Make An Appointment</span>
                        <img src="assets/img/theme-img/title_shape_1.svg" alt="">
                        <!-- <h2 class="sec-title">Relax Anytime Any Day At 20% Discount</h2> -->
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <i class="fa-light fa-user"></i>
                        <input type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <i class="fa-light fa-user"></i>
                        <input type="text" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <i class="fa-light fa-envelope"></i>
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <i class="fa-light fa-phone"></i>
                        <input type="text" placeholder="phone" class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <i class="fa-regular fa-tag"></i>
                        <select name="subject" id="subject" class="form-select nice-select">
                            <option value="" disabled selected hidden>Select Subject</option>
                            <option value="Engine Diagnostics">Spa & Massage</option>
                            <option value="Facial & Massage">Facial & Massage</option>
                            <option value="Engine Diagnostics">Head Massage</option>
                            <option value="Sports Massage">Sports Massage</option>
                            <option value="Stone Massage">Stone Massage</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Select Date">
                        <i class="fa-light fa-calendar-days"></i>
                    </div>
                    <div class="form-group col-12">
                        <input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Select Time">
                        <i class="fa-light fa-clock"></i>
                    </div>
                    <div class="btn-group justify-content-center justify-content-lg-start">
                        <button class="th-btn fw-btn">Make An Appointment <i class="fa-solid fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>

    </div><!--============================== 
Testimonial Area  
==============================-->
    <div class="overflow-hidden bg-smoke space">
        <div class="container">
            <div class="row">
                <div class="title-area text-center mb-25">
                    <span class="sub-title style2">Testimonials</span>
                    <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title">Our Customer Feedback</h2>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid style3 wow fadeInUp">
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/testi_2_1.jpg') }}" alt=""></div>
                        <h3 class="box-title">Whether youre preparing for a special occasion or simply want to pamper yourself our talented stylists will work closely with you to create.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Angelina Margret</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}" alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}" alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}" alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid style3 wow fadeInDown">
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/testi_2_2.jpg') }}" alt=""></div>
                        <h3 class="box-title">Parallel task user friendly through supply are chains. Dynamically simplify reliable meta service visionary sources unleash tactical.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Senjuti das</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}" alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}" alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}" alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid style3 wow fadeInUp">
                        <div class="testi-grid_img"><img src="assets/img/testimonial/testi_2_3.jpg" alt=""></div>
                        <h3 class="box-title">Continually utilize 24/365 bandwidth before real-time interfaces. Proin mollis, ipsum vel ultrices dictum. Credibly grow users deliver.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Jenifer Lopez</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}" alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}" alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}" alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid style3 wow fadeInDown">
                        <div class="testi-grid_img"><img src="assets/img/testimonial/testi_2_4.jpg" alt=""></div>
                        <h3 class="box-title">Intrinsicly pontifice pandemic ships growth strategies and partner convergence lives multidi sciplinar business Proin mollis ultrices</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Dianne Russell</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}" alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}" alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump  d-none d-lg-block" data-bottom="15%" data-left="0%"><img src="assets/img/shape/leaves_1.png" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="0%"><img src="assets/img/shape/leaves_7.png" alt="shape">
        </div>
    </div><!--==============================
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