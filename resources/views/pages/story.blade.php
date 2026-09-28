@extends('layouts.app', [
    'header' => 'story',
    'footer' => 'story',
    'offcanvas' => 'story',
    'bodyClass' => 'inh inh-story',
    'active' => 'journey',
])

@section('title', 'Our Journey — I Need Help!')

@php
    $members = [
        [
            'name' => 'Ajib',
            'photo' => 'member-5.jpg',
            'quote' =>
                'Building an app was not only about making features work. This project taught me how much thought has to go into keeping people safe when they actually use it.',
            'tags' => ['development', 'safety'],
        ],
        [
            'name' => 'Rafael',
            'photo' => 'member-2.jpg',
            'quote' =>
                'We finished what we started. I Need Help! taught me that empathy makes people comfortable asking for help, while giving others a chance to feel needed.',
            'tags' => ['collaboration', 'empathy'],
        ],
        [
            'name' => 'Aiden',
            'photo' => 'member-3.jpg',
            'quote' =>
                'I learned that ideas become stronger when they go through different perspectives and when we learn to rely on each other.',
            'tags' => ['teamwork', 'relying on each other'],
        ],
        [
            'name' => 'Aidan',
            'photo' => 'member-4.jpg',
            'quote' =>
                'Working on this app taught me how to turn real-life problems into practical solutions and improve ideas through feedback.',
            'tags' => ['real-life problems', 'feedback'],
        ],
        [
            'name' => 'Arka',
            'photo' => 'member-1.jpg',
            'quote' =>
                'I learned how simple acts of help can create stronger connections and make communities more empathetic.',
            'tags' => ['community', 'helping others'],
        ],
    ];
@endphp

@section('content')

    {{-- ============ 01. Story hero ============ --}}
    <section class="st-story-hero">
        <div class="st-wrap">
            <span class="st-h1">Our Journey</span>
            <h1 class="wow fadeInUp" data-wow-delay=".1s" style="margin-top:14px;">
                &ldquo;It started with
                <span class="accent">a simple problem.&rdquo;</span>
            </h1>
            <figure class="st-polaroid wow fadeInUp" data-wow-delay=".3s">
                <img src="{{ asset('assets/images/inh/story/journey-team.jpg') }}"
                    alt="The five students behind I Need Help!">
                <figcaption>a story by our team</figcaption>
            </figure>
        </div>
    </section>

    {{-- ============ 02. The beginning ============ --}}
    <section class="st-section st-band" id="beginning">
        <div class="st-wrap">
            <div class="st-split">
                <div>
                    <h2 class="st-h2">It started<br>after school.</h2>
                    <p class="st-lead" style="margin-top:18px;">
                        One of us sprained an ankle on the court after everyone had already left.
                    </p>
                    <p class="st-lead" style="margin-top:14px;">
                        The nurse&rsquo;s office was locked, so we ended up texting almost everyone we knew
                        before someone who was still nearby came back to help.
                    </p>
                </div>

                <figure class="st-polaroid" style="margin-top:0;transform:rotate(1.6deg);">
                    <img src="{{ asset('assets/images/inh/story/beginning.jpg') }}"
                        alt="Students playing basketball after school">
                    <figcaption>after school, on the court</figcaption>
                </figure>
            </div>
        </div>
    </section>

    {{-- ============ 03. The question ============ --}}
    <section class="st-section st-center" id="question">
        <div class="st-wrap">
            <h2 class="st-h2 st-measure" style="margin:0 auto;">
                What stayed with us was how strange it felt: the help was close by,
                but we had no way to find it quickly.
            </h2>
<div class="st-arrow-down"><i class="fa-solid fa-arrow-down"></i></div>
            <div style="margin-top:36px;">
                <p class="st-bubble">&ldquo;Could technology make that connection easier?&rdquo;</p>
            </div>
        </div>
    </section>

    {{-- ============ 04. What surprised us ============ --}}
    <section class="st-section st-band" id="surprised">
        <div class="st-wrap">
            <div class="st-head st-center">
                <span class="st-eyebrow">What surprised us</span>
                <h2 class="st-h2">People didn&rsquo;t always ask for help &mdash;<br>even when they needed it.</h2>
            </div>

            <div class="st-reasons">
                <div class="st-reason">
                    <img src="{{ asset('assets/images/inh/mascot/emo-shock.png') }}" alt="">
                    <span>It felt awkward</span>
                </div>
                <div class="st-reason">
                    <img src="{{ asset('assets/images/inh/mascot/emo-sad.png') }}" alt="">
                    <span>They didn&rsquo;t know who to ask</span>
                </div>
                <div class="st-reason">
                    <img src="{{ asset('assets/images/inh/mascot/emo-sleep.png') }}" alt="">
                    <span>They didn&rsquo;t want to bother a stranger</span>
                </div>
            </div>

            <div class="st-arrow-down"><i class="fa-solid fa-arrow-down"></i></div>

            <p class="st-statement">
                So we added <strong>quick-help categories</strong> &mdash; to make asking feel
                simpler and less awkward.
            </p>
        </div>
    </section>

    {{-- ============ 05. What we learned ============ --}}
    <section class="st-section" id="learned">
        <div class="st-wrap" style="max-width: 1400px;">
            <div class="st-head st-center">
                <span class="st-eyebrow" style="letter-spacing: 0.2em; text-transform: uppercase; font-size: 12px; font-weight: 800; color: #6b7280;">What we learned</span>
                <h2 class="st-h2" style="color: #1e3a8a;">Different perspectives.<br>A stronger INeedHelp!.</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-5 g-4 mt-4">
                @foreach ($members as $member)
                    <div class="col">
                        <article style="background: #fff; border-radius: 24px; padding: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; display: flex; flex-direction: column;">
                            <img src="{{ asset('assets/images/inh/story/' . $member['photo']) }}"
                                alt="{{ $member['name'] }}" style="width: 100%; border-radius: 16px; margin-bottom: 20px; object-fit: contain;">
                            <div style="flex-grow: 1;">
                                <div style="color: #1d4ed8; font-size: 28px; font-weight: 700; font-family: 'Caveat', 'Comic Sans MS', cursive; margin-bottom: 12px;">{{ $member['name'] }}</div>
                                <p style="font-size: 14px; line-height: 1.6; color: #4b5563; margin: 0;">{{ $member['quote'] }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center; margin-top: 50px; font-size: 28px; font-weight: 700; color: #1e3a8a; font-family: 'Caveat', 'Comic Sans MS', cursive;">
                <span style="color: #fbbf24; margin-right: 10px;">//</span> Help Better, Stronger Together <i class="fa-regular fa-heart"></i>
            </div>
        </div>
    </section>

    {{-- ============ 06. Closing ============ --}}
    <section class="st-section st-band st-center" id="closing">
        <div class="st-wrap">
            <h2 class="st-h2 st-measure" style="margin:0 auto;">
                Asking shouldn&rsquo;t feel awkward.<br>Helping shouldn&rsquo;t feel like a hassle.
            </h2>

            <div class="st-eyebrow" style="margin-top:36px;">
                <p>We wanted I Need Help! to make everyday help feel normal and immediate &mdash;
                    something people could turn to when a small problem came up.</p>
            </div>

            <figure class="st-polaroid" style="max-width:620px;transform:rotate(1.2deg);">
                <img src="{{ asset('assets/images/inh/story/hero-team.jpg') }}"
                    alt="The five students behind I Need Help!">
                <figcaption>Help Better, Stronger Together <i class="fa-regular fa-heart"
                    style="color:#ff8fa3;"></i></figcaption>
            </figure>
            <div class="st-btn-row">
                <a href="{{ url('/') }}" class="st-btn st-btn--ghost">
                    <i class="fa-solid fa-arrow-left-long"></i> Back to Home
                </a>
                <a href="{{ url('/#download') }}" class="st-btn st-btn--primary">Download App</a>
            </div>
        </div>
    </section>

@endsection
