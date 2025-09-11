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
                <h2 class="breadcumb-title">Contact Us</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row gy-40">
                <div class="col-lg-6 col-xl-5">
                    <div class="contact-info-wrap me-xl-4">
                        <div class="title-area mb-20">
                            <h3 class="sec-title">Our Contact Information</h3>
                            <p>Have a inquiry or some feedback for us? Fill out the form below to contact our team.</p>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Our Address</h3>
                                <span class="contact-info_text">201,202,203, Central by Sangath IPL, Motera, Ahmedabad,
                                    Gujarat 380005</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Phone Number</h3>
                                <span class="contact-info_text">
                                    Mobile:
                                    <a href="tel:+256214203215"> +91 74051 21122 </a>
                                </span>
                                <span class="contact-info_text">
                                    Email:
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@purnam.com"
                                        target="_blank">
                                        info@purnam.com
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-clock"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Hours of Operation</h3>
                                <span class="contact-info_text">
                                    Monday - Thursday : 10AM - 8PM Friday - Saturday : 10AM - 6PM
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="map-sec">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.858850890565!2d72.5934694758831!3d23.10226231334853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83001d48e7ef%3A0xff5d944a7af0208!2sPurnam%20-%20The%20Complete%20Skin%20Care%20Clinic!5e0!3m2!1sen!2sin!4v1748345553777!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-wrapper">
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <h2 class="form-title text-center">Get In Touch</h2>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <i class="fa-sharp fa-light fa-user"></i>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <i class="fa-sharp fa-regular fa-envelope"></i>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" name="number" id="number"
                                        placeholder="Phone Number">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <i class="fa-regular fa-tag"></i>
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="" disabled selected hidden>Select</option>
                                        <option value="Electrical System">Electrical System</option>
                                        <option value="Auto Car Repair">Auto Car Repair</option>
                                        <option value="Engine Diagnostics">Engine Diagnostics</option>
                                        <option value="Car & Engine Clean">Car & Engine Clean</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fal fa-comment"></i>
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn fw-btn">Send Messages<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
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
