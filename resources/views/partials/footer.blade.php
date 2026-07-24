<footer class="footer">

    <div class="container">

        <div class="row">

            <!-- About -->

            <div class="col-lg-4 mb-4">

                <h4>{{ setting('site.title') }}</h4>

                <p class="mt-3">

                    {{ setting('site.description') }}

                </p>

            </div>

            <!-- Quick Links -->

            <div class="col-lg-4 mb-4">

                <h5>Quick Links</h5>

                <ul class="list-unstyled">

                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('search') }}">Search</a>
                    </li>

                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#">Terms of Use</a>
                    </li>

                    <li>
                        <a href="#">Contact Us</a>
                    </li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="col-lg-4 mb-4">

                <h5>Contact</h5>

                <p>

                    <i class="bi bi-geo-alt-fill me-2"></i>

                    {{ setting('site.address') }}

                </p>

                <p>

                    <i class="bi bi-envelope-fill me-2"></i>

                    <a href="mailto:{{ setting('site.email') }}">

                        {{ setting('site.email') }}

                    </a>

                </p>

                <p>

                    <i class="bi bi-telephone-fill me-2"></i>

                    {{ setting('site.phone') }}

                </p>

                @include('partials.social')

            </div>

        </div>

        <hr>

        <div class="text-center">

            {{ setting('site.copyright') }}

        </div>

    </div>

</footer>