@extends('layouts.app', [
    'header' => 'story',
    'footer' => 'story',
    'offcanvas' => 'story',
    'bodyClass' => 'inh inh-story',
    'active' => 'home',
])

@section('title', 'I Need Help! — Help is closer than you think')

@php
    // YouTube ID only — the player is embedded inline, no redirect to youtube.com.
    $storyVideoId = '8qUAQddMyQM';
@endphp

@section('content')

    {{-- ============ 02. Hero ============ --}}
    <section class="st-hero">
        <div class="st-wrap">
            <div class="st-hero__grid">
                <div>
                    <span class="st-eyebrow">A stronger community starts with you</span>

                    <h1 class="st-h1 wow fadeInUp" data-wow-delay=".1s">
                        Help is closer
                        <span class="accent">than you think.</span>
                    </h1>

                    <div class="st-hero__badge wow fadeInUp" data-wow-delay=".2s">
                        <span class="st-chip">The Development Story</span>
                    </div>

                    <p class="st-lead st-measure wow fadeInUp" data-wow-delay=".3s">
                        A story about a group of students who wanted to make everyday help easier &mdash;
                        easier to ask for, easier to find, and easier to give.
                    </p>

                    <div class="st-btn-row wow fadeInUp" data-wow-delay=".4s">
                        <a href="{{ url('/our-journey') }}" class="st-btn st-btn--primary">
                            See Our Story <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                        <a href="#download" class="st-btn st-btn--ghost">Download App</a>
                    </div>
                </div>

                <div class="st-hero__art wow fadeInRight" data-wow-delay=".3s">
                    <div class="st-phones">
                        <img src="{{ asset('assets/images/inh/app/screen-home.png') }}"
                            alt="I Need Help! home screen">
                        <img src="{{ asset('assets/images/inh/app/screen-missions.png') }}"
                            alt="I Need Help! missions screen">
                    </div>
                    <div class="st-hero__note">Real help. Real people. Right nearby.</div>
                    <img class="st-hero__mascot st-float" src="{{ asset('assets/images/inh/mascot/emo-happy.png') }}"
                        alt="">
                </div>
            </div>

            <div class="st-values">
                <div class="st-value">
                    <div class="st-value__icon"><i class="fa-solid fa-user-group"></i></div>
                    <div>
                        <div class="st-value__title">Real People</div>
                        <p class="st-value__text">Neighbours helping each other.</p>
                    </div>
                </div>
                <div class="st-value">
                    <div class="st-value__icon"><i class="fa-solid fa-bolt"></i></div>
                    <div>
                        <div class="st-value__title">Real-Time</div>
                        <p class="st-value__text">When it actually matters.</p>
                    </div>
                </div>
                <div class="st-value">
                    <div class="st-value__icon"><i class="fa-solid fa-shield"></i></div>
                    <div>
                        <div class="st-value__title">Safer Communities</div>
                        <p class="st-value__text">Built with trust in mind.</p>
                    </div>
                </div>
                <div class="st-value">
                    <div class="st-value__icon"><i class="fa-solid fa-heart"></i></div>
                    <div>
                        <div class="st-value__title">Real Impact</div>
                        <p class="st-value__text">Small actions. A stronger tomorrow.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 03. How it all started ============ --}}
    <section class="st-section st-section--tight st-center" id="the-story">
        <div class="st-wrap">
            <div class="st-head">
                <span class="st-eyebrow">How it all started</span>
                <h2 class="st-h2">Watch the development story.</h2>
                <p class="st-lead st-measure">
                    Five minutes on why we built I Need Help! &mdash; the problem, the prototype, and what we changed
                    after testing it.
                </p>
            </div>

            @include('partials.logo-nav')

            @if ($storyVideoId)
                <div class="st-video"
                    data-embed="https://www.youtube-nocookie.com/embed/{{ $storyVideoId }}?autoplay=1&amp;rel=0">
                    <img src="{{ asset('assets/images/inh/story/story-video-thumb.jpg') }}"
                        alt="The I Need Help! development story" loading="lazy">
                    <button type="button" class="st-video__play" aria-label="Play the development story video">
                        <span><i class="fa-solid fa-play"></i></span>
                    </button>
                </div>
            @else
                <div class="st-btn-row">
                    <span class="st-btn st-btn--ghost st-btn--disabled">
                        <i class="fa-solid fa-play"></i> Video Coming Soon
                    </span>
                </div>
            @endif
        </div>
    </section>

    {{-- ============ 04. Chapter 01 — IDEA ============ --}}
    <section class="st-section st-band" id="chapter-1">
        <div class="st-wrap">
            <div class="st-split st-split--wide-left">
                <div>
                    <span class="st-chapter__label"><i class="fa-solid fa-lightbulb"></i> Chapter 01 &mdash; Idea</span>
                    <h2 class="st-h2" style="margin-top:18px;">We noticed something&hellip;</h2>
                    <p class="st-lead" style="margin-top:16px;">
                        People often face small, everyday problems &mdash; a heavy box, a scraped knee, a phone at 2%
                        &mdash; but have no fast way to find someone nearby who could help.
                    </p>

                    <div class="st-pair" style="justify-content:flex-start;">
                        <div class="st-pair__person">
                            <img src="{{ asset('assets/images/inh/mascot/emo-sad.png') }}" alt="">
                            <span>Seeker</span>
                        </div>
                        <i class="fa-solid fa-heart st-pair__heart"></i>
                        <div class="st-pair__person">
                            <img src="{{ asset('assets/images/inh/mascot/emo-happy2.png') }}" alt="">
                            <span>Helper</span>
                        </div>
                    </div>
                </div>

                <div class="st-idea-cards">
                    <div class="st-card">
                        <div class="st-card__title">Seeker</div>
                        <ul class="st-check">
                            <li><i class="fa-solid fa-check"></i> Need help</li>
                            <li><i class="fa-solid fa-check"></i> Category</li>
                            <li><i class="fa-solid fa-check"></i> Location</li>
                            <li><i class="fa-solid fa-check"></i> Nearby helper</li>
                        </ul>
                    </div>
                    <div class="st-card">
                        <div class="st-card__title">Map</div>
                        <div class="st-map"><span><i class="fa-solid fa-location-dot"></i>1 KM AROUND YOU</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 05. Chapter 02 — BUILD ============ --}}
    <section class="st-section" id="chapter-2">
        <div class="st-wrap">
            <div class="st-head st-center">
                <span class="st-chapter__label"><i class="fa-solid fa-screwdriver-wrench"></i> Chapter 02 &mdash;
                    Build</span>
                <h2 class="st-h2">What makes it different?</h2>
                <p class="st-lead">Real-time. Local. Human-centered.</p>
            </div>

            <div class="st-features">
                <div class="st-feature">
                    <div class="st-feature__icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="st-feature__title">1 km Radius</div>
                    <p class="st-feature__text">A request only reaches people close enough to act on it right now.</p>
                </div>
                <div class="st-feature">
                    <div class="st-feature__icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="st-feature__title">Quick Categories</div>
                    <p class="st-feature__text">Pick what you need in one tap instead of writing a post.</p>
                </div>
                <div class="st-feature">
                    <div class="st-feature__icon"><i class="fa-solid fa-city"></i></div>
                    <div class="st-feature__title">Public Spaces</div>
                    <p class="st-feature__text">Built for schools, parks and shared spaces &mdash; where people already are.</p>
                </div>
                <div class="st-feature">
                    <div class="st-feature__icon"><i class="fa-solid fa-star"></i></div>
                    <div class="st-feature__title">Ratings &amp; Reporting</div>
                    <p class="st-feature__text">Every interaction can be rated, and anything wrong can be reported.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 06. Chapter 03 — TEST ============ --}}
    <section class="st-section st-band" id="chapter-3">
        <div class="st-wrap">
            <div class="st-head st-center">
                <span class="st-chapter__label"><i class="fa-solid fa-flask"></i> Chapter 03 &mdash; Test</span>
                <h2 class="st-h2">We tried the prototype.</h2>
                <p class="st-lead">Three real environments, one question: would people actually use it?</p>
            </div>

            <div class="st-envs">
                <figure class="st-env">
                    <img src="{{ asset('assets/images/inh/story/env-apartment.jpg') }}" alt="Apartment testing site">
                    <span>Apartment</span>
                </figure>
                <figure class="st-env">
                    <img src="{{ asset('assets/images/inh/story/env-park.jpg') }}" alt="Public park testing site">
                    <span>Public Park</span>
                </figure>
                <figure class="st-env">
                    <img src="{{ asset('assets/images/inh/story/env-school.jpg') }}" alt="School testing site">
                    <span>School</span>
                </figure>
            </div>

            <div class="st-stats">
                <div class="st-stat">
                    <div class="st-stat__value">30</div>
                    <div class="st-stat__label">Participants</div>
                </div>
                <div class="st-stat">
                    <div class="st-stat__value">3</div>
                    <div class="st-stat__label">Environments</div>
                </div>
                <div class="st-stat">
                    <div class="st-stat__value">+29.5%</div>
                    <div class="st-stat__label">Daily active time</div>
                </div>
                <div class="st-stat">
                    <div class="st-stat__value">73.1%</div>
                    <div class="st-stat__label">Mission / streak completion</div>
                </div>
                <div class="st-stat">
                    <div class="st-stat__value">4.20 &rarr; 5.40</div>
                    <div class="st-stat__label">Average requests</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 07. Chapter 04 — IMPROVE ============ --}}
    <section class="st-section" id="chapter-4">
        <div class="st-wrap">
            <div class="st-head st-center">
                <span class="st-chapter__label"><i class="fa-solid fa-arrow-trend-up"></i> Chapter 04 &mdash;
                    Improve</span>
                <h2 class="st-h2">Building from what we learned.</h2>
            </div>

            <div class="st-split">
                <div class="st-phones">
                    <img src="{{ asset('assets/images/inh/app/screen-home.png') }}"
                        alt="I Need Help! seeker home screen">
                    <img src="{{ asset('assets/images/inh/app/screen-categories.png') }}"
                        alt="I Need Help! quick-help categories">
                </div>

                <div>
                    <div class="st-improve">
                        <div class="st-improve__item">
                            <span class="st-improve__num">01</span>
                            <div>
                                <div class="st-improve__title">Notification reliability</div>
                                <p class="st-improve__text">Requests reach nearby helpers even when the app is closed.</p>
                            </div>
                        </div>
                        <div class="st-improve__item">
                            <span class="st-improve__num">02</span>
                            <div>
                                <div class="st-improve__title">No-helper fallback</div>
                                <p class="st-improve__text">When nobody is around, the request widens instead of going silent.</p>
                            </div>
                        </div>
                        <div class="st-improve__item">
                            <span class="st-improve__num">03</span>
                            <div>
                                <div class="st-improve__title">Public-space safety</div>
                                <p class="st-improve__text">Meeting points stay public, and reporting is one tap away.</p>
                            </div>
                        </div>
                    </div>

                    <div class="st-outcomes">
                        <span class="st-chip st-chip--blue"><i class="fa-solid fa-flag"></i> Reporting</span>
                        <span class="st-chip"><i class="fa-solid fa-bolt"></i> Quick-help categories</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 08. Chapter 05 — THE FUTURE ============ --}}
    <section class="st-section st-band" id="download">
        <div class="st-wrap">
            <div class="st-head st-center">
                <span class="st-chapter__label"><i class="fa-solid fa-rocket"></i> Chapter 05 &mdash; The Future</span>
                <h2 class="st-h2">Where do we go from here?</h2>
            </div>

            <div class="st-quote">
                <div class="st-quote__mark">&ldquo;</div>
                <p>Maybe help is closer than we think.</p>
            </div>

            <div class="st-cta">
                <div>
                    <h3>Want to know our story?</h3>
                    <p>Meet the five students behind I Need Help!</p>
                </div>
                <div class="st-btn-row">
                    <a href="{{ url('/our-journey') }}" class="st-btn st-btn--primary">
                        Our Journey <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <a href="#download" class="st-btn st-btn--ghost">Download App</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.st-video[data-embed]').forEach(function(box) {
            box.querySelector('.st-video__play').addEventListener('click', function() {
                box.innerHTML = '<iframe src="' + box.dataset.embed +
                    '" title="The I Need Help! development story" frameborder="0" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen></iframe>';
            });
        });
    </script>
@endpush
