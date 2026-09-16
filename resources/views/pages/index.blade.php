@extends('layouts.app', ['header' => 'index', 'bodyClass' => 'inh'])

@section('title', 'I Need Help - Help Is Closer Than You Think')

@section('content')
    <!-- Intro Section S T A R T -->
    <section class="intro-section">
        <div class="intro-container-wrapper style1">
            <div class="container">
                <div class="intro-wrapper style1 fix">
                    <div class="shape3 d-none d-xxl-block cir36"><img src="{{ asset('assets/images/inh/star-blue.png') }}"
                            alt="shape"></div>
                    <div class="shape4 d-none d-xxl-block cir36"><img src="{{ asset('assets/images/inh/star-blue.png') }}"
                            alt="shape"></div>
                    <div class="shape5 d-none d-xxl-block cir36"><img src="{{ asset('assets/images/inh/star-orange.png') }}"
                            alt="shape"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 order-2 order-xl-1">
                                <div class="intro-content">
                                    <div class="intro-section-title">
                                        <div class="intro-subtitle">
                                            <span>&ldquo;I Need Help&rdquo;</span>Find Your Solution <img
                                                src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                        </div>
                                        <h1 class="intro-title wow fadeInUp" data-wow-delay=".2s">Help Is Closer Than
                                            You Think</h1>
                                        <p class="intro-desc wow fadeInUp" data-wow-delay=".4s">A real-time community
                                            platform connecting people who need spontaneous help with nearby helpers.
                                            Powered by live GPS, built for everyday needs&mdash;not emergencies.</p>
                                    </div>
                                    <div class="btn-wrapper style1 wow fadeInUp" data-wow-delay=".6s">
                                        <a class="theme-btn" href="#app">Download Now
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                        <a class="theme-btn style2" href="#solution">Learn More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                    fill="#282C32" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 order-1 order-xl-2">
                                <div class="intro-thumb">
                                    <div class="thumbShape1"><img
                                            src="{{ asset('assets/images/inh/hero-ellipse-outer.svg') }}" alt="shape"></div>
                                    <div class="thumbShape2"><img
                                            src="{{ asset('assets/images/inh/hero-ellipse-inner.svg') }}" alt="shape"></div>
                                    <img class="main-thumb img-custom-anim-right wow fadeInUp" data-wow-delay=".4s"
                                        src="{{ asset('assets/images/inh/hero-phone.png') }}" alt="I Need Help app preview">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section S T A R T -->
    <section class="about-section section-padding fix" id="about">
        <div class="about-container-wrapper style1">
            <div class="container">
                <div class="about-wrapper style1">
                    <div class="row gy-5 gx-60">
                        <div class="col-xl-6">
                            <div class="about-thumb">
                                <div class="bg"></div>
                                <div class="thumbShape1 d-none d-xxl-block cir36"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_1.png') }}" alt="shape"></div>
                                <div class="thumbShape2 d-none d-xxl-block cir36"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_2.png') }}" alt="shape"></div>
                                <div class="thumbShape3 d-none d-xxl-block cir36 float-bob-y"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_3.png') }}" alt="shape"></div>
                                <div class="thumbShape4 d-none d-xxl-block cir36"><img
                                        src="{{ asset('assets/images/shape/aboutThumbShape1_4.png') }}" alt="shape"></div>
                                <div class="main-thumb">
                                    <img src="{{ asset('assets/images/inh/about-thumb.png') }}" alt="thumb">
                                </div>
                                <div class="absolute-thumb float-bob-x">
                                    <img src="{{ asset('assets/images/about/aboutThumb1_2.png') }}" alt="thumb">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                        About Our App <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                    </div>
                                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">The Problem</h2>
                                    <p class="section-desc wow fadeInUp" data-wow-delay=".6s">Everyday Problems Need
                                        Everyday Solutions.<br>A flat tire, a heavy box, or a laptop that won't boot
                                        aren't emergencies. But formal services feel excessive, and posting on social
                                        media takes too long. Capable helpers are often just around the corner, yet
                                        there hasn't been a way to reach only the people close enough to
                                        act&mdash;until now.</p>
                                </div>
                                <div class="problem-list wow fadeInUp" data-wow-delay=".2s">
                                    <div class="problem-col">
                                        <div class="problem-head">
                                            <img src="{{ asset('assets/images/inh/icon-cross-red.png') }}" alt="icon">
                                            <span>Without a local channel</span>
                                        </div>
                                        <p class="problem-body">Requests go to broad social feeds or general
                                            classifieds, untargeted, easy to miss, no distance or trust signal
                                            attached.</p>
                                    </div>
                                    <div class="problem-col">
                                        <div class="problem-head">
                                            <img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon">
                                            <span>With proximity-first matching</span>
                                        </div>
                                        <p class="problem-body">A request only reaches people who are geographically
                                            close enough to act on it right now.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantage Section S T A R T -->
    <section class="advantage-section fix" id="solution">
        <div class="advantage-container-wrapper style1">
            <div class="container">
                <div class="advantage-wrapper style1 section-padding">
                    <div class="container">
                        <div class="row gy-5 d-flex align-items-center">
                            <div class="col-xl-6 order-2 order-xl-1">
                                <div class="advantage-content">
                                    <div class="section-title wow fadeInUp" data-wow-delay=".2s">
                                        <div class="subtitle">
                                            App Advantage <img src="{{ asset('assets/images/icon/fireIcon.svg') }}"
                                                alt="icon">
                                        </div>
                                        <h2 class="title">Our Solution</h2>
                                        <p class="section-desc">The core loop is simple: Ask &rarr; Match &rarr; Help.
                                            By leveraging live GPS, a 1 km broadcast radius, and real-time push
                                            notifications, your request is instantly sent to capable people nearby. You
                                            ask, the system matches you with a local Helper, and they navigate directly
                                            to your location to get the job done.</p>
                                    </div>
                                    <div class="checklist-wrapper style1 wow fadeInUp" data-wow-delay=".4s">
                                        <ul class="checklist style1">
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon">
                                                Friendly Design</li>
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon">
                                                SEO Optimized</li>
                                        </ul>
                                        <ul class="checklist style1">
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon">
                                                Cloud Storage</li>
                                            <li><img src="{{ asset('assets/images/icon/checkmarkIcon.svg') }}" alt="icon">
                                                Strong Security</li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn wow fadeInUp" data-wow-delay=".6s" href="#app">Download App
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 order-1 order-xl-2">
                                <div class="advantage-thumb">
                                    <div class="thumb1 img-custom-anim-top wow fadeInDown" data-wow-delay=".8s"
                                        data-tilt data-tilt-max="10"><img
                                            src="{{ asset('assets/images/inh/advantage-phone-1.png') }}" alt="thumb"></div>
                                    <div class="thumb2 img-custom-anim-right wow fadeInRight" data-wow-delay=".4s"
                                        data-tilt data-tilt-max="15"><img
                                            src="{{ asset('assets/images/inh/advantage-phone-2.png') }}" alt="thumb"></div>
                                    <div class="shape1"><img src="{{ asset('assets/images/inh/advantage-circle.svg') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Work Process Section S T A R T -->
    <section class="work-process-section section-padding fix" id="how-it-works">
        @php
            // Figma draws the Seeker/Helper switch but only fills one set of steps
            // (still lorem). Copy below is derived from the Ask -> Match -> Help loop
            // described in the "Our Solution" section - swap it when final copy lands.
            $howItWorks = [
                'seeker' => [
                    ['Post Your Request', 'Describe what you need in seconds, by text or by voice, and drop your location.'],
                    ['Get Matched', 'Your request is broadcast only to capable Helpers inside a 1 km radius.'],
                    ['Help Arrives', 'Follow your Helper on live GPS until they reach you, then rate the job.'],
                ],
                'helper' => [
                    ['Go Available', 'Switch yourself on and let nearby requests reach you in real time.'],
                    ['Accept a Request', 'See what is needed and how far it is, then take the ones you can handle.'],
                    ['Navigate & Earn', 'Turn-by-turn directions take you there. Finish the job and build your rating.'],
                ],
            ];
        @endphp
        <div class="work-process-container-wrapper style1">
            <div class="container">
                <div class="section-title text-center mxw-565 mx-auto">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                        How It Work <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">How it works</h2>
                    <div class="role-switch" role="tablist">
                        @foreach (array_keys($howItWorks) as $role)
                            <button type="button" role="tab" data-role="{{ $role }}"
                                class="{{ $loop->first ? 'active' : '' }}"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ ucfirst($role) }}</button>
                        @endforeach
                    </div>
                </div>
                <div class="work-process-wrapper style1">
                    <div class="shape"><img src="{{ asset('assets/images/inh/process-wave.png') }}" alt="shape"></div>
                    @foreach ($howItWorks as $role => $steps)
                        <div class="row role-panel {{ $loop->first ? '' : 'd-none' }}" data-role-panel="{{ $role }}">
                            @foreach ($steps as $i => [$title, $text])
                                <div class="col-xl-4">
                                    <div class="work-process-box style1 {{ $i === 1 ? 'child2' : '' }}">
                                        <div class="step">STEP - 0{{ $i + 1 }}</div>
                                        <div class="title">{{ $title }}</div>
                                        <div class="text">{{ $text }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Stack Section S T A R T -->
    <section class="tech-stack-section" id="technology">
        @php
            // Figma fills 2 of the 6 cards it paginates. Cards 3-6 repeat those two
            // as placeholders so the slider and its 6 dots are exercisable.
            $techCards = [
                [
                    'title' => 'GPS Tracking',
                    'built' => 'built with geolocator, flutter map and latlong2',
                    'body' => 'Live location for Seekers and Helpers powers matching, in-app maps, and turn by-turn arrival tracking.',
                ],
                [
                    'title' => 'Geofencing',
                    'built' => 'built with geolocator, flutter map and latlong2',
                    'body' => 'Every broadcast resolves recipients through one radius engine, so only Helpers within range ever see a request. Radius is configurable via BROADCAST_RADIUS_M (default 1,000m)',
                ],
            ];
            $techSlides = array_map(fn ($i) => $techCards[$i % count($techCards)], range(0, 5));
        @endphp
        <div class="container">
            <div class="tech-stack-wrapper section-padding">
                <div class="shape2"><img src="{{ asset('assets/images/shape/testimonialShape1_2.png') }}" alt="shape"></div>
                <div class="container">
                    <div class="section-title text-center mxw-685 mx-auto">
                        <div class="subtitle">
                            Testimonial <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                        </div>
                        <h2 class="title">Technology Stack</h2>
                    </div>
                    <div class="slider-area techStackSlider">
                        <div class="swiper gt-slider" id="techStackSlider"
                            data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1200":{"slidesPerView":3}}}'>
                            <div class="swiper-wrapper">
                                @foreach ($techSlides as $card)
                                    <div class="swiper-slide">
                                        <div class="tech-stack-card">
                                            <div class="card-head">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/images/inh/tech-avatar.jpg') }}" alt="thumb">
                                                </div>
                                                <div>
                                                    <h5>{{ $card['title'] }}</h5>
                                                    <p class="built-with">{{ $card['built'] }}</p>
                                                </div>
                                            </div>
                                            <p class="card-text">{{ $card['body'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="slider-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wcu Section S T A R T -->
    <section class="wcu-section section-padding fix">
        <div class="wcu-container-wrapper style1">
            <div class="container">
                <div class="section-title text-center mxw-685 mx-auto wow fadeInUp" data-wow-delay=".2s">
                    <div class="subtitle">
                        Why using our app<img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title">Our app is great for individuals, startups and enterprises</h2>
                </div>
                <div class="wcu-wrapper style1">
                    <div class="row gy-5 d-flex justify-content-center">
                        <div class="col-xl-4 d-flex justify-content-center">
                            <div class="wcu-content">
                                <div class="fancy-box style2">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_1.svg') }}" alt="icon"></div>
                                    <div class="content wow fadeInUp" data-wow-delay=".2s">
                                        <h4>High usability</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_2.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Action Reminder</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_3.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Merge Files</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex justify-content-center">
                            <div class="wcu-thumb wow fadeInUp" data-wow-delay=".2s">
                                <div class="main-thumb wow bounceInUp" data-wow-delay=".6s"><img
                                        src="{{ asset('assets/images/wcu/wcuThumb1_1.png') }}" alt="thumb"></div>
                                <div class="shape"><img src="{{ asset('assets/images/shape/wcuThumbShape1_1.png') }}" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex justify-content-center justify-content-xl-end">
                            <div class="wcu-content">
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_4.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Free Live Chat</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_5.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Social Share</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="icon"><img src="{{ asset('assets/images/icon/wcuIcon1_6.svg') }}" alt="icon"></div>
                                    <div class="content">
                                        <h4>Custom Shortcuts</h4>
                                        <p class="text">There are many variations of passages of Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section S T A R T -->
    <div class="counter-section fix">
        <div class="counter-container-wrapper style1">
            <div class="container">
                <div class="counter-wrapper style1 section-padding"
                    data-bg-src="{{ asset('assets/images/shape/counterShape1_1.png') }}">
                    <div class="shape"></div>
                    <div class="container">
                        <div class="row gy-5">
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="counter">
                                        <span class="counter-number">56</span> <span class="plus">+</span>
                                    </div>
                                    <p class="text">Customers visit app every months</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="counter">
                                        <span class="counter-number">32</span> <span class="plus">+</span>
                                    </div>
                                    <p class="text">Total downloaded of our app</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="counter">
                                        <span class="counter-number">156</span> <span class="plus">k</span>
                                    </div>
                                    <p class="text">Total Members of App Users</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                <div class="counter-box style1 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="counter">
                                        <span class="counter-number">42</span> <span class="plus">+</span>
                                    </div>
                                    <p class="text">Satisfaction rate from our customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Faq Section S T A R T -->
    <section class="faq-section section-padding fix">
        <div class="container">
            <div class="faq-wrapper style1">
                <div class="row gy-5 gy-xl-0 gx-60 d-flex align-items-start">
                    <div class="col-xl-6">
                        <div class="faq-content style1">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    FAQs <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Frequently Ask Questions</h2>
                                <p class="section-desc wow fadeInUp" data-wow-delay=".6s">There are many variations of
                                    passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly</p>
                            </div>
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                                aria-controls="faq1">
                                                Looking for a solution to boost productivity?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                aria-controls="faq2">
                                                Need an easy way to manage your projects?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Seeking a user-friendly solution for your team?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-thumb">
                            <img class="main-thumb  wow fadeInUp" data-wow-delay=".2s"
                                src="{{ asset('assets/images/faq/faqThumb1_2.png') }}" alt="thumb">
                            <div class="absolute-thumb float-bob-x">
                                <img src="{{ asset('assets/images/faq/faqThumb1_1.png') }}" alt="thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Feature Section S T A R T -->
    <section class="feature-section section-padding fix">
        <div class="container">
            <div class="feature-wrapper style1">
                <div class="row gy-5 gx-134">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <div class="feature-content">
                            <div class="section-title">
                                <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                                    Our Features <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">Our features will help to improve
                                    business</h2>
                                <p class="section-desc wow fadeInUp" data-wow-delay=".6s">There are many variations of
                                    passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour, or
                                    randomised words which don't look even slightly</p>
                            </div>
                            <a class="theme-btn wow fadeInUp" data-wow-delay=".2s" href="{{ url('/contact') }}">Start
                                Collaborator <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_91_29)">
                                        <path
                                            d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_91_29">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 order-1 order-xl-2">
                        <div class="feature-box-wrapper">
                            <div class="feature-box style1 child1">
                                <div class="feature-box-header wow fadeInUp" data-wow-delay=".2s">
                                    <div class="content">
                                        <h5>Software development</h5>
                                        <p class="text">UX Research</p>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35"
                                            viewBox="0 0 34 35" fill="none">
                                            <circle cx="17" cy="17.5" r="16" stroke="#F1F1F1" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="feature-box-footer wow fadeInUp" data-wow-delay=".4s">
                                    <div class="content">
                                        <span class="day">Today</span>
                                        <span class="time">07:02 AM</span>
                                    </div>
                                    <div class="shape"><img src="{{ asset('assets/images/shape/featureProfileShape1_1.png') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                            <div class="feature-box style1 child2">
                                <div class="feature-box-header wow fadeInUp" data-wow-delay=".6s">
                                    <div class="content">
                                        <h5>Design data & analytics</h5>
                                        <p class="text">UX Research</p>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35"
                                            viewBox="0 0 34 35" fill="none">
                                            <circle cx="17" cy="17.5" r="16" stroke="#F1F1F1" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="feature-box-footer wow fadeInUp" data-wow-delay=".6s">
                                    <div class="content">
                                        <span class="day">Today</span>
                                        <span class="time">07:02 AM</span>
                                    </div>
                                    <div class="shape"><img src="{{ asset('assets/images/shape/featureProfileShape1_1.png') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                            <div class="feature-box style1 wow fadeInUp" data-wow-delay=".6s">
                                <div class="feature-box-header">
                                    <div class="content">
                                        <h5>Dedicated Support</h5>
                                        <p class="text">UX Research</p>
                                    </div>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="35"
                                            viewBox="0 0 34 35" fill="none">
                                            <circle cx="17" cy="17.5" r="16" stroke="#F1F1F1" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="feature-box-footer">
                                    <div class="content">
                                        <span class="day">Today</span>
                                        <span class="time">07:02 AM</span>
                                    </div>
                                    <div class="shape"><img src="{{ asset('assets/images/shape/featureProfileShape1_1.png') }}"
                                            alt="shape"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing Section S T A R T -->
    <section class="pricing-section section-padding pt-0 fix">
        <div class="container">
            <div class="section-title text-center mxw-685 mx-auto">
                <div class="subtitle">
                    Our Pricing <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                </div>
                <h2 class="title">Choose The Plans That Suits You!</h2>
                <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have
                </p>
            </div>
            <div class="pricing-wrapper style1">
                <div class="tab-section d-flex justify-content-center align-items-center">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-monthly-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-monthly" type="button" role="tab" aria-controls="pills-monthly"
                                aria-selected="true">Monthly</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-yearly-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-yearly" type="button" role="tab" aria-controls="pills-yearly"
                                aria-selected="false" tabindex="-1">Yearly</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-monthly" role="tabpanel"
                        aria-labelledby="pills-monthly-tab">
                        <div class="row gy-5">
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Basic Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$14.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ url('/pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Standard Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$19.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style4" href="{{ url('/pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Premium Plan Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$24.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ url('/pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-yearly" role="tabpanel" aria-labelledby="pills-yearly-tab">
                        <div class="row gy-5">
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Basic Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$34.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ url('/pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Standard Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$64.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style4" href="{{ url('/pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="pricing-card style1">
                                    <div class="pricing-card-header">
                                        <h6>Premium Plan Plan</h6>
                                        <div class="price-wrapper">
                                            <span class="price">$84.99</span> <span class="text"> / Per Month</span>
                                        </div>
                                        <p class="text">There are many variations of passages of Lorem Ipsum available,
                                            but the
                                            majority</p>
                                    </div>
                                    <div class="pricing-card-body">
                                        <ul class="checklist">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 7 days free access
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum of 5 collaborators
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Cloud backup 1GB
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> Maximum 50 tasks per week
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#1AD079" />
                                                </svg> 100+ HTML UI Elements
                                            </li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none">
                                                    <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M7.22393 0C10.1444 0.0048682 12.3871 1.22628 13.952 3.66423C15.1321 5.76513 15.3168 7.95136 14.5062 10.2229C13.3721 12.8859 11.3758 14.4614 8.51719 14.9495C5.62984 15.2424 3.28454 14.2622 1.48125 12.0088C-0.0776275 9.77987 -0.406074 7.37811 0.495906 4.80353C1.26674 2.9139 2.5754 1.53341 4.42187 0.662026C5.31983 0.270692 6.25384 0.0500183 7.22393 0ZM11.2269 4.43403C11.6225 4.43526 11.7508 4.62002 11.6118 4.98829C9.90797 6.93843 8.20413 8.8886 6.50032 10.8387C6.34295 10.9814 6.17359 10.9968 5.99226 10.8849C5.24811 9.89445 4.50399 8.904 3.75985 7.91352C3.63052 7.68883 3.67671 7.50922 3.89841 7.37466C3.99079 7.35412 4.08316 7.35412 4.17554 7.37466C4.74004 7.75441 5.30458 8.1342 5.86909 8.51396C6.02234 8.62678 6.18659 8.64729 6.36176 8.57554C7.97994 7.1872 9.60165 5.80667 11.2269 4.43403Z"
                                                        fill="#858585" />
                                                </svg> Updates for 1 Year
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="theme-btn style5" href="{{ url('/pricing') }}"> Get You Free plan </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Section S T A R T -->
    <section class="cta-section">
        <div class="cta-container-wrapper style1">
            <div class="container">
                <div class="cta-wrapper style1  section-padding fix">
                    <div class="shape1 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_1.png') }}" alt="shape">
                    </div>
                    <div class="shape2 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_2.png') }}" alt="shape">
                    </div>
                    <div class="shape3 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_3.png') }}" alt="shape">
                    </div>
                    <div class="shape4 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_4.png') }}" alt="shape">
                    </div>
                    <div class="container">
                        <div class="row gy-5">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="cta-content">
                                    <div class="section-title">
                                        <div class="subtitle text-white bg2 wow fadeInUp" data-wow-delay=".2s">
                                            Our App <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                                        </div>
                                        <h2 class="title text-white wow fadeInUp" data-wow-delay=".4s">Download our app
                                            and start your free trail to get
                                            started today!</h2>
                                        <p class="section-desc text-white mxw-651 wow fadeInUp" data-wow-delay=".6s">
                                            There are many variations of passages
                                            of Lorem Ipsum available, but the majority have suffered alteration in some
                                            form, by injected humour, or randomised</p>
                                    </div>
                                    <a class="playstore" href="https://play.google.com/store"><img
                                            src="{{ asset('assets/images/cta/ctaplayStore1_1.png') }}" alt="img"></a>
                                    <a href="https://www.apple.com/store"><img
                                            src="{{ asset('assets/images/cta/ctaAppleStore1_1.png') }}" alt="img"></a>
                                </div>
                            </div>
                            <div class="col-xl-4 order-1 order-xl-2">
                                <div class="cta-thumb wow fadeInUp" data-wow-delay=".2s">
                                    <img src="{{ asset('assets/images/cta/ctaThumb1_1.png') }}" alt="thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section S T A R T -->
    <section class="blog-section section-padding fix">
        <div class="container">
            <div class="blog-wrapper style1">
                <div class="section-title text-center mxw-685 mx-auto">
                    <div class="subtitle wow fadeInUp" data-wow-delay=".2s">
                        Our Blog <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay=".4s">Recent Articles And Latest Blog</h2>
                </div>
                <div class="row gy-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style1 wow fadeInUp" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="thumb">
                            </div>
                            <div class="body">
                                <div class="tag-meta">
                                    <img src="{{ asset('assets/images/icon/FolderIcon.svg') }}" alt="icon">
                                    Workplace
                                </div>
                                <h3><a href="{{ url('/blog-details') }}">Services that printing at you is important</a></h3>
                                <div class="blog-meta">
                                    <div class="item child1">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">Sep 30, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style1 wow fadeInUp" data-wow-delay=".4s">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb1_2.jpg') }}" alt="thumb">
                            </div>
                            <div class="body">
                                <div class="tag-meta">
                                    <img src="{{ asset('assets/images/icon/FolderIcon.svg') }}" alt="icon">
                                    Coding
                                </div>
                                <h3><a href="{{ url('/blog-details') }}">A checklist to improve your daily routine</a></h3>
                                <div class="blog-meta">
                                    <div class="item child1">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">Sep 30, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-card style1 wow fadeInUp" data-wow-delay=".6s">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="thumb">
                            </div>
                            <div class="body">
                                <div class="tag-meta">
                                    <img src="{{ asset('assets/images/icon/FolderIcon.svg') }}" alt="icon">
                                    Technology
                                </div>
                                <h3><a href="{{ url('/blog-details') }}">That will help you get 1% better every day</a></h3>
                                <div class="blog-meta">
                                    <div class="item child1">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/userIcon.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">By Admin</span>
                                    </div>
                                    <div class="item">
                                        <span class="icon">
                                            <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="icon">
                                        </span>
                                        <span class="text">Sep 30, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.role-switch button').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var role = btn.dataset.role;
                btn.parentElement.querySelectorAll('button').forEach(function (b) {
                    b.classList.toggle('active', b === btn);
                    b.setAttribute('aria-selected', b === btn);
                });
                document.querySelectorAll('[data-role-panel]').forEach(function (panel) {
                    panel.classList.toggle('d-none', panel.dataset.rolePanel !== role);
                });
            });
        });
    </script>
@endpush
