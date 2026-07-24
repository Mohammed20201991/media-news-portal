<div class="card">

<div class="card-header">

Latest

</div>

<ul class="list-group list-group-flush">

@foreach($latestPosts as $post)

<li class="list-group-item">

<a href="{{ route('news.show',$post->slug) }}">

{{ $post->title }}

</a>

</li>

@endforeach

</ul>

</div>