<div class="card news-card h-100 border-0 shadow-sm">

    @if($post->image)

        <img
            src="{{ Voyager::image($post->image) }}"
            class="card-img-top"
            alt="{{ $post->title }}">

    @endif

    <div class="card-body">

        @if($post->category)

            <span class="badge bg-danger mb-2">

                {{ $post->category->name }}

            </span>

        @endif

        <h5 class="fw-bold">

            <a
                href="{{ route('news.show',$post->slug) }}"
                class="text-dark text-decoration-none">

                {{ $post->title }}

            </a>

        </h5>

        <p class="text-muted">

            {{ Str::limit(strip_tags($post->excerpt ?? $post->body),110) }}

        </p>

    </div>

    <div class="card-footer bg-white border-0">

        <small class="text-muted">

            {{ $post->created_at->format('d M Y') }}

        </small>

        <a
            href="{{ route('news.show',$post->slug) }}"
            class="btn btn-danger btn-sm float-end">

            Read More

        </a>

    </div>

</div>