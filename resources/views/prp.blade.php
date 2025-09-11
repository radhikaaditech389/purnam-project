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

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('purnam/prp-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">About PRP</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>About PRP</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="prp-section py-5 skin-section-bg">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left Side: Images -->
                <div class="col-lg-6 mb-4 mb-lg-0 position-relative">
                    <!-- First Image -->
                    <div class="col-lg-12 position-relative mb-4">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/prp1.jpg') }}" alt="PRP Therapy Preparation"
                                class="main-img rounded-4 shadow"
                                style="width: 550px; height: 300px; object-fit: cover;">
                            <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#c28565; color:#fff; border-radius:20px; width:160px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; font-size:14px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                PRP Therapy
                            </div>
                        </div>
                    </div>

                    <!-- Second Image -->
                    <div class="col-lg-12 position-relative">
                        <div class="image-wrapper position-relative">
                            <img src="{{ asset('purnam/prp2.jpg') }}" alt="PRP Skin Rejuvenation"
                                class="overlay-img rounded-4 shadow"
                                style="width: 550px; height: 300px; object-fit: cover;">
                            <div class="circle-badge"
                                style="position:absolute; top:15px; left:15px; background:#c28565; color:#fff; border-radius:20px; width:160px; height:42px; display:flex; align-items:center; justify-content:center; font-weight:600; font-size:14px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
                                PRP Therapy
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Content -->
                <div class="col-lg-6">
                    <span class="text-uppercase fw-semibold mb-2 d-block"
                        style="color:#c28565; font-size:1rem; letter-spacing:2px;">
                        Natural Skin Healing
                    </span>
                    <h2 class="fw-bold mb-4"
                        style="font-size:3rem; color:#333; letter-spacing:-1.5px; line-height:1.2;">
                        PRP Procedure (Platelet-Rich Plasma)
                    </h2>

                    <p class="mb-4 lead" style="color:#555; font-size:1.15rem; line-height:1.8;">
                        <strong style="color:#c28565;">PRP Therapy</strong> uses the power of your own blood’s
                        platelets to
                        stimulate healing and rejuvenation. The concentrated plasma is injected or applied to promote
                        collagen
                        production, improve texture, and restore youthful radiance.
                    </p>

                    <div class="row g-4">
                        <!-- Step 1 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                        <i class="fas fa-tint me-2" style="color:#c28565;"></i>Natural Healing
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Uses your body’s own platelets to repair tissues and stimulate collagen
                                        naturally.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                        <i class="fas fa-sparkles me-2" style="color:#c28565;"></i>Skin Rejuvenation
                                    </h5>
                                    <p class="card-text" style="color:#666; line-height:1.7;">
                                        Improves skin tone, reduces fine lines, and restores youthful glow without
                                        chemicals.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm h-100" style="background:#fff; border-radius:10px;">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-3" style="color:#c28565; font-size:1.4rem;">
                                        <i class="fas fa-star me-2" style="color:#c28565;"></i>Benefits of PRP
                                    </h5>
                                    <ul class="list-unstyled mb-0"
                                        style="font-size:0.95rem; color:#444; line-height:2;">
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Stimulates natural
                                            collagen</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Reduces acne scars
                                            & pigmentation</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Minimizes wrinkles
                                            & fine lines</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Safe &
                                            non-surgical treatment</li>
                                        <li><i class="fas fa-check me-2" style="color:#c28565;"></i>Boosts overall
                                            skin texture & glow</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-4">
                        <a href="/appointment" class="btn px-4 py-3"
                            style="background:#c28565; color:#fff; border-radius:8px; font-weight:600; box-shadow:0 5px 15px rgba(0,0,0,0.2); transition:0.3s;">
                            Book Your PRP Session
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
