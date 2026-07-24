@if($breakingPosts->count())

<div class="breaking-news">

<div class="container">

<strong>Breaking:</strong>

<marquee>

@foreach($breakingPosts as $post)

{{ $post->title }}

•

@endforeach

</marquee>

</div>

</div>

@endif