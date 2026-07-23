@extends('layouts.app')

@section('content')

<h1>Latest News</h1>

@foreach($posts as $post)

<div>

    <h2>{{ $post->title }}</h2>

    <p>{{ Str::limit(strip_tags($post->body),150) }}</p>

</div>

@endforeach

{{ $posts->links() }}

@endsection