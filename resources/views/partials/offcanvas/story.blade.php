<!-- Mobile drawer (opened by .sidebar__toggle, closed by main.js) -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/inh/logo.svg') }}" alt="I Need Help">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button><i class="fas fa-times"></i></button>
                    </div>
                </div>

                <ul class="st-nav" style="flex-direction:column;align-items:flex-start;gap:18px;margin-bottom:34px;">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/our-journey') }}">Our Journey</a></li>
                    <li><a href="{{ url('/#the-story') }}">The Story</a></li>
                </ul>

                <div class="offcanvas__contact">
                    <h4>Contact Us</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15"><i class="fal fa-envelope"></i></div>
                            <div class="offcanvas__contact-text"><a href="mailto:ineedhelp@gmail.com">ineedhelp@gmail.com</a></div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15"><i class="fab fa-instagram"></i></div>
                            <div class="offcanvas__contact-text"><a href="https://instagram.com/ineedhelp" target="_blank" rel="noopener">@ineedhelp</a></div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15"><i class="far fa-phone"></i></div>
                            <div class="offcanvas__contact-text"><a href="tel:+6281234567890">+62 812 3456 7890</a></div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="#download" class="st-btn st-btn--primary">Download App</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
