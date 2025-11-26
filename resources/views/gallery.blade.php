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
                <h2 class="breadcumb-title">Gallery</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space" id="gallery-sec">
        <div class="container">
            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-xl-auto filter-item cat5 cat9 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <video width="699px" height="400px" autoplay muted loop playsinline controls>
                                <source src="{{ asset('purnam/videos/purnam_video.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="gallery-font">Purnam Skin Care Clinic</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/8.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Mole Removal</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Mole Removal</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat7 cat6">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/2.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Laser Hair Reduction</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Laser Hair Reduction</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat9 cat7 cat4">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/4.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Tattoo Removal</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Tattoo Removal</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/5.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Melasma/Chemical Peeling</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Melasma/Chemical Peeling</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/1.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Hair Growth/PRP/GFC/QR678</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Hair Growth/PRP/GFC/QR678</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat2 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/7.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Vitiligo</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Vitiligo</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat10 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/3.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Non Sergical Face Lift</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Non Sergical Face Lift</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/10.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Acne Scar Treatment</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Acne Scar Treatment</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/16.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Mole Removal</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Mole Removal</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat7 cat6">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/11.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Hair Growth/PRP/GFC/QR678</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Hair Growth/PRP/GFC/QR678</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat9 cat7 cat4">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/17.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Tattoo Removal</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Tattoo Removal</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/9.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Vitiligo</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Vitiligo</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/15.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Melasma/Chemical Peeling</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Melasma/Chemical Peeling</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat2 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/14.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Laser Hair Reduction</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Laser Hair Reduction</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat10 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/12.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Non Sergical Face Lift</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Non Sergical Face Lift</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/18.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Hydration Injection</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Hydration Injection</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/25.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Laser Hair Reduction</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Laser Hair Reduction</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat7 cat6">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/23.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Daily Skin Care</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Daily Skin Care</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat9 cat7 cat4">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/20.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Dark Circle Clearance</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Dark Circle Clearance</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/24.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Skin Booster/Hydration Injection</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Skin Booster/Hydration Injection</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/19.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Microneedling MNRF</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Microneedling MNRF</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat2 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/22.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Hair Transplant</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Hair Transplant</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat10 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/21.jpg') }}" alt="gallery image">
                        </div>
                        <div class="gallery-font">Dark Circle Clearance</div>
                        <div class="gallery-content">
                            <h2 class="gallery-title box-title">Dark Circle Clearance</h2>
                        </div>
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
