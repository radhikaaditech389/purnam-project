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

    @include('layouts.mobile_menu')

    @include('layouts.sidebar')

    @include('layouts.header')

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

    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row">
                <div class="title-area text-center mb-20">
                    <span class="sub-title">What We Do</span>
                    <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title">Facial & Your Skincare Treatment</h2>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="serviceSlide1" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">

                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img
                                src="{{ asset('purnam/img/update_2/icon/service_1_1.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Chemical Peels</a></h3>
                            <p class="service-box_text">Chemical peels involve applying a chemical solution to the
                                skin.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img
                                src="{{ asset('purnam/img/update_2/icon/service_1_2.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Facial Treatment</a></h3>
                            <p class="service-box_text">Facials are a popular skin care treatment that involves
                                cleansing, exfoliation</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img
                                src="{{ asset('purnam/img/update_2/icon/service_1_3.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Laser & Light Therapy</a></h3>
                            <p class="service-box_text">Chemical peels involve applying a chemical solution to the
                                skin.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6">
                    <div class="service-box style2">
                        <div class="service-box_icon"> <img
                                src="{{ asset('purnam/img/update_2/icon/service_1_4.svg') }}" alt=""></div>
                        <div class="service-box-content">
                            <h3 class="box-title"><a href="service-details.html">Acne Treatments</a></h3>
                            <p class="service-box_text">Various treatments are available for acne, including topical
                                treatments</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="shape-mockup shape-wrapp jump d-none d-xxl-block" data-top="5%" data-right="0%"><img
                src="{{ asset('purnam/img/update_2/shape/leaves_1.png') }}" alt="shape">
        </div>
    </section>

    <div class="about-sec bg-smoke overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="img-box6">
                        <div class="img1 wow fadeInLeft">
                            <img class="tilt-active" src="{{ asset('purnam/img/bg/about_clinic_bg.jpg') }}"
                                alt="About" style="height: 600px;">
                        </div>
                        <div class="counter-content style3">
                            <div class="th-counterup wow fadeInUp">
                                <div class="inner">
                                    <div class="th-icon">
                                        <img src="{{ asset('purnam/img/icon/counter_1_1.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="25">00</span>
                                            <span class="counter-number">+</span>
                                        </h3>
                                        <p class="counter-card_text">Years of Experience</p>
                                    </div>
                                </div>
                            </div>

                            <div class="th-counterup wow fadeInUp">
                                <div class="inner">
                                    <div class="th-icon">
                                        <img src="{{ asset('purnam/img/icon/counter_2_2.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                            <span class="counter-number">%</span>
                                        </h3>
                                        <p class="counter-card_text">Natural Products</p>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- <div class="th-counterup wow fadeInUp">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-xl-5 wow fadeInRight">
                        <div class="title-area mb-25">
                            <span class="sub-title">About Us
                                <img src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt="">
                            </span>
                            <h2 class="sec-title mb-20">Your Trusted Destination for Complete Skin, Hair & Aesthetic
                                Care</h2>
                            <p>
                                At <strong>Purnam – The Complete Skin Care Clinic</strong>, we believe that everyone
                                deserves
                                healthy, radiant skin and confident beauty. Guided by
                                <strong>Dr. Kirti Shah (M.D., D.V.D.)</strong>, our clinic combines medical expertise
                                with
                                advanced technology to provide comprehensive solutions in
                                <em>Dermatology, Hair Care, Lasers, and Aesthetic Treatments</em>.
                            </p>
                            <p>
                                From solving concerns like dandruff, acne, pigmentation, or hair fall to performing
                                advanced
                                procedures such as <strong>Vitiligo Surgery, Hair Transplant, Laser Therapies, and
                                    Cosmetic
                                    Enhancements</strong>, we deliver treatments that are safe, personalized, and
                                results-driven.
                                With <strong>25+ years of experience</strong> our focus is on long-term skin and hair
                                health,
                                rejuvenation, and confidence.
                            </p>
                        </div>
                        <div class="journey-wrap style2">
                            <div class="checklist">
                                <ul>
                                    <li>Advanced Hair Care & Hair Transplant</li>
                                    <li>Comprehensive Skin Disease Treatments</li>
                                    <li>Vitiligo Management & Surgery</li>
                                    <li>Laser & Cosmetic Dermatology</li>
                                    <li>Daily Skin Care & Anti-Aging Solutions</li>
                                </ul>
                            </div>
                            <div class="journey-image style2">
                                <img src="{{ asset('purnam/img/bg/about_clinic_video_img.jpg') }}" alt="Skin Care"
                                    style="height: 180px; width: 250px; margin-top: -15px;">
                                <a href="https://www.youtube.com/watch?v=ADmQTw4qqTY" class="play-btn popup-video">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="btn-group mt-25">
                            <a href="{{ url('about') }}" class="th-btn">
                                Discover More <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                            <div class="about-profile">
                                <div class="about-avater">
                                    <img src="{{ asset('purnam/img/bg/dr.kirti_shah.jpg') }}" alt="Dr. Kirti Shah"
                                        style="height: 100px; width: 100px; border-radius: 50%;">
                                </div>
                                <div class="media-body">
                                    <h5 class="title">Dr. Kirti Shah</h5>
                                    <span class="desig">M.D., D.V.D.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="appointment-area space" data-bg-src="{{ asset('purnam/img/bg/about_video_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="appointment-video style2">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                            class="video-play-btn play-btn popup-video">
                            <i class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                    <div class="appointment-content style3">
                        <div class="title-area mb-25 text-center text-lg-start wow fadeInLeft">
                            <span class="sub-title">For Appointment<img
                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                            <h2 class="sec-title">Meet Dr. Kirti Shah (M.D., D.V.D.)</h2>
                            <p>
                                Visit us at <strong>Purnam – The Complete Skin Care Clinic</strong>, where your
                                well-being is our priority.
                                We provide trusted care in dermatology, hair restoration, laser, and aesthetics – backed
                                by decades of expertise.
                            </p>
                            <p>
                                <i class="fa-solid fa-location-dot me-2"></i>
                                201-202-203, Central by Sangath IPL, B/h. 4D Mall/PVR, Motera, Ahmedabad 05
                            </p>
                            <p>
                                <i class="fa-solid fa-clock me-2"></i>
                                Time: 10 AM to 8 PM
                            </p>
                        </div>
                        <div class="btn-group mt-45">
                            <a href="{{ url('about') }}" class="th-btn">
                                Discover More <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                            <div class="feature-wrapper">
                                <div class="feature-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <a class="box-title d-block" href="tel:+917949242596">079 49242596</a>
                                    <a class="box-title d-block" href="tel:+917927500909">079 27500909</a>
                                    <a class="box-title d-block" href="tel:+917405121122">+91 7405121122</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="team-area-two overflow-hidden space">
        <div class="container">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center">
                    <span class="sub-title style2">Our Team</span>
                    <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title">Our Expert Surgeon at Rasm Plastic Surgery Clinic</h2>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="teamSlide2" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
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
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
        <div class="shape-mockup movingX d-none d-lg-block" data-top="10%" data-right="0%"><img
                src="{{ asset('purnam/img/update_3/shape/shape_2.png') }}" alt="shape">
        </div>
    </section> --}}

    @include('layouts.footer_link')

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!-- Jquery -->
    @include('layouts.footer')
</body>

</html>
