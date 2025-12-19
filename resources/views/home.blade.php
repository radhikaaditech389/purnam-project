<!doctype html>
<html class="no-js" lang="zxx">

@include('layouts.head')

<body class="bg-smoke">
    <div class="preloader">
        <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('purnam/img/Punam_ben Logo.png') }}" style="height: 100px;">
            <span class="loader"></span>
        </div>
    </div>

    @include('layouts.mobile_menu')

    @include('layouts.sidebar')

    @include('layouts.header')

    <section class="th-hero-wrapper hero-3" id="hero">
        <div class="hero-slider-3 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1"
            data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
            <div class="th-hero-slide">
                <div class="th-hero-bg zoom" data-bg-src="{{ asset('purnam/img/home/home1.jpg') }}"></div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="sub-title" data-ani="slideinup" data-ani-delay="0.1s">
                            <img src="{{ asset('purnam/img/favicons/Butterfly_png.png') }}" style="height: 22px;"
                                alt="shape">Advanced Hair Care & Transplant
                        </span>
                        <h2 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">
                            Restore Hair Naturally with <span class="text-theme">Proven Solutions</span>
                        </h2>
                        <div class="hero-big" data-ani="slideinup" data-ani-delay="0.6s">
                            <h2 class="hero-big_text">Hair<span class="hero-big_text2">Care</span></h2>
                        </div>
                        <p class="hero-text mr-50" data-ani="slideinup" data-ani-delay="0.7s">
                            Specialized in PRP, GFC, QR678, Hair Transplant, and Laser Therapy for Hair Loss.
                        </p>
                        <div class="btn-group style-1" data-ani="slideinup" data-ani-delay="0.8s">
                            <a href="/about_clinic" class="th-btn">About Clinic<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                            <a href="/contact" class="th-btn style5">Contact Us<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-hero-slide">
                <div class="th-hero-bg zoom" data-bg-src="{{ asset('purnam/img/home/home4.jpg') }}"></div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="sub-title" data-ani="slideinup" data-ani-delay="0.1s">
                            <img src="{{ asset('purnam/img/favicons/Butterfly_png.png') }}" style="height: 22px;"
                                alt="shape">Skin Health Matters
                        </span>
                        <h2 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">
                            Comprehensive Care for <span class="text-theme">All Skin Conditions</span>
                        </h2>
                        <div class="hero-big" data-ani="slideinup" data-ani-delay="0.6s">
                            <h2 class="hero-big_text">Skin<span class="hero-big_text2">Clinic</span></h2>
                        </div>
                        <p class="hero-text mr-50" data-ani="slideinup" data-ani-delay="0.7s">
                            Expert treatment for Acne, Eczema, Psoriasis, Vitiligo & Autoimmune Disorders.
                        </p>
                        <div class="btn-group style-1" data-ani="slideinup" data-ani-delay="0.8s">
                            <a href="/about_clinic" class="th-btn">About Clinic<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                            <a href="/contact" class="th-btn style5">Contact Us<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-hero-slide">
                <div class="th-hero-bg zoom" data-bg-src="{{ asset('purnam/img/home/home3.jpg') }}"> </div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="sub-title" data-ani="slideinup" data-ani-delay="0.1s">
                            <img src="{{ asset('purnam/img/favicons/Butterfly_png.png') }}" style="height: 22px;"
                                alt="shape">Advanced Aesthetic Solutions
                        </span>
                        <h2 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">
                            Glow, Lift, and Rejuvenate with <span class="text-theme">Cutting-edge Lasers</span>
                        </h2>
                        <div class="hero-big" data-ani="slideinup" data-ani-delay="0.6s">
                            <h2 class="hero-big_text">Skin<span class="hero-big_text2">Rejuvenation</span></h2>
                        </div>
                        <p class="hero-text mr-50" data-ani="slideinup" data-ani-delay="0.7s">
                            Experience Anti-Aging, Medifacials, Pigmentation & Laser Hair Reduction.
                        </p>
                        <div class="btn-group style-1" data-ani="slideinup" data-ani-delay="0.8s">
                            <a href="/about_clinic" class="th-btn">About Clinic<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                            <a href="/contact" class="th-btn style5">Contact Us<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup hero_wrap d-none d-xxl-block jump" data-bottom="0%" data-left="0%"><img
                src="{{ asset('purnam/img/shape/leaves_9.png') }}">

        </div>
    </section>

    <div class="about-sec overflow-hidden space" id="about-sec">
        <div class="container align-item-center">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box4">
                        <div class="img4 wow fadeInUp">
                            <img class="tilt-active" src="{{ asset('purnam/img/home/home_about 343X423.jpg') }}"
                                alt="About">
                        </div>
                        <div class="img5 wow fadeInRight">
                            <img class="tilt-active" src="{{ asset('purnam/img/home/home_about1 275X419.jpg') }}"
                                alt="About">
                        </div>
                        <div class="about-shape">
                            <img src="{{ asset('purnam/img/home/home_about2 220X220.jpg') }}" alt="About">
                        </div>
                        <div class="about-company-since-wrap">
                            <div class="about-icon">
                                <img src="{{ asset('purnam/img/favicons/Butterfly_png.png') }}" alt="img"
                                    style="height: 70px;;">
                            </div>
                            <div class="about-tag">
                                <span class="about-anime">Company Since 2000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 wow fadeInUp">
                        <div class="title-area">
                            <span class="sub-title">About Us<img
                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                            <h2 class="sec-title">Welcome to Our Advanced Skin Care Clinic!</h2>
                            <p class="about-desc">At our clinic, we combine medical expertise with cutting-edge
                                technology to provide personalized treatment
                                for all skin and hair concerns. Whether you're facing chronic dermatological conditions
                                or seeking aesthetic enhancements,
                                our experienced team is here to guide your transformation with compassion and care.
                            </p>

                            <p class="about-desc">We offer evidence-based treatments ranging from PRP, Hair Transplant,
                                Laser Therapy, and Vitiligo Management to Acne,
                                Pigmentation, and Anti-Aging solutions — all under one roof.
                            </p>
                        </div>
                        <!-- <div class="about-counter">
                            <div class="th-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('purnam/img/icon/counter_2_1.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="6">6+</span>
                                        </h3>
                                        <p class="counter-card_text">Years of Excellence</p>
                                    </div>
                                </div>
                            </div>
                            <div class="th-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="{{ asset('purnam/img/icon/man.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="40">40+</span>
                                        </h3>
                                        <p class="counter-card_text">Qualified Experts & Support Staff</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="btn-group mt-45">
                            <a href="/about" class="th-btn">Read More<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                            <!-- <div class="about-profile">
                                <div class="about-avater">
                                    <img src="{{ asset('purnam/img/shape/about-thumb_1.png') }}" alt="about">
                                </div>
                                <div class="media-body">
                                    <h5 class="title">Phillips Lewis</h5>
                                    <span class="desig">CEO of Barber Shop</span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden">
                    <div class="container">
                        <div class="counter-sec space-top">
                            <div class="th-counterup wow fadeInLeft">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/img/icon/counter_1_1.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="25">00</span>
                                            <span class="counter-number">+</span>
                                        </h3>
                                        <p class="counter-card_text">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="th-counterup wow fadeInLeft">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/img/icon/counter_1_2.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                            <span class="counter-number">%</span>
                                        </h3>
                                        <p class="counter-card_text">Natural Products</p>
                                    </div>
                                </div>
                            </div>
                            <div class="th-counterup wow fadeInLeft">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/img/icon/counter_1_3.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="56">00</span>
                                            <span class="counter-number">k+</span>
                                        </h3>
                                        <p class="counter-card_text">Satisfied Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="th-counterup wow fadeInLeft">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/img/icon/counter_1_4.svg" alt="">
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
                        <div class="sec-shape">
                            <span class="sec-shape_img"><img
                                    src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}" alt=""
                                    style="height: 50px;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden">
        <div class="service-area space" id="service-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="title-area">
                            <span class="sub-title">Our Services<img
                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                            <h2 class="sec-title">Redefining Confidence Through Skin & Hair Excellence</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="title-area">
                            <p class="mb-0">Experience comprehensive dermatology and advanced aesthetic treatments
                                under
                                one roof.
                                From personalized skin care to state-of-the-art hair restoration and laser therapies,
                                we are committed to enhancing your natural beauty through safe, effective, and
                                medically-backed procedures.
                            </p>
                            <p class="mb-0">Our expert team offers treatments for hair fall, acne, pigmentation,
                                vitiligo, aging skin, and more
                                — with a focus on precision, compassion, and long-term results. Discover holistic care
                                tailored to your unique skin and hair needs.</p>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">

                    <div class="row slider-shadow th-carousel" id="serviceSlide7" data-slide-show="3"
                        data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/hair care 307X200.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Hair Care</h3><br>
                                    <p class="service-item_text">Combat hair fall, dandruff, and thinning with PRP,
                                        GFC, QR678, and advanced laser therapies tailored for healthy, fuller hair.</p>
                                    <a href="/hair-problems" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/dermology 307X200.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Dermatology</h3><br>
                                    <p class="service-item_text">Comprehensive medical care for eczema, psoriasis,
                                        infections, allergies, melasma, and autoimmune skin conditions — all under
                                        expert guidance.</p>
                                    <a href="/eczema" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/Vitiligo Treatment 307X200.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Vitiligo Treatment</h3><br>
                                    <p class="service-item_text">From UVB therapy to excimer lasers and surgery — we
                                        offer holistic solutions to manage and improve vitiligo with proven protocols.
                                    </p>
                                    <a href="/vitiligo-surgery" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/daily skin care 307X200.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Daily Skin Care</h3><br>
                                    <p class="service-item_text">Boost hydration, repair damage, and protect your skin
                                        daily with science-backed treatments and maintenance therapies for radiant skin.
                                    </p>
                                    <a href="/hydration" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/dermatosurgery 307X200.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Dermatosurgery</h3><br>
                                    <p class="service-item_text">Safe and precise surgical treatments for scars, moles,
                                        cysts, vitiligo, keloids, and more — performed by qualified dermatologic
                                        surgeons.</p>
                                    <a href="/scar-revision" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/laser_hair_reduction.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Laser Hair Reduction</h3><br>
                                    <p class="service-item_text">FDA-cleared, virtually painless laser treatment
                                        suitable for all skin types — targeting face, body, and sensitive zones.</p>
                                    <a href="/virtually-pain-free-smooth-and-gentle" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/acne_scar.jpg') }}" alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Acne Scar Treatment</h3><br>
                                    <p class="service-item_text">Medical, chemical, and laser-based approaches to clear
                                        active acne and fade stubborn scars for smoother, clearer skin.</p>
                                    <a href="/medical_treatment" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/pigmentation.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Pigmentation</h3><br>
                                    <p class="service-item_text">Treat dark spots, melasma, and uneven skin tone with
                                        chemical peels, carbon facials, and laser toning for a luminous glow.</p>
                                    <a href="/glow_treatment" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/anti aging treatment 307X200.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Anti Ageing Treatments</h3><br>
                                    <p class="service-item_text">Look younger with wrinkle reduction, Botox, fillers,
                                        thread lifts, and hydration boosters that restore youthful skin texture.</p>
                                    <a href="/wrinkle_treatments" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/drema lift therapy 307X200.jpg') }}"
                                        alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Derma Lift Therapy</h3><br>
                                    <p class="service-item_text">Non-surgical HIFU therapy that lifts, tightens, and
                                        rejuvenates stimulating collagen for long-term age reversal.</p>
                                    <br><a href="/hifu" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="service-item style3 wow fadeInUp">
                                <div class="service-item_img global-img">
                                    <img src="{{ asset('purnam/img/home/service/medifacials.jpg') }}" alt="Service">
                                </div>
                                <div class="service-item_content">
                                    <div class="service-item_icon"><img
                                            src="{{ asset('purnam/img/favicons/Butterfly_png White.png') }}"
                                            alt="" style="height: 50px;"></div>
                                    <h3 class="box-title">Medifacials</h3><br>
                                    <p class="service-item_text">Luxury meets dermatology with HydraFacial, Carbon
                                        Peel, Vampire Facial, and Korean Glass Facial — all tailored to your skin needs.
                                    </p>
                                    <a href="/koreal_glass_facial" class="line-btn">See more<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="service-shape style1"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_8.png') }}" alt="">
                                </div>
                                <div class="service-shape style2"><img
                                        src="{{ asset('purnam/img/update_4/shape/leaves_1_9.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape-wrapp jump d-none d-xl-block" data-top="5%" data-left="0%"><img
                src="{{ asset('purnam/img/shape/leaves_11.png') }}" alt="shape">
        </div>
        <div class="shape-mockup shape-wrapp jump d-none d-xl-block" data-bottom="5%" data-right="0%"><img
                src="{{ asset('purnam/img/shape/leaves_7.png') }}" alt="shape">
        </div>
    </div>

    {{-- <div class="brand-area overflow-hidden">
        <div class="container th-container">
            <div class="row th-carousel" id="brandSlide1" data-slide-show="7" data-lg-slide-show="4"
                data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="1">
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_1.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_1.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_2.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_2.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_3.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_3.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_4.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_4.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_5.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_5.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_6.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_6.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_7.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_7.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-box wow fadeInRight">
                        <a href="">
                            <img class="original" src="{{ asset('purnam/img/brand/brand_2_7.png') }}"
                                alt="Brand Logo">
                            <img class="gray" src="{{ asset('purnam/img/brand/brand_2_7.png') }}"
                                alt="Brand Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="team-area-two overflow-hidden space">
        {{-- <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2">Expert Team</span>
                <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                <h2 class="sec-title">Our Experience Specialists</h2>
            </div>
            <div class="row slider-shadow th-carousel" id="teamSlide2" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">

                <!-- Single Item -->
                <div class="col-sm-6 col-lg-4 col-xxl-3">
                    <div class="th-team team-box style2">
                        <div class="team-img">
                            <img src="{{ asset('purnam/img/team/team_3_1.jpg') }}" alt="Team">
                        </div>
                        <div class="team-box_content">
                            <h3 class="box-title"><a href="team-details.html">Dr. Name</a></h3>
                            <span class="team-desig">Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                            <h3 class="box-title"><a href="team-details.html">Dr. Name</a></h3>
                            <span class="team-desig">Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                            <h3 class="box-title"><a href="team-details.html">Dr. Name</a></h3>
                            <span class="team-desig">Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                            <h3 class="box-title"><a href="team-details.html">Dr. Name</a></h3>
                            <span class="team-desig">Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
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
                            <h3 class="box-title"><a href="team-details.html">Dr. Name</a></h3>
                            <span class="team-desig">Specialist</span>
                            <div class="social-links">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.skype.com/"><i class="fa-brands fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}
        <div class="shape-mockup jump d-none d-lg-block" data-top="0%" data-left="0%"><img
                src="{{ asset('purnam/img/shape/flower_1_10.png') }}" alt="shape">
        </div>
        <div class="shape-mockup movingX d-none d-lg-block" data-top="20%" data-right="0%"><img
                src="{{ asset('purnam/img/shape/flower_1_12.png') }}" alt="shape">
        </div>
    </section>

    <div class="video-area-2 overflow-hidden " data-pos-for=".card-area" data-sec-pos="bottom-half">
        <div class="container">
            <div class="video-content-box text-center wow fadeInUp"
                data-bg-src="{{ asset('purnam/img/bg/bg-1.jpg') }}">

                <a href="{{ asset('purnam/videos/purnam_video.mp4') }}" class="video-play-btn play-btn popup-video">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card-area bg-top-center overflow-hidden space" data-bg-src="{{ asset('purnam/img/bg/bg-2.jpg') }}">
        <div class="container">
            <!-- <div class="title-area text-center wow fadeInUp">
                <span class="sub-title">Gift & Cards</span>
                <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                <h2 class="sec-title text-white">Our Special Gifts & Cards</h2>
            </div> -->
            <div class="row gy-4 justify-content-center align-items-center">

                <!-- <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="card-item wow fadeInUp">
                        <div class="card-item_img"><img src="{{ asset('purnam/img/normal/card_1.jpg') }}" alt=""></div>
                        <div class="content">
                            <h3 class="box-title"><a href="price.html">Hair Cut</a></h3>
                            <p class="card-item_text">Whether its a simple trim or a complete makeover, our stylists
                                approach.</p>
                            <a href="price.html" class="th-btn style5">Get Now<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                        <span class="card-item_price">$26.99</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="card-item wow fadeInDown">
                        <div class="card-item_img"><img src="{{ asset('purnam/img/normal/card_2.jpg') }}" alt=""></div>
                        <div class="content">
                            <h3 class="box-title"><a href="price.html">Hair Color</a></h3>
                            <p class="card-item_text">With our expert stylists, personalized consultation precision hair
                                coloring.</p>
                            <a href="price.html" class="th-btn style5">Get Now<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                        <span class="card-item_price">$28.99</span>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="card-item wow fadeInUp">
                        <div class="card-item_img"><img src="{{ asset('purnam/img/normal/card_3.jpg') }}" alt=""></div>
                        <div class="content">
                            <h3 class="box-title"><a href="price.html">Hair Wash</a></h3>
                            <p class="card-item_text">We strive to ensure that you leave our salon feeling confident and
                                satisfied.</p>
                            <a href="price.html" class="th-btn style5">Get Now<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                        <span class="card-item_price">$29.99</span>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="shape-mockup d-none d-lg-block jump" data-bottom="10%" data-left="0%"><img
                src="{{ asset('purnam/img/shape/leaves_3.png') }}" alt="shape">
        </div>
        <div class="shape-mockup d-none d-lg-block jump" data-top="10%" data-right="0%"><img
                src="{{ asset('purnam/img/shape/leaves_13.png') }}" alt="shape">
        </div>
    </div>
    {{-- <section class="price-area overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 wow fadeInLeft">
                    <div class="title-area mb-40 text-center text-xl-start">
                        <span class="sub-title">Hair Care Price<img
                                src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                        <h2 class="sec-title">Our Offers For The Best Prices</h2>
                    </div>
                    <div class="nav nav-tabs pricing-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link price-list active" id="nav-step1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step1" type="button">Women Price</button>
                        <button class="nav-link price-list" id="nav-step2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step2" type="button">Men Price</button>
                        <button class="nav-link price-list" id="nav-step3-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-step3" type="button">Kids Price</button>
                    </div>
                    <div class="price-list-area">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                                <div class="price-box-wrapper style2">
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Hair Cutting & Trimming</a>
                                                </h4>
                                                <p class="price-box_desc">Our stylists approach every haircut</p>
                                            </div>
                                            <span class="price-box_price">$29</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Classic Hair Color</a>
                                                </h4>
                                                <p class="price-box_desc">Vibrant colors, finishes</p>
                                            </div>
                                            <span class="price-box_price">$45</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Keep Mustache in Good</a>
                                                </h4>
                                                <p class="price-box_desc">Nourish and protect your hair</p>
                                            </div>
                                            <span class="price-box_price">$44</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Blow Dry & Curl</a>
                                                </h4>
                                                <p class="price-box_desc">Our stylists take your hair type</p>
                                            </div>
                                            <span class="price-box_price">$66</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Shampoo & Set</a>
                                                </h4>
                                                <p class="price-box_desc">Products from reputable brands</p>
                                            </div>
                                            <span class="price-box_price">$76</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                                <div class="price-box-wrapper style2">
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Hair Cutting & Trimming</a>
                                                </h4>
                                                <p class="price-box_desc">Our stylists approach every haircut</p>
                                            </div>
                                            <span class="price-box_price">$36</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Classic Hair Color</a>
                                                </h4>
                                                <p class="price-box_desc">Vibrant colors, finishes</p>
                                            </div>
                                            <span class="price-box_price">$35</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Keep Mustache in Good</a>
                                                </h4>
                                                <p class="price-box_desc">Nourish and protect your hair</p>
                                            </div>
                                            <span class="price-box_price">$44</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Blow Dry & Curl</a>
                                                </h4>
                                                <p class="price-box_desc">Our stylists take your hair type</p>
                                            </div>
                                            <span class="price-box_price">$20</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Shampoo & Set</a>
                                                </h4>
                                                <p class="price-box_desc">Products from reputable brands</p>
                                            </div>
                                            <span class="price-box_price">$56</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                                <div class="price-box-wrapper style2">
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Hair Cutting & Trimming</a>
                                                </h4>
                                                <p class="price-box_desc">Our stylists approach every haircut</p>
                                            </div>
                                            <span class="price-box_price">$26</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Classic Hair Color</a>
                                                </h4>
                                                <p class="price-box_desc">Vibrant colors, finishes</p>
                                            </div>
                                            <span class="price-box_price">$15</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Keep Mustache in Good</a>
                                                </h4>
                                                <p class="price-box_desc">Nourish and protect your hair</p>
                                            </div>
                                            <span class="price-box_price">$34</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Blow Dry & Curl</a>
                                                </h4>
                                                <p class="price-box_desc">Our stylists take your hair type</p>
                                            </div>
                                            <span class="price-box_price">$60</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <div class="price-box_wrapp">
                                            <div class="price-box_content">
                                                <h4 class="box-title"><a href="price.html">Shampoo & Set</a>
                                                </h4>
                                                <p class="price-box_desc">Products from reputable brands</p>
                                            </div>
                                            <span class="price-box_price">$46</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight">
                    <div class="pricing-form ">
                        <div class="title-area mb-40 text-center">
                            <h3 class="sec-title mb-0 text-white">Booking Your Seat</h3>
                            <img src="{{ asset('purnam/img/theme-img/title_shape_2.svg') }}" alt="">
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
                                <input type="text" class="date-pick form-control" name="date" id="date-pick"
                                    placeholder="Select Date">
                                <i class="fa-light fa-calendar-days"></i>
                            </div>
                            <div class="form-group col-12">
                                <input type="text" class="time-pick form-control" name="time" id="time-pick"
                                    placeholder="Select Time">
                                <i class="fa-light fa-clock"></i>
                            </div>
                            <div class="btn-group justify-content-center justify-content-lg-start">
                                <button class="th-btn style4 fw-btn">Booking Now<i
                                        class="fa-solid fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump" data-top="0%" data-right="0%"><img
                src="{{ asset('purnam/img/shape/flower_1_11.png') }}" alt="shape">
        </div>
    </section> --}}

    <section class="testimonial-sec overflow-hidden ">
        <div class="container th-container">
            <div class="testi-area">
                <div class="row">
                    <div class="col-12">
                        <div class="testi-box-slide th-carousel" id="testiSlide4" data-fade="true"
                            data-slide-show="1">
                            <div>
                                <div class="testi-box">
                                    <div class="testi-box_img">
                                        <img src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                            alt="Avater">
                                        <div class="testi-quote_img"><img
                                                src="{{ asset('purnam/img/shape/quote_4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testi-box_content wow fadeInUp">
                                        <div class="title-area mb-25">
                                            <span class="sub-title">Testimonials<img
                                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}"
                                                    alt=""></span>
                                            <h2 class="sec-title">Our Patient Feedback</h2>
                                        </div>
                                        <p class="testi-box_text">My skin would always feel dry and itchy and flaky
                                            from the psoriasis.
                                            Now doctor prescribed right medicine and cream for me. My skin is smooth
                                            now, and I feel so much better.
                                            Thank you, doctor your premises of skin clinic is very beautiful.
                                        </p>
                                        <h3 class="testi-box_name">Kamlesh Fotariya</h3>
                                        <span class="testi-box_desig">Patient</span>
                                        <div class="testi-quote"><img
                                                src="{{ asset('purnam/img/shape/quote_3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                        <img src="{{ asset('purnam/img/shape/flower_1_8.png') }}" alt="shape">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testi-box">
                                    <div class="testi-box_img">
                                        <img src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                            alt="Avater">
                                        <div class="testi-quote_img"><img
                                                src="{{ asset('purnam/img/shape/quote_4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testi-box_content wow fadeInUp">
                                        <div class="title-area mb-25">
                                            <span class="sub-title">Testimonials<img
                                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}"
                                                    alt=""></span>
                                            <h2 class="sec-title">Our Patient Feedback</h2>
                                        </div>
                                        <p class="testi-box_text">I had many pimples on my face, used many creams but
                                            no help.
                                            Doctor prescribed medicines and treatment for Lesar for Acne & follow up
                                            acne scar treatment is good & nature of satff
                                            is fully co operative and now my face is clean.</p>
                                        <h3 class="testi-box_name">Divya Shrimali</h3>
                                        <span class="testi-box_desig">Patient</span>
                                        <div class="testi-quote"><img
                                                src="{{ asset('purnam/img/shape/quote_3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                        <img src="{{ asset('purnam/img/shape/flower_1_8.png') }}" alt="shape">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testi-box">
                                    <div class="testi-box_img">
                                        <img src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                            alt="Avater">
                                        <div class="testi-quote_img"><img
                                                src="{{ asset('purnam/img/shape/quote_4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testi-box_content wow fadeInUp">
                                        <div class="title-area mb-25">
                                            <span class="sub-title">Testimonials<img
                                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}"
                                                    alt=""></span>
                                            <h2 class="sec-title">Our Patient Feedback</h2>
                                        </div>
                                        <p class="testi-box_text">The treatment is really good and doctor is also
                                            fantastic provide good medicine without steroines and result are just seen
                                            in one and half month.</p>
                                        <h3 class="testi-box_name">Rudra Tushar Patel</h3>
                                        <span class="testi-box_desig">Patient</span>
                                        <div class="testi-quote"><img
                                                src="{{ asset('purnam/img/shape/quote_3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                        <img src="{{ asset('purnam/img/shape/flower_1_8.png') }}" alt="shape">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="testi-box">
                                    <div class="testi-box_img">
                                        <img src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                            alt="Avater">
                                        <div class="testi-quote_img"><img
                                                src="{{ asset('purnam/img/shape/quote_4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="testi-box_content wow fadeInUp">
                                        <div class="title-area mb-25">
                                            <span class="sub-title">Testimonials<img
                                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}"
                                                    alt=""></span>
                                            <h2 class="sec-title">Our Patient Feedback</h2>
                                        </div>
                                        <p class="testi-box_text">Doctor is very good and treatment for hair fall
                                            really helped me. My hair is stronger, and I see less hair on my pillow now.
                                        </p>
                                        <h3 class="testi-box_name">Dipak Rajput</h3>
                                        <span class="testi-box_desig">Patient</span>
                                        <div class="testi-quote"><img
                                                src="{{ asset('purnam/img/shape/quote_3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-right="0%">
                                        <img src="{{ asset('purnam/img/shape/flower_1_8.png') }}" alt="shape">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="testi-box-tab wow fadeInUp" data-asnavfor=".testi-box-slide">
                            <button class="tab-btn active" type="button"><img
                                    src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                    alt="tab-btn image"></button>
                            <button class="tab-btn" type="button"><img
                                    src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                    alt="tab-btn image"></button>
                            <button class="tab-btn" type="button"><img
                                    src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                    alt="tab-btn image"></button>
                            <button class="tab-btn" type="button"><img
                                    src="{{ asset('purnam/img/home/testimonial_home_741X700.jpg') }}"
                                    alt="tab-btn image"></button>

                            <div class="icon-box">
                                <button data-slick-next="#testiSlide4" class="slick-arrow default"><i
                                        class="far fa-arrow-right"></i></button>
                            </div>

                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer_link')

    @include('layouts.footer')
</body>

</html>
