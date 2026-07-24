@if($featured->count())

<div id="heroCarousel"
     class="carousel slide mb-5"
     data-bs-ride="carousel">

    <div class="carousel-indicators">

        @foreach($featured as $index=>$post)

            <button
                data-bs-target="#heroCarousel"
                data-bs-slide-to="{{ $index }}"
                class="{{ $index==0?'active':'' }}">
            </button>

        @endforeach

    </div>

    <div class="carousel-inner">

        @foreach($featured as $index=>$post)

        <div class="carousel-item {{ $index==0?'active':'' }}">

            <img
                src="{{ Voyager::image($post->image) }}"
                class="d-block w-100 hero-image">

            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">

                <h2>

                    {{ $post->title }}

                </h2>

                <p>

                    {{ $post->excerpt }}

                </p>

                <a
                    href="{{ route('news.show',$post->slug) }}"
                    class="btn btn-danger">

                    Read More

                </a>

            </div>

        </div>

        @endforeach

    </div>

    <button class="carousel-control-prev"
            data-bs-target="#heroCarousel"
            data-bs-slide="prev">

        <span class="carousel-control-prev-icon"></span>

    </button>

    <button class="carousel-control-next"
            data-bs-target="#heroCarousel"
            data-bs-slide="next">

        <span class="carousel-control-next-icon"></span>

    </button>

</div>

@endif