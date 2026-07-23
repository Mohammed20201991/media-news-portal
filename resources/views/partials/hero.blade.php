@if($featured->count())

<div class="card mb-4">

<img class="card-img-top"
src="{{ Voyager::image($featured->first()->image) }}">

<div class="card-body">

<h2>

{{ $featured->first()->title }}

</h2>

<p>

{{ $featured->first()->excerpt }}

</p>

<a class="btn btn-primary"
href="{{ route('news.show',$featured->first()->slug) }}">

Read More

</a>

</div>

</div>

@endif