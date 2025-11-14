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
            {{-- <div class="filter-menu style2 indicator-active filter-menu-active">
                <button data-filter="*" class="tab-btn active" type="button">ALL</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Massage</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Waxing</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Relaxing</button>
                <button data-filter=".cat4" class="tab-btn" type="button">Skin Care</button>
                <button data-filter=".cat5" class="tab-btn" type="button">Beauty Spa</button>
                <button data-filter=".cat6" class="tab-btn" type="button">Hair Cut</button>
                <button data-filter=".cat7" class="tab-btn" type="button">Hair Color</button>
                <button data-filter=".cat8" class="tab-btn" type="button">Nail Manicure</button>
                <button data-filter=".cat9" class="tab-btn" type="button">Nail Art</button>
                <button data-filter=".cat10" class="tab-btn" type="button">Nail Cut</button>
            </div> --}}

            <div class="row gallery-row">
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <video width="100%" height="auto" autoplay muted loop playsinline controls>
                                <source src="{{ asset('purnam/videos/purnam_video.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/5.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <!-- <a href="{{ asset('purnam/img/gallery/gallery_1_1.jpg') }}" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a> -->
                            <h2 class="gallery-title box-title">Body Massage</h2>
                            <p class="gallery-text">Massage</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat5 cat9 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/1.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <!-- <a href="{{ asset('purnam/img/gallery/gallery_1_2.jpg') }}" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a> -->
                            <h2 class="gallery-title box-title">Relaxing </h2>
                            <p class="gallery-text">Relaxing </p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat7 cat6">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/2.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <!-- <a href="{{ asset('purnam/img/gallery/gallery_1_3.jpg') }}" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a> -->
                            <h2 class="gallery-title box-title">Skin Care</h2>
                            <p class="gallery-text">Skin Care</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat9 cat7 cat4">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/4.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <!-- <a href="{{ asset('purnam/img/gallery/gallery_1_4.jpg') }}" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a> -->
                            <h2 class="gallery-title box-title">Beauty Spa</h2>
                            <p class="gallery-text">Beauty Spa</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/8.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <!-- <a href="{{ asset('purnam/img/gallery/gallery_1_5.jpg') }}" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a> -->
                            <h2 class="gallery-title box-title">Hair Cut</h2>
                            <p class="gallery-text">Hair Cut</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/6.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <!-- <a href="{{ asset('purnam/img/gallery/gallery_1_6.jpg') }}" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a> -->
                            <h2 class="gallery-title box-title">Nail Art</h2>
                            <p class="gallery-text">Nail Art</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat2 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/7.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <!-- <a href="{{ asset('purnam/img/gallery/gallery_1_7.jpg') }}" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a> -->
                            <h2 class="gallery-title box-title">Hair Color</h2>
                            <p class="gallery-text">Hair Color</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat10 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img src="{{ asset('purnam/img/gallery/3.jpg') }}" alt="gallery image">
                        </div>
                        {{-- <div class="gallery-content">
                            <h2 class="gallery-title box-title">Waxing</h2>
                            <p class="gallery-text">Waxing</p>
                        </div> --}}
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
