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
                <h2 class="breadcumb-title">FAQ's</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>FAQ's</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-sec overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="pe-xl-3">
                        <div class="title-area mb-40">
                            <span class="sub-title">Frequently Asked Any Question<img
                                    src="assets/img/theme-img/title_right.svg" alt=""></span>
                            <h2 class="sec-title">Unveil Your True Beauty At Our Salon</h2>
                            <p>Body massage is a holistic and therapeutic practice that offers numerous physical and
                                mental
                                health benefits. It provides a rejuvenating experience that promotes relaxation.</p>
                        </div>
                        <form action="mail.php" method="POST" class="quote-form style2 ajax-contact">
                            <div class="title-area mb-40">
                                <span class="sub-title">Contact Us<img src="assets/img/theme-img/title_right.svg"
                                        alt=""></span>
                                <h3 class="sec-title">Need to Make An Enquiry</h3>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name">
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" name="number" id="number"
                                        placeholder="Number">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="" disabled selected hidden>Subject</option>
                                        <option value="Engine Diagnostics">Spa & Massage</option>
                                        <option value="Facial & Massage">Facial & Massage</option>
                                        <option value="Engine Diagnostics">Head Massage</option>
                                        <option value="Sports Massage">Sports Massage</option>
                                        <option value="Stone Massage">Stone Massage</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Write message...."></textarea>
                                    <i class="fal fa-comment"></i>
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
                <div class="col-xl-7">
                    <div class="accordion-area accordion" id="faqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    What skin problems are treated at Purnam Skin Care Clinic?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Purnam Skin Care Clinic treats acne, pigmentation, dark spots, skin allergies,
                                        fungal infections, hair fall, dandruff, and various chronic skin conditions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Do I need an appointment before visiting the clinic?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, prior appointment is recommended to ensure proper consultation time and
                                        minimal waiting.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    Who will examine and treat me at the clinic?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        All consultations and treatments are handled by an experienced dermatologist
                                        with personalized care for each patient.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    Are treatments customized for each patient?
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, every patient receives a customized treatment plan based on their skin
                                        type,
                                        condition, and medical history.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    How long does it take to see results from treatment?
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Some skin concerns show improvement within a few weeks, while others may require
                                        multiple sessions for best results.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    Are the treatments safe?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, all treatments are dermatologist-approved and performed using safe,
                                        clinically tested medical procedures.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                    Do treatments have any side effects?
                                </button>
                            </div>
                            <div id="collapse-7" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Most treatments have minimal or temporary side effects such as mild redness or
                                        sensitivity, which usually subside quickly.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                                    Does the clinic treat both men and women?
                                </button>
                            </div>
                            <div id="collapse-8" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, skin and hair treatments are available for both men and women of all age
                                        groups.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
                                    Will I need follow-up visits?
                                </button>
                            </div>
                            <div id="collapse-9" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-9" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Follow-up visits may be required depending on the condition to monitor progress
                                        and ensure effective results.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-10" aria-expanded="false" aria-controls="collapse-10">
                                    Is skincare advice provided after treatment?
                                </button>
                            </div>
                            <div id="collapse-10" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-10" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, patients receive complete guidance on skincare routines, medications,
                                        and lifestyle tips to maintain healthy skin.
                                    </p>
                                </div>
                            </div>
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
