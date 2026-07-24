<div class="card news-card h-100">

@if($post->image)

<img class="card-img-top"

src="{{ Voyager::image($post->image) }}">

@endif

<div class="card-body">

@if($post->category)

<span class="badge bg-primary">

{{ $post->category->name }}

</span>

@endif

<h5>

<a href="{{ route('news.show',$post->slug) }}">

{{ $post->title }}

</a>

</h5>

<p>

{{ Str::limit(strip_tags($post->excerpt),100) }}

</p>

</div>

</div>