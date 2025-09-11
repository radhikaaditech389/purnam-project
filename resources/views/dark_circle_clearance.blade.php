<!doctype html>
<html class="no-js" lang="zxx">
@include('layouts.head')
<style>
    /* .overlay-img {
    position: absolute;
    bottom: -20px;
    right: -20px;
    border: 4px solid #fff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
} */

    .circle-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #f8e1d9;
        border-radius: 50%;
        padding: 10px 20px;
        font-weight: bold;
        color: #6b3a2d;
        font-size: 14px;
        text-align: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .text-brown {
        color: #a25b42;
    }

    .btn-brown {
        background-color: #a25b42;
        color: #fff;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-brown:hover {
        background-color: #7c3f2a;
    }
</style>

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

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/dark-circle-clearance-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">About Dark Circle Clearance</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>About Dark Circle Clearance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="dark-circle-section py-5 skin-section-bg">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side: Images -->
                <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                    <!-- First Image -->
                    <div class="col-lg-12 position-relative mb-4">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/dark_circle_img.jpg') }}" alt="Dark Circle Treatment Before"
                                class="main-img rounded-4 shadow"
                                style="width: 550px; height: 300px; object-fit: cover;">
                            <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#c28565; color:#fff; border-radius:20px; width:200px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; font-size:14px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                Dark Circle Clearance
                            </div>
                        </div>
                    </div>

                    <!-- Second Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/dark_circle_img2.jpg') }}" alt="Dark Circle Treatment After"
                                class="overlay-img rounded-4 shadow"
                                style="width: 550px; height: 300px; object-fit: cover;">
                            <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#c28565; color:#fff; border-radius:20px; width:200px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; font-size:14px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                Dark Circle Clearance
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Content -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#c28565; font-size:1rem; letter-spacing:2px;">
                        Eye Rejuvenation
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:3rem; color:#333; letter-spacing:-1.5px; line-height:1.2;">
                        Dark Circle Clearance Procedure
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.15rem; line-height:1.8;">
                        <strong style="color:#c28565;">Dark Circle Clearance Treatments</strong> are designed to reduce
                        under-eye pigmentation, puffiness, and tired appearance — restoring a fresh, youthful, and
                        well-rested look.
                    </p>

                    <div class="row g-4">
                        <!-- Step 1 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                        <i class="fas fa-eye me-2" style="color:#c28565;"></i>Pigmentation Lightening
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Targets excess melanin and reduces dark pigmentation around the eyes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                        <i class="fas fa-moon me-2" style="color:#c28565;"></i>Eye Rejuvenation
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Improves blood circulation, reduces puffiness, and restores under-eye
                                        brightness.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                        <i class="fas fa-star me-2" style="color:#c28565;"></i>Benefits of Dark Circle
                                        Clearance
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Reduces dark
                                            under-eye pigmentation</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Minimizes
                                            puffiness & tired look</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Improves skin
                                            texture under the eyes</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Brightens &
                                            refreshes overall eye area</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Safe &
                                            non-invasive procedure</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-4">
                        <a href="/appointment" class="btn px-4 py-3"
                            style="background:#c28565; color:#fff; border-radius:8px; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2); transition:0.3s;">
                            Book Your Dark Circle Clearance Appointment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
