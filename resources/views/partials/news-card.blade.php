<div class="col-lg-4 mb-4">

    <div class="card h-100 shadow-sm">

        @if($post->image)

            <img
                src="{{ Voyager::image($post->image) }}"
                class="card-img-top">

        @endif

        <div class="card-body">

            <h5>

                {{ $post->title }}

            </h5>

            <p>

                {{ Str::limit(strip_tags($post->excerpt),120) }}

            </p>

        </div>

        <div class="card-footer bg-white">

            <a
                href="{{ route('news.show',$post->slug) }}"
                class="btn btn-outline-primary">

                Read More

            </a>

        </div>

    </div>

</div>