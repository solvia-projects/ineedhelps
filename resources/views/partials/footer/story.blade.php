<footer class="st-footer">
    <div class="st-wrap">
        <div class="st-footer__grid">
            <div>
                <div class="st-footer__logo">
                    <img src="{{ asset('assets/images/inh/logo.svg') }}" alt="I Need Help">
                </div>
                <p class="st-body">Making everyday help easier to ask for, easier to find, and easier to give.</p>
            </div>

            <div>
                <h4>Explore</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/our-journey') }}">Our Journey</a></li>
                </ul>
            </div>

            <div>
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="mailto:ineedhelp@gmail.com"><i class="fa-regular fa-envelope"></i> ineedhelp@gmail.com</a></li>
                    <li><a href="https://instagram.com/ineedhelp" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i> @ineedhelp</a></li>
                    <li><a href="tel:+6281234567890"><i class="fa-solid fa-phone"></i> +62 812 3456 7890</a></li>
                </ul>
            </div>
        </div>

        <div class="st-footer__bottom">
            <span>&copy; {{ date('Y') }} I Need Help! &mdash; Help Better, Stronger Together.</span>
            <span>Built by students, for our community.</span>
        </div>
    </div>
</footer>
