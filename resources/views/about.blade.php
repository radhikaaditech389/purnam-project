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
                <h2 class="breadcumb-title">About Us</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="about-title-area">
                <div class="title-area text-center mb-40">
                    <span class="sub-title style2">About Us</span>
                    <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title">Step Into The World of Nail Styling Perfection</h2>
                    <p class="sec-text">At our Nail Style Salon, we understand that each client is unique, and their
                        nail preferences vary.
                        That's why we offer customized nail services tailored to your specific needs. Whether you're
                        looking for
                        a classic French manicure, a chic and sophisticated look for a special event.</p>
                </div>
            </div>
            <div class="video-group text-center">
                <a href="about.html" class="th-btn">More About Us<i class="fa-regular fa-arrow-right ms-2"></i></a>
                <a href="tel:+256214203215" class="th-btn style2">Make A Call<i
                        class="fa-regular fa-arrow-right ms-2"></i></a>
            </div>
            <div class="row gy-4 align-items-center">
                <div class="col-xl-6 col-xxl-8">
                    <div class="video-box1 wow fadeInDown" data-bg-src="{{ asset('purnam/img/normal/video_1.jpg') }}">
                        <img src="{{ asset('purnam/img/normal/video_1.jpg') }}" alt="video">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                            class="video-play-btn play-btn popup-video">
                            <i class="fa-sharp fa-solid fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-4">
                    <div class="counter-content">
                        <div class="th-counterup style2 wow fadeInUp">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('purnam/img/icon/counter_2_1.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="26">00</span>
                                        <span class="counter-number">+</span>
                                    </h3>
                                    <p class="counter-card_text">Years of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="th-counterup style2 wow fadeInUp">
                            <div class="inner">
                                <div class="icon">
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
                        <div class="th-counterup style2 wow fadeInUp">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('purnam/img/icon/counter_2_3.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <h3 class="counter"><span class="odometer" data-count="56">00</span>
                                        <span class="counter-number">k+</span>
                                    </h3>
                                    <p class="counter-card_text">Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="th-counterup style2 wow fadeInUp">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('purnam/img/icon/counter_2_4.svg') }}" alt="">
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
        </div>
        <div class="shape-mockup d-none d-lg-block jump" data-top="0%" data-left="0%"><img
                src="{{ asset('purnam/img/shape/flower_1_5.png') }}" alt="shape">
        </div>
        <div class="shape-mockup d-none d-lg-block jump" data-bottom="0%" data-right="0%"><img
                src="{{ asset('purnam/img/shape/leaves_2.png') }}" alt="shape">
        </div>
    </div>

    <div class="sec-shape">
        <span class="sec-shape_img"><img src="{{ asset('purnam/img/icon/girl.svg') }}" alt=""></span>
    </div>

    <div class="choose-area overflow-hidden space-bottom">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <div class="pe-xl-5 me-xl-3">
                        <div class="title-area mt-60 mb-25 wow fadeInLeft">
                            <span class="sub-title">Why Choose Us<img
                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                            <h2 class="sec-title">We Have 25 Years Of Experience With Nail Style.</h2>
                            <p class="mt-n2 mb-35">We prioritize the cleanliness and comfort of our clients, ensuring a
                                hygienic
                                and
                                relaxing environment throughout your visit. Our salon adheres to strict sanitization
                                protocols,
                                and
                                all our tools.</p>
                        </div>
                        <div class="choose-about-wrap">
                            <div class="choose-about wow fadeInUp">
                                <div class="choose-about_icon">
                                    <img src="{{ asset('purnam/img/icon/choose_1.svg') }}" alt="image">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Brand Nail Art Equipment</h3>
                                    <p class="choose-about_text">From classic manicures and pedicures to intricate nail
                                        art
                                        and
                                        personalized nail extensions</p>
                                </div>
                            </div>
                            <div class="choose-about wow fadeInUp">
                                <div class="choose-about_icon">
                                    <img src="{{ asset('purnam/img/icon/choose_2.svg') }}" alt="image">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Best Place</h3>
                                    <p class="choose-about_text">That's why we only use premium quality nail polishes,
                                        gel,
                                        and
                                        other nail products from trusted brands.</p>
                                </div>
                            </div>
                            <div class="choose-about wow fadeInUp">
                                <div class="choose-about_icon">
                                    <img src="{{ asset('purnam/img/icon/choose_3.svg') }}" alt="image">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Special Support</h3>
                                    <p class="choose-about_text">That's why we only use premium quality nail polishes,
                                        gel,
                                        and
                                        other nail products from trusted brands.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="choose-image">
                        <div class="img1  wow fadeInRight">
                            <img src="{{ asset('purnam/img/normal/choose_1.png') }}" alt="Choose">
                        </div>
                        <div class="img2 movingX">
                            <img src="{{ asset('purnam/img/shape/flower_1_3.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space" data-bg-src="{{ asset('purnam/img/bg/price_bg_1.jpg') }}">
        <div class="container">
            <div class="row justify-content-end">
                <div class="price-box_area">
                    <div class="price-box-wrapper">
                        <div class="title-area text-center">
                            <span class="sub-title">Nail & Hand Care</span>
                            <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                            <h2 class="sec-title">Our Nails Treatments & Prices</h2>
                        </div>
                        <div class="price-box wow fadeInUp">
                            <div class="price-box_wrapp">
                                <div class="price-box_content">
                                    <h4 class="box-title"><a href="price.html">Manicure</a> </h4>
                                    <p class="price-box_desc">Elemental tempus getas</p>
                                </div>
                                <span class="price-box_price">$26</span>
                            </div>
                        </div>
                        <div class="price-box wow fadeInUp">
                            <div class="price-box_wrapp">
                                <div class="price-box_content">
                                    <h4 class="box-title"><a href="price.html">Nail Clippers</a> </h4>
                                    <p class="price-box_desc">Quality products, customized services</p>
                                </div>
                                <span class="price-box_price">$15</span>
                            </div>
                        </div>
                        <div class="price-box wow fadeInUp">
                            <div class="price-box_wrapp">
                                <div class="price-box_content">
                                    <h4 class="box-title"><a href="price.html">Manicure & Pedicure</a> </h4>
                                    <p class="price-box_desc">Premium quality nail polishes</p>
                                </div>
                                <span class="price-box_price">$34</span>
                            </div>
                        </div>
                        <div class="price-box wow fadeInUp">
                            <div class="price-box_wrapp">
                                <div class="price-box_content">
                                    <h4 class="box-title"><a href="price.html">Hand/nail Moisturizer</a> </h4>
                                    <p class="price-box_desc">Rejuvenating hand or foot massage</p>
                                </div>
                                <span class="price-box_price">$60</span>
                            </div>
                        </div>
                        <div class="price-box wow fadeInUp">
                            <div class="price-box_wrapp">
                                <div class="price-box_content">
                                    <h4 class="box-title"><a href="price.html">Nail Art</a> </h4>
                                    <p class="price-box_desc">Vibrant colors, finishes</p>
                                </div>
                                <span class="price-box_price">$46</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space" id="shop-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2">Our Products</span>
                <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                <h2 class="sec-title">Our Latest Nail Products</h2>
            </div>
            <div class="row th-carousel" id="productCarousel" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="{{ asset('purnam/img/product/product_1_1.jpg') }}" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span
                                        class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span
                                        class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span
                                        class="action-text">Compare</span><span class="icon"><i
                                            class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">OPI Nail
                                        Polish</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Popular</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$99</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                            class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="{{ asset('purnam/img/product/product_1_2.jpg') }}" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span
                                        class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span
                                        class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span
                                        class="action-text">Compare</span><span class="icon"><i
                                            class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">Sunscreen
                                        Lotion</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Brand</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$98</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                            class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="{{ asset('purnam/img/product/product_1_3.jpg') }}" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span
                                        class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span
                                        class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span
                                        class="action-text">Compare</span><span class="icon"><i
                                            class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">Wholesale
                                        Liquid</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Classic</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$96</span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                            class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="{{ asset('purnam/img/product/product_1_4.jpg') }}" alt="Product Image">
                            <div class="product-action style1">
                                <a href="cart.html"><span class="action-text">Add To cart</span><span
                                        class="icon"><i class="fa-regular fa-cart-shopping"></i></span></a>
                                <a href="wishlist.html"><span class="action-text">wishlist</span><span
                                        class="icon"><i class="fal fa-heart"></i></span></a>

                                <a class="popup-content" href="#QuickView"><span
                                        class="action-text">Compare</span><span class="icon"><i
                                            class="fa-regular fa-eye"></i></span></a>
                            </div>
                        </div>
                        <div class="product-grid_wrapper">
                            <div class="product-content">
                                <h3 class="box-title"><a class="text-inherit" href="shop-details.html">Hair
                                        Dryers</a>
                                </h3>
                                <div class="product-category"><a href="shop.html">Cosmetic</a></div>
                            </div>
                            <div class="product-grid_content">
                                <span class="price">$85<del>$98</del></span>
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                            class="rating">1</span>
                                        customer rating</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="0%" data-left="0%"><img
                src="{{ asset('purnam/img/shape/leaves_3.png') }}" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="0%"><img
                src="{{ asset('purnam/img/shape/flower_1_6.png') }}" alt="shape"></div>
    </section>

    <div class="overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="title-area text-center mb-25">
                    <span class="sub-title style2">Testimonials</span>
                    <img src="{{ asset('purnam/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title">Our Customer Feedback</h2>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="2"
                data-sm-slide-show="1" data-xs-slide-show="1">
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid wow fadeInUp">
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/testi_2_1.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">Whether youre preparing for a special occasion or simply want to pamper
                            yourself our talented stylists will work closely with you to create.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Angelina Margret</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}"
                                alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}"
                                alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}"
                                alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid wow fadeInDown">
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/testi_2_2.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">Parallel task user friendly through supply are chains. Dynamically
                            simplify reliable meta service visionary sources unleash tactical.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Senjuti das</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}"
                                alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}"
                                alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}"
                                alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid wow fadeInUp">
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/testi_2_3.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">Continually utilize 24/365 bandwidth before real-time interfaces. Proin
                            mollis, ipsum vel ultrices dictum. Credibly grow users deliver.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Jenifer Lopez</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}"
                                alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}"
                                alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}"
                                alt=""></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-grid wow fadeInDown">
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/testi_2_4.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">Intrinsicly pontifice pandemic ships growth strategies and partner
                            convergence lives multidi sciplinar business Proin mollis ultrices</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Dianne Russell</h5>
                                <p class="testi-grid_desig">Customer</p>
                            </div>
                        </div>
                        <div class="testi-quote"><img src="{{ asset('purnam/img/shape/quote_2.png') }}"
                                alt=""></div>
                        <div class="testi-shape1"><img src="{{ asset('purnam/img/shape/leaf_2.svg') }}"
                                alt=""></div>
                        <div class="testi-shape2"><img src="{{ asset('purnam/img/shape/flower_1_6.svg') }}"
                                alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
