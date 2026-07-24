<div class="col-md-6 col-xl-4 mb-4">

<div class="card h-100 shadow-sm">

@if($post->image)

<img
src="{{ Voyager::image($post->image) }}"
class="card-img-top"
style="height:220px;object-fit:cover;">

@endif

<div class="card-body">

@if($post->category)

<span class="badge bg-primary mb-2">

{{ $post->category->name }}

</span>

@endif

<h5>

{{ $post->title }}

</h5>

<p>

{{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt ?? $post->body),120) }}

</p>

</div>

<div class="card-footer bg-white">

<small class="text-muted">

{{ $post->created_at->format('d M Y') }}

</small>

<a
href="{{ route('news.show',$post->slug) }}"
class="btn btn-sm btn-danger float-end">

Read

</a>

</div>

</div>

</div>