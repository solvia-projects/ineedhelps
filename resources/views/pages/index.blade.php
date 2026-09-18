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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path
                                            d="M11.6118 3.61182L10.8991 4.32454L14.0706 7.49603H0V8.50398H14.0706L10.8991 11.6754L11.6118 12.3882L16 7.99997L11.6118 3.61182Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 order-1 order-xl-2">
                            <div class="advantage-thumb">
                                <div class="thumb1 img-custom-anim-top wow fadeInDown" data-wow-delay=".8s" data-tilt
                                    data-tilt-max="10"><img src="{{ asset('assets/images/inh/advantage-phone-1.png') }}"
                                        alt="thumb"></div>
                                <div class="thumb2 img-custom-anim-right wow fadeInRight" data-wow-delay=".4s" data-tilt
                                    data-tilt-max="15"><img src="{{ asset('assets/images/inh/advantage-phone-2.png') }}"
                                        alt="thumb"></div>
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
                        <button type="button" role="tab" data-role="{{ $role }}" class="{{ $loop->first ? 'active' : '' }}"
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
        $techSlides = array_map(fn($i) => $techCards[$i % count($techCards)], range(0, 5));
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

<!-- App Showcase Section S T A R T -->
<section class="app-showcase-section section-padding fix">
    <div class="container">
        <div class="section-title text-center mxw-685 mx-auto wow fadeInUp" data-wow-delay=".2s">
            <div class="subtitle">
                Why Using Our App <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon">
            </div>
            <h2 class="title" style="color: #2b59ff;">App Showcase</h2>
        </div>

        <div class="showcase-image text-center mb-5 wow fadeInUp" data-wow-delay=".4s">
            <div class="d-flex justify-content-lg-center align-items-center gap-4 pb-4" style="overflow-x: auto; overflow-y: hidden; margin: 0 calc(-50vw + 50%); padding: 20px 20px;">
                <!-- Outer Left (w:233, h:517) -->
                <img src="https://placehold.co/233x517/e9ecef/6c757d?text=App+Screen+1" alt="App 1" style="width: 233px; height: 517px; object-fit: cover; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); flex-shrink: 0; border: 4px solid #fff;">
                
                <!-- Inner Left (w:250, h:555) -->
                <img src="https://placehold.co/250x555/dee2e6/495057?text=App+Screen+2" alt="App 2" style="width: 250px; height: 555px; object-fit: cover; border-radius: 26px; box-shadow: 0 15px 35px rgba(0,0,0,0.08); flex-shrink: 0; border: 4px solid #fff;">
                
                <!-- Center (w:275, h:610) -->
                <img src="https://placehold.co/275x610/f8f9fa/212529?text=App+Screen+3" alt="App 3" style="width: 275px; height: 610px; object-fit: cover; border-radius: 30px; box-shadow: 0 20px 50px rgba(0,0,0,0.15); flex-shrink: 0; border: 5px solid #fff;">
                
                <!-- Inner Right (w:250, h:555) -->
                <img src="https://placehold.co/250x555/dee2e6/495057?text=App+Screen+4" alt="App 4" style="width: 250px; height: 555px; object-fit: cover; border-radius: 26px; box-shadow: 0 15px 35px rgba(0,0,0,0.08); flex-shrink: 0; border: 4px solid #fff;">
                
                <!-- Outer Right (w:233, h:517) -->
                <img src="https://placehold.co/233x517/e9ecef/6c757d?text=App+Screen+5" alt="App 5" style="width: 233px; height: 517px; object-fit: cover; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); flex-shrink: 0; border: 4px solid #fff;">
            </div>
        </div>

        <div class="showcase-features row gy-5 mt-4">
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                <div class="feature-box d-flex align-items-start gap-4">
                    <div class="icon flex-shrink-0">
                        <img src="{{ asset('assets/images/icon/wcuIcon1_1.svg') }}" alt="icon" style="width: 48px;">
                    </div>
                    <div class="content">
                        <h4 style="color: #2b59ff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Categorized Requests</h4>
                        <p class="text" style="font-size: 15px; line-height: 1.6;">Easily ask for or offer help across 12 distinct, color-coded categories.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="feature-box d-flex align-items-start gap-4">
                    <div class="icon flex-shrink-0">
                        <img src="{{ asset('assets/images/icon/wcuIcon1_2.svg') }}" alt="icon" style="width: 48px;">
                    </div>
                    <div class="content">
                        <h4 style="color: #2b59ff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Community Leaderboard</h4>
                        <p class="text" style="font-size: 15px; line-height: 1.6;">Get recognized as a top Helper and inspire the community.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-box d-flex align-items-start gap-4">
                    <div class="icon flex-shrink-0">
                        <img src="{{ asset('assets/images/icon/wcuIcon1_3.svg') }}" alt="icon" style="width: 48px;">
                    </div>
                    <div class="content">
                        <h4 style="color: #2b59ff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Rewards & Avatars</h4>
                        <p class="text" style="font-size: 15px; line-height: 1.6;">Earn coins by helping others to unlock cosmetics and personalize your profile.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="feature-box d-flex align-items-start gap-4">
                    <div class="icon flex-shrink-0">
                        <img src="{{ asset('assets/images/icon/wcuIcon1_4.svg') }}" alt="icon" style="width: 48px;">
                    </div>
                    <div class="content">
                        <h4 style="color: #2b59ff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">In-App Chat</h4>
                        <p class="text" style="font-size: 15px; line-height: 1.6;">Coordinate seamlessly with direct messaging during active tasks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="feature-box d-flex align-items-start gap-4">
                    <div class="icon flex-shrink-0">
                        <img src="{{ asset('assets/images/icon/wcuIcon1_5.svg') }}" alt="icon" style="width: 48px;">
                    </div>
                    <div class="content">
                        <h4 style="color: #2b59ff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Two-Way Ratings</h4>
                        <p class="text" style="font-size: 15px; line-height: 1.6;">Build community trust and ensure quality with mutual post-task reviews.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".7s">
                <div class="feature-box d-flex align-items-start gap-4">
                    <div class="icon flex-shrink-0">
                        <img src="{{ asset('assets/images/icon/wcuIcon1_6.svg') }}" alt="icon" style="width: 48px;">
                    </div>
                    <div class="content">
                        <h4 style="color: #2b59ff; font-size: 20px; font-weight: 600; margin-bottom: 10px;">Live GPS Map</h4>
                        <p class="text" style="font-size: 15px; line-height: 1.6;">Discover nearby requests and track active Helpers in real-time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gamification Section S T A R T -->
<section class="gamification-section section-padding fix" style="background-color: #fdfbf7; padding-top: 80px; padding-bottom: 80px;">
    <div class="container-fluid" style="max-width: 1400px;">
        <div class="row align-items-start gy-5">
            <div class="col-xl-5 col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                
                <!-- White Card Container -->
                <div style="background-color: #ffffff; border-radius: 30px; padding: 50px; box-shadow: 0 15px 50px rgba(0,0,0,0.03);">
                    
                    <div class="section-title mb-4">
                        <div class="subtitle d-inline-flex align-items-center justify-content-center" style="background: #fff9e6; color: #2b59ff; padding: 6px 20px; border-radius: 30px; font-weight: 500; font-size: 13px; margin-bottom: 20px;">
                            Gamification <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon" style="margin-left: 8px; width: 14px;">
                        </div>
                        <h2 class="title" style="color: #1b253b; font-weight: 800; font-size: 38px; line-height: 1.2;">Gamification System</h2>
                    </div>
                    <p class="text mb-5" style="color: #667085; font-size: 15px; line-height: 1.6;">All reward values are defined server-side in backend/catalog.py and validated on every claim — the client never sets its own reward amounts</p>

                    <div class="gamification-list d-flex flex-column gap-3">
                        
                        <!-- Closed Base Rewards (Double rendered as in design) -->
                        <div class="p-3" style="background: #ffd500; border-radius: 12px; cursor: pointer;">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 style="color: #2b59ff; font-weight: 600; margin-bottom: 0; font-size: 15px;">Base Rewards (XP & Coins)</h6>
                                <i class="fa-solid fa-angles-right" style="color: #2b59ff; font-size: 12px;"></i>
                            </div>
                        </div>

                        <!-- Open Base Rewards -->
                        <div class="p-3" style="background: #ffd500; border-radius: 12px;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 style="color: #2b59ff; font-weight: 600; margin-bottom: 0; font-size: 15px;">Base Rewards (XP & Coins)</h6>
                                <i class="fa-solid fa-angles-down" style="color: #2b59ff; font-size: 12px;"></i>
                            </div>
                            <p class="text mb-0" style="font-size: 14px; color: #444; line-height: 1.6;">Earn 50 XP to level up your profile and 10 Coins to spend in the Avatar Shop for every help request you successfully complete.</p>
                        </div>
                        
                        <!-- Open Daily Missions -->
                        <div class="p-3 pb-4" style="background: transparent; border-bottom: 1px solid #f1f3f5;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 style="color: #2b59ff; font-weight: 600; margin-bottom: 0; font-size: 15px;">Daily Missions</h6>
                                <i class="fa-solid fa-angles-down" style="color: #2b59ff; font-size: 12px;"></i>
                            </div>
                            <p class="text mb-0" style="font-size: 14px; color: #667085; line-height: 1.6;">
                                Unlock extra bonuses as you help more people each day:<br>
                                <span style="padding-left: 10px;">• First Help: +10 XP & 5 Coins</span><br>
                                <span style="padding-left: 10px;">• Streak Goal (3 helps): +30 XP & 15 Coins</span><br>
                                <span style="padding-left: 10px;">• Power Helper (5 helps): +50 XP & 25 Coins</span>
                            </p>
                        </div>

                        <!-- Open Weekly Missions -->
                        <div class="p-3 pb-4" style="background: transparent; border-bottom: 1px solid #f1f3f5;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 style="color: #2b59ff; font-weight: 600; margin-bottom: 0; font-size: 15px;">Weekly Missions</h6>
                                <i class="fa-solid fa-angles-down" style="color: #2b59ff; font-size: 12px;"></i>
                            </div>
                            <p class="text mb-0" style="font-size: 14px; color: #667085; line-height: 1.6;">Hit weekly milestones of 10, 20, or 30 completed helps to unlock tiered rewards, earning you up to 300 XP and 150 Coins.</p>
                        </div>

                        <!-- Open Activity Streaks -->
                        <div class="p-3 pb-4" style="background: transparent; border-bottom: 1px solid #f1f3f5;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 style="color: #2b59ff; font-weight: 600; margin-bottom: 0; font-size: 15px;">Activity Streaks</h6>
                                <i class="fa-solid fa-angles-down" style="color: #2b59ff; font-size: 12px;"></i>
                            </div>
                            <p class="text mb-0" style="font-size: 14px; color: #667085; line-height: 1.6;">Keep your momentum going! Maintain your active streak by completing at least 3 helps every day. If you miss a day, your streak will reset to zero.</p>
                        </div>

                        <!-- Open Avatar Customization -->
                        <div class="p-3 pb-4" style="background: transparent; border-bottom: 1px solid #f1f3f5;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 style="color: #2b59ff; font-weight: 600; margin-bottom: 0; font-size: 15px;">Avatar Customization</h6>
                                <i class="fa-solid fa-angles-down" style="color: #2b59ff; font-size: 12px;"></i>
                            </div>
                            <p class="text mb-0" style="font-size: 14px; color: #667085; line-height: 1.6;">Spend your hard-earned Coins in the shop! Choose from 8 unique character skins and 6 cosmetic accessories (hats, eyewear, and masks) priced between 0-180 Coins.</p>
                        </div>

                        <!-- Open Community Leaderboard -->
                        <div class="p-3" style="background: transparent;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 style="color: #2b59ff; font-weight: 600; margin-bottom: 0; font-size: 15px;">Community Leaderboard</h6>
                                <i class="fa-solid fa-angles-down" style="color: #2b59ff; font-size: 12px;"></i>
                            </div>
                            <p class="text mb-0" style="font-size: 14px; color: #667085; line-height: 1.6;">See how you stack up against the rest! Check out the real-time community ranking that highlights and celebrates our most active Helpers.</p>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-xl-7 col-lg-6 wow fadeInRight" data-wow-delay=".4s">
                <!-- Layered Images Fanning Right -->
                <div class="position-relative w-100 mt-5 mt-lg-0" style="height: 650px; overflow-x: visible;">
                    <!-- 5th (Back-most, right-most) -->
                    <img src="https://placehold.co/230x500/e9ecef/6c757d?text=App+Screen+5" alt="Screen 5" style="width: 210px; height: 480px; object-fit: cover; border-radius: 20px; position: absolute; left: 450px; top: 80px; z-index: 1; box-shadow: -5px 10px 30px rgba(0,0,0,0.05); border: 4px solid #fff;">
                    
                    <!-- 4th -->
                    <img src="https://placehold.co/240x520/e9ecef/6c757d?text=App+Screen+4" alt="Screen 4" style="width: 230px; height: 510px; object-fit: cover; border-radius: 22px; position: absolute; left: 350px; top: 60px; z-index: 2; box-shadow: -10px 10px 30px rgba(0,0,0,0.08); border: 4px solid #fff;">
                    
                    <!-- 3rd -->
                    <img src="https://placehold.co/250x550/e9ecef/6c757d?text=App+Screen+3" alt="Screen 3" style="width: 250px; height: 540px; object-fit: cover; border-radius: 24px; position: absolute; left: 240px; top: 40px; z-index: 3; box-shadow: -15px 15px 35px rgba(0,0,0,0.1); border: 5px solid #fff;">
                    
                    <!-- 2nd -->
                    <img src="https://placehold.co/260x580/e9ecef/6c757d?text=App+Screen+2" alt="Screen 2" style="width: 270px; height: 570px; object-fit: cover; border-radius: 26px; position: absolute; left: 120px; top: 20px; z-index: 4; box-shadow: -20px 20px 40px rgba(0,0,0,0.12); border: 5px solid #fff;">
                    
                    <!-- 1st (Front-most, left-most) -->
                    <img src="https://placehold.co/275x610/f8f9fa/212529?text=App+Screen+1" alt="Screen 1" style="width: 290px; height: 610px; object-fit: cover; border-radius: 30px; position: absolute; left: 0px; top: 0px; z-index: 5; box-shadow: -25px 25px 50px rgba(0,0,0,0.15); border: 6px solid #fff;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Safety & Trust Section S T A R T -->
<section class="safety-trust-section section-padding fix">
    <div class="container">
        <div class="row align-items-start gy-5">
            <div class="col-lg-6 order-2 order-lg-1 wow fadeInLeft" data-wow-delay=".2s">
                <div class="row gy-3 gx-3 justify-content-center">
                    <div class="col-6 col-sm-5">
                        <div class="card p-3 border-0"
                            style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 12px; min-height: 120px;">
                            <div class="mb-2" style="font-size: 20px;">⭐</div>
                            <h6 style="color: #2b59ff; font-size: 13px; font-weight: 700; margin-bottom: 5px;">
                                Ratings/Reviews</h6>
                            <p style="font-size: 10px; color: #777; margin: 0; line-height: 1.4;">Two-way reviews
                                maintain trust and standards</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card p-3 border-0"
                            style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 12px; min-height: 120px;">
                            <div class="mb-2" style="font-size: 20px; color: #2b59ff;">📄</div>
                            <h6 style="color: #2b59ff; font-size: 13px; font-weight: 700; margin-bottom: 5px;">User
                                Reporting</h6>
                            <p style="font-size: 10px; color: #777; margin: 0; line-height: 1.4;">Report inappropriate
                                behavior immediately</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card p-3 border-0"
                            style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 12px; min-height: 120px;">
                            <div class="mb-2" style="font-size: 20px; color: #dc3545;">⚠️</div>
                            <h6 style="color: #2b59ff; font-size: 13px; font-weight: 700; margin-bottom: 5px;">Rate
                                Limiting</h6>
                            <p style="font-size: 10px; color: #777; margin: 0; line-height: 1.4;">Prevents spam and
                                abuse</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card p-3 border-0"
                            style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 12px; min-height: 120px;">
                            <div class="mb-2" style="font-size: 20px;">💬</div>
                            <h6 style="color: #2b59ff; font-size: 13px; font-weight: 700; margin-bottom: 5px;">Proactive
                                Moderation</h6>
                            <p style="font-size: 10px; color: #777; margin: 0; line-height: 1.4;">Automated filtering
                                for text</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card p-3 border-0"
                            style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 12px; min-height: 120px;">
                            <div class="mb-2" style="font-size: 20px; color: #198754;">📍</div>
                            <h6 style="color: #2b59ff; font-size: 13px; font-weight: 700; margin-bottom: 5px;">Location
                                Validation</h6>
                            <p style="font-size: 10px; color: #777; margin: 0; line-height: 1.4;">Only nearby users can
                                match</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card p-3 border-0"
                            style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 12px; min-height: 120px;">
                            <div class="mb-2" style="font-size: 20px; color: #fd7e14;">✉️</div>
                            <h6 style="color: #2b59ff; font-size: 13px; font-weight: 700; margin-bottom: 5px;">Email
                                Verification</h6>
                            <p style="font-size: 10px; color: #777; margin: 0; line-height: 1.4;">Ensure valid users and
                                accounts</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-5">
                        <div class="card p-3 border-0"
                            style="box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 12px; min-height: 120px;">
                            <div class="mb-2" style="font-size: 20px; color: #2b59ff;">🔄</div>
                            <h6 style="color: #2b59ff; font-size: 13px; font-weight: 700; margin-bottom: 5px;">CAPTCHA
                            </h6>
                            <p style="font-size: 10px; color: #777; margin: 0; line-height: 1.4;">Bot protection</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 wow fadeInRight" data-wow-delay=".4s">
                <div class="section-title">
                    <div class="subtitle">Our Commitment <img src="{{ asset('assets/images/icon/fireIcon.svg') }}"
                            alt="icon"></div>
                    <h2 class="title" style="color: #2b59ff;">Safety & Trust</h2>
                </div>
                <p class="text mt-3" style="color: #555; line-height: 1.6; max-width: 400px;">Connecting you safely.
                    From verified accounts to real-time spam protection, we ensure peace of mind every time you give or
                    receive help.</p>
            </div>
        </div>
    </div>
</section>

<!-- Results Section S T A R T -->
<section class="results-section section-padding fix mb-5">
    <div class="container">
        <div style="background-color: #ffd000; border-radius: 20px; padding: 60px 20px;">
            <div class="section-title text-center mb-5">
                <h2 class="title" style="color: #2b59ff;">Results</h2>
            </div>
            <div class="row gy-5 text-center">
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i
                                class="fa-solid fa-location-dot"></i></div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">96.7%</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">
                            Geofencing</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i class="fa-regular fa-bell"></i>
                        </div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">93.3%</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">
                            Notification performance</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i class="fa-solid fa-gamepad"></i>
                        </div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">91.7%</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">
                            Gamification</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i
                                class="fa-regular fa-handshake"></i></div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">90.0%</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">Help
                            acceptance</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i
                                class="fa-solid fa-mobile-screen"></i></div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">87/100</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">
                            Usability</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i class="fa-regular fa-star"></i>
                        </div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">4.8/5</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">
                            Satisfaction</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i
                                class="fa-solid fa-shield-halved"></i></div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">90%</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">Safety
                            feeling</p>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="result-item">
                        <div class="icon mb-2" style="color: #fff; font-size: 32px;"><i
                                class="fa-regular fa-circle-check"></i></div>
                        <h3 style="color: #2b59ff; font-weight: 700; font-size: 36px; margin-bottom: 5px;">89%</h3>
                        <p style="color: #2b59ff; font-size: 13px; font-weight: 500; text-transform: uppercase;">Shield
                            testing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Future Development Section S T A R T -->
<section class="future-development-section section-padding fix" style="background-color: #fcfbfa;">
    <div class="container">
        <div class="section-title text-center mxw-685 mx-auto wow fadeInUp" data-wow-delay=".2s">
            <div class="subtitle">Next Plan <img src="{{ asset('assets/images/icon/fireIcon.svg') }}" alt="icon"></div>
            <h2 class="title" style="color: #2b59ff;">Future Development</h2>
        </div>

        <div class="row gy-4 justify-content-center mt-5">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
                <div class="card border-0 p-3 h-100"
                    style="box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="Wider Field Testing"
                        class="card-img-top mb-3" style="border-radius: 8px; height: 180px; object-fit: cover;">
                    <h5 style="color: #2b59ff; font-weight: 600; font-size: 16px; margin-bottom: 10px;">Wider Field
                        Testing</h5>
                    <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 0;">Broadening our testing
                        phases with larger participant pools, diverse locations, and extended timeframes to gather rich
                        user feedback and improve usability.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="card border-0 p-3 h-100"
                    style="box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="Smarter Volunteer Matching"
                        class="card-img-top mb-3" style="border-radius: 8px; height: 180px; object-fit: cover;">
                    <h5 style="color: #2b59ff; font-weight: 600; font-size: 16px; margin-bottom: 10px;">Smarter
                        Volunteer Matching</h5>
                    <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 0;">Upgrading our algorithm
                        to connect users based on relevant skill, availability, and performance history going beyond
                        simple geographic proximity.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".4s">
                <div class="card border-0 p-3 h-100"
                    style="box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="Better Accessibility"
                        class="card-img-top mb-3" style="border-radius: 8px; height: 180px; object-fit: cover;">
                    <h5 style="color: #2b59ff; font-weight: 600; font-size: 16px; margin-bottom: 10px;">Better
                        Accessibility</h5>
                    <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 0;">Making the platform
                        truly inclusive for everyone by integrating comprehensive screen reader compatibility, voice
                        inputs, and high-contrast display options.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                <div class="card border-0 p-3 h-100"
                    style="box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="Stronger Safety/Verification"
                        class="card-img-top mb-3" style="border-radius: 8px; height: 180px; object-fit: cover;">
                    <h5 style="color: #2b59ff; font-weight: 600; font-size: 16px; margin-bottom: 10px;">Stronger
                        Safety/Verification</h5>
                    <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 0;">Building a more secure
                        community ecosystem through official ID verification and sophisticated anti-abuse monitoring
                        tools.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="card border-0 p-3 h-100"
                    style="box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-radius: 12px; background: #fff;">
                    <img src="{{ asset('assets/images/blog/blogThumb1_1.jpg') }}" alt="Larger-Scale Deployment"
                        class="card-img-top mb-3" style="border-radius: 8px; height: 180px; object-fit: cover;">
                    <h5 style="color: #2b59ff; font-weight: 600; font-size: 16px; margin-bottom: 10px;">Larger-Scale
                        Deployment</h5>
                    <p style="font-size: 13px; color: #666; line-height: 1.5; margin-bottom: 0;">Scaling our backend
                        infrastructure to handle the transition from limited pilot to widespread global usage smoothly.
                    </p>
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
                <div class="shape1 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_1.png') }}"
                        alt="shape">
                </div>
                <div class="shape2 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_2.png') }}"
                        alt="shape">
                </div>
                <div class="shape3 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_3.png') }}"
                        alt="shape">
                </div>
                <div class="shape4 d-none d-xxl-block"><img src="{{ asset('assets/images/shape/ctaShape1_4.png') }}"
                        alt="shape">
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