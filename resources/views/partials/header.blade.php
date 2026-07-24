<header class="site-header">

    <div class="container">

        <div class="row align-items-center">

            <!-- Logo -->

            <div class="col-lg-4 col-md-5">

                <a href="{{ url('/') }}"
                   class="text-decoration-none d-flex align-items-center">

                    @if(setting('site.logo'))

                        <img
                            src="{{ Voyager::image(setting('site.logo')) }}"
                            alt="{{ setting('site.title') }}"
                            class="site-logo me-3">

                    @endif

                    <div>

                        <h2 class="site-title mb-0">

                            {{ setting('site.title') }}

                        </h2>

                        <small class="site-subtitle">

                            Digital News & Media

                        </small>

                    </div>

                </a>

            </div>

            <!-- Advertisement -->

            <div class="col-lg-8 col-md-7 text-end">

                <div class="header-ad">

                    Advertisement 728 × 90

                </div>

            </div>

        </div>

    </div>

</header>