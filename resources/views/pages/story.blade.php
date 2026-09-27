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
            'name' => 'Arka',
            'photo' => 'member-1.jpg',
            'quote' =>
                'Building an app was not only about making features work. This project taught me how much thought has to go into keeping people safe when they actually use it.',
            'tags' => ['development', 'safety'],
        ],
        [
            'name' => 'Aiden',
            'photo' => 'member-2.jpg',
            'quote' =>
                'We finished what we started. I Need Help! taught me that empathy makes people comfortable asking for help, while giving others a chance to feel needed.',
            'tags' => ['collaboration', 'empathy'],
        ],
        [
            'name' => 'Aidan',
            'photo' => 'member-3.jpg',
            'quote' =>
                'I learned that ideas become stronger when they go through different perspectives and when we learn to rely on each other.',
            'tags' => ['teamwork', 'relying on each other'],
        ],
        [
            'name' => 'Ajib',
            'photo' => 'member-4.jpg',
            'quote' =>
                'Working on this app taught me how to turn real-life problems into practical solutions and improve ideas through feedback.',
            'tags' => ['real-life problems', 'feedback'],
        ],
        [
            'name' => 'Raphael',
            'photo' => 'member-5.jpg',
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
            <span class="st-eyebrow">Our Journey</span>
            <h1 class="st-h1 wow fadeInUp" data-wow-delay=".1s" style="margin-top:14px;">
                It started with
                <span class="accent">a simple problem.</span>
            </h1>
            <p class="st-lead st-measure wow fadeInUp" data-wow-delay=".2s" style="margin:18px auto 0;">
                The idea for I Need Help! didn&rsquo;t start with an app.
            </p>

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

            <div style="margin-top:36px;">
                <p class="st-bubble">&ldquo;Could technology make that connection easier?&rdquo;</p>
            </div>

            <figure class="st-polaroid" style="max-width:560px;transform:rotate(-1.8deg);">
                <img src="{{ asset('assets/images/inh/story/nearby.jpg') }}" alt="A student receiving help at school">
                <figcaption>help, once someone knew to look</figcaption>
            </figure>
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
        <div class="st-wrap">
            <div class="st-head st-center">
                <span class="st-eyebrow">What we learned</span>
                <h2 class="st-h2">Five of us. Five different lessons.</h2>
            </div>

            <div class="st-members">
                @foreach ($members as $member)
                    <article class="st-member">
                        <img src="{{ asset('assets/images/inh/story/' . $member['photo']) }}"
                            alt="{{ $member['name'] }}">
                        <div>
                            <div class="st-member__name">{{ $member['name'] }}</div>
                            <p class="st-member__quote">&ldquo;{{ $member['quote'] }}&rdquo;</p>
                            <ul class="st-member__tags">
                                @foreach ($member['tags'] as $tag)
                                    <li>{{ $tag }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="st-strip">
                @foreach (['strip-1.jpg', 'strip-2.jpg', 'strip-3.jpg', 'strip-4.jpg', 'strip-5.jpg'] as $shot)
                    <figure>
                        <img src="{{ asset('assets/images/inh/story/' . $shot) }}" alt="Behind the scenes">
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ 06. Closing ============ --}}
    <section class="st-section st-band st-center" id="closing">
        <div class="st-wrap">
            <h2 class="st-h2 st-measure" style="margin:0 auto;">
                Asking shouldn&rsquo;t feel awkward.<br>Helping shouldn&rsquo;t feel like a hassle.
            </h2>

            <div class="st-quote" style="margin-top:36px;">
                <p>We wanted I Need Help! to make everyday help feel normal and immediate &mdash;
                    something people could turn to when a small problem came up.</p>
            </div>

            <figure class="st-polaroid" style="max-width:620px;transform:rotate(1.2deg);">
                <img src="{{ asset('assets/images/inh/story/hero-team.jpg') }}"
                    alt="The five students behind I Need Help!">
                <figcaption>the five of us, still helping each other</figcaption>
            </figure>

            <p class="st-signoff">Help Better, Stronger Together <i class="fa-regular fa-heart"
                    style="color:#ff8fa3;"></i></p>

            <div class="st-btn-row">
                <a href="{{ url('/') }}" class="st-btn st-btn--ghost">
                    <i class="fa-solid fa-arrow-left-long"></i> Back to Home
                </a>
                <a href="{{ url('/#download') }}" class="st-btn st-btn--primary">Download App</a>
            </div>
        </div>
    </section>

@endsection
