@extends('layouts.app')

@section('content')

@include('partials.hero')

<h3 class="mb-4">

Latest News

</h3>

<div class="row">

@foreach($posts as $post)

@include('partials.news-card')

@endforeach

</div>

{{ $posts->links() }}

@endsection