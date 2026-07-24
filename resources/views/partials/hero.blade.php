@if($featured->count())

<div id="heroSlider"
     class="carousel slide mb-5"
     data-bs-ride="carousel">

<div class="carousel-inner">

@foreach($featured as $post)

<div class="carousel-item {{$loop->first?'active':''}}">

@if($post->image)

<img class="d-block w-100 hero-image"

src="{{ Voyager::image($post->image) }}">

@endif

<div class="carousel-caption">

<span class="badge bg-danger">

Featured

</span>

<h2>

<a href="{{ route('news.show',$post->slug) }}">

{{ $post->title }}

</a>

</h2>

<p>

{{ Str::limit(strip_tags($post->excerpt),150) }}

</p>

</div>

</div>

@endforeach

</div>

<button class="carousel-control-prev"

type="button"

data-bs-target="#heroSlider"

data-bs-slide="prev">

<span class="carousel-control-prev-icon"></span>

</button>

<button class="carousel-control-next"

type="button"

data-bs-target="#heroSlider"

data-bs-slide="next">

<span class="carousel-control-next-icon"></span>

</button>

</div>

@endif