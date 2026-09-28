@php($active = $active ?? 'home')

<header class="st-header">
    <div class="st-wrap st-header__inner">
        <a href="{{ url('/') }}" class="st-header__logo">
            <img src="{{ asset('assets/images/inh/logo.svg') }}" alt="I Need Help">
        </a>

        <nav>
            <ul class="st-nav">
                <li><a href="{{ url('/') }}" class="{{ $active === 'home' ? 'is-active' : '' }}">Home</a></li>
                <li><a href="{{ url('/our-journey') }}" class="{{ $active === 'journey' ? 'is-active' : '' }}">Our Journey</a></li>
            </ul>
        </nav>

        <div class="st-header__right">
            <a href="#download" class="st-btn st-btn--primary">Download App</a>
            <button type="button" class="st-burger sidebar__toggle" aria-label="Open menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</header>
