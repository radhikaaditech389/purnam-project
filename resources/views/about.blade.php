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
                    <h2 class="sec-title">Purnam - The Complete Skin Care Clinic</h2>
                    <p class="sec-text">At Purnam, we are dedicated to providing comprehensive and advanced treatments
                        for all your hair and skin concerns. Under the expert care of <strong>Dr. Kirti Shah (M.D.,
                            D.V.D.),</strong> we
                        offer a wide range of services to help you achieve healthy, glowing skin and hair.</p>
                </div>
            </div>
            <div class="video-group text-center">
                {{-- <a href="about.html" class="th-btn">More About Us<i class="fa-regular fa-arrow-right ms-2"></i></a> --}}
                <a href="tel:+917405121122" class="th-btn">
                    Make A Call <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="row gy-4 align-items-center">
                <div class="col-xl-6 col-xxl-8">
                    <div class="video-box1 wow fadeInDown" data-bg-src="{{ asset('purnam/img/normal/video_1.jpg') }}">
                        <img src="{{ asset('purnam/img/bg/803 _ 412.jpg') }}" alt="video">
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
                        {{-- <div class="th-counterup style2 wow fadeInUp">
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
                        </div> --}}
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
                            <span class="sub-title">Why Choose Purnam Clinic?<img
                                    src="{{ asset('purnam/img/theme-img/title_right.svg') }}" alt=""></span>
                            <h2 class="sec-title">We Have 26 Years Of Experience.</h2>
                            <p class="mt-n2 mb-35">At Purnam, we are dedicated to providing comprehensive and
                                professional care for all your skin and hair needs. We prioritize the cleanliness and
                                comfort of our clients, ensuring a hygienic and relaxing environment throughout your
                                visit. Our clinic adheres to strict sanitization protocols and uses the latest, most
                                effective equipment for all our treatments.</p>
                        </div>
                        <div class="choose-about-wrap">
                            <div class="choose-about wow fadeInUp">
                                <div class="choose-about_icon">
                                    <img src="{{ asset('purnam/img/icon/counter_1_4.svg') }}" alt="image">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Expert Medical Team</h3>
                                    <p class="choose-about_text">Under the care of <strong>Dr. Kirti Shah (M.D.,
                                            D.V.D.),</strong> our
                                        clinic offers specialized medical and surgical treatments, from skin disease
                                        management to advanced dermatosurgery.</p>
                                </div>
                            </div>
                            <div class="choose-about wow fadeInUp">
                                <div class="choose-about_icon">
                                    <img src="{{ asset('purnam/img/icon/logo-icon.svg') }}" alt="image">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Comprehensive Services</h3>
                                    <p class="choose-about_text">We provide a wide range of services, from solutions
                                        for common hair problems and daily skin care to specialized procedures for
                                        conditions like Vitiligo, Psoriasis, and Eczema.</p>
                                </div>
                            </div>
                            <div class="choose-about wow fadeInUp">
                                <div class="choose-about_icon">
                                    <img src="{{ asset('purnam/img/icon/service_1_3.svg') }}" alt="image">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Quality and Trust</h3>
                                    <p class="choose-about_text">We use only premium-quality products and
                                        state-of-the-art equipment for all our procedures, including various laser
                                        therapies and surgical tools. Our commitment is to use trusted brands and
                                        methods that provide the best results for our clients.</p>
                                </div>
                            </div>
                            <div class="choose-about wow fadeInUp">
                                <div class="choose-about_icon">
                                    <img src="{{ asset('purnam/img/icon/choose_3.svg') }}" alt="image">
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Specialized Care</h3>
                                    <p class="choose-about_text">Whether you need a simple skin tag removal, a hair
                                        transplant, or complex plastic surgery, our team offers personalized and
                                        supportive care tailored to your specific needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="choose-image">
                        <div class="img1  wow fadeInRight" style="margin-bottom: 200px;">
                            <img src="{{ asset('purnam/img/bg/524 _ 620.jpg') }}" alt="Choose">
                        </div>
                        <div class="img2 movingX">
                            <img src="{{ asset('purnam/img/shape/flower_1_3.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="space" data-bg-src="{{ asset('purnam/img/bg/price_bg_1.jpg') }}">
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
    </section> --}}

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
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/default_img.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">My skin would always feel dry and itchy and flaky from the psoriasis. Now
                            doctor prescribed right medicine and cream for me. My skin is smooth now, and I feel so much
                            better. Thank you, doctor your premises of skin clinic is very beautiful.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Kamlesh Fotariya</h5>
                                <p class="testi-grid_desig">Patient</p>
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
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/default_img.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">I had many pimples on my face, used many creams but no help. Doctor
                            prescribed medicines and treatment for Lesar for Acne & follow up acne scar treatment is
                            good & nature of satff is fully co operative and now my face is clean.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name">Divya Shrimali</h5>
                                <p class="testi-grid_desig">Patient</p>
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
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/default_img.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">The treatment is really good and doctor is also fantastic provide good
                            medicine without steroines and result are just seen in one and half month.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name" style="margin-top: 57px;">Rudra Tushar Patel</h5>
                                <p class="testi-grid_desig">Patient</p>
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
                        <div class="testi-grid_img"><img src="{{ asset('purnam/img/testimonial/default_img.jpg') }}"
                                alt=""></div>
                        <h3 class="box-title">Doctor is very good and treatment for hair fall really helped me. My hair
                            is stronger, and I see less hair on my pillow now.</h3>
                        <div class="testi-grid_profile">
                            <div class="media-body">
                                <h5 class="testi-grid_name" style="margin-top: 83px;">Dipak Rajput</h5>
                                <p class="testi-grid_desig">Patient</p>
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
