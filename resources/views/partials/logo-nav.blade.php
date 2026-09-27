{{-- Interactive brand logo: each glyph jumps to its chapter. Hotspots are
     percentage boxes over the logo image — see .st-logonav__hit in inh-story.css --}}
<div class="st-logonav">
    <div class="st-logonav__stage">
        <img src="{{ asset('assets/images/inh/logo.svg') }}" alt="I Need Help!">

        <a class="st-logonav__hit st-logonav__hit--i" href="#chapter-1">
            <span class="st-logonav__label">Idea</span>
        </a>
        <a class="st-logonav__hit st-logonav__hit--need" href="#chapter-2">
            <span class="st-logonav__label">Built</span>
        </a>
        <a class="st-logonav__hit st-logonav__hit--help" href="#chapter-3">
            <span class="st-logonav__label">Test</span>
        </a>
        <a class="st-logonav__hit st-logonav__hit--bang" href="#chapter-4">
            <span class="st-logonav__label">Improve</span>
        </a>
        <a class="st-logonav__hit st-logonav__hit--dot" href="#download">
            <span class="st-logonav__label">Future</span>
        </a>
        <a class="st-logonav__hit st-logonav__hit--mascot" href="{{ url('/our-journey') }}">
            <span class="st-logonav__label">Journey</span>
        </a>
    </div>

    <p class="st-logonav__hint">Tap the logo to explore.</p>
</div>
