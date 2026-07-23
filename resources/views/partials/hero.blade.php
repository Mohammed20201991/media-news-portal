@if($featured->count())

<div class="row mb-4">

    <!-- Main Featured -->

    <div class="col-lg-8">

        <div class="card border-0 shadow">

            <img
                src="{{ Voyager::image($featured[0]->image) }}"
                class="card-img-top hero-image">

            <div class="card-body">

                <span class="badge bg-danger">

                    Featured

                </span>

                <h2 class="mt-3">

                    {{ $featured[0]->title }}

                </h2>

                <p>

                    {{ $featured[0]->excerpt }}

                </p>

                <a
                    href="{{ route('news.show',$featured[0]->slug) }}"
                    class="btn btn-primary">

                    Read More

                </a>

            </div>

        </div>

    </div>

    <!-- Side Featured -->

    <div class="col-lg-4">

        @foreach($featured->skip(1) as $post)

            <div class="card mb-3">

                <img
                    src="{{ Voyager::image($post->image) }}"
                    class="card-img-top">

                <div class="card-body">

                    <h6>

                        {{ $post->title }}

                    </h6>

                    <a
                        href="{{ route('news.show',$post->slug) }}">

                        Read More

                    </a>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endif