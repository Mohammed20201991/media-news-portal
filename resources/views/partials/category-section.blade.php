@if($category->posts->count())

<div class="mb-5">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>

            {{ $category->name }}

        </h3>

        <a
            href="{{ route('category.show',$category->slug) }}"
            class="btn btn-sm btn-outline-primary">

            View All

        </a>

    </div>

    <div class="row">

        @foreach($category->posts as $post)

            @include('partials.news-card')

        @endforeach

    </div>

</div>

@endif