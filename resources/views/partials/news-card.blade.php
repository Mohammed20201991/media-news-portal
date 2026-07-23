<div class="col-lg-4 col-md-6 mb-4">

<div class="card h-100">

<img
class="card-img-top"
src="{{ Voyager::image($post->image) }}">

<div class="card-body">

<h5>

{{ $post->title }}

</h5>

<p>

{{ Str::limit(strip_tags($post->excerpt),120) }}

</p>

<a
class="btn btn-outline-primary"
href="{{ route('news.show',$post->slug) }}">

Read More

</a>

</div>

</div>

</div>