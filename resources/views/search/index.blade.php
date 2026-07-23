@extends('layouts.app')

@section('title','Search')

@section('content')

<div class="row">

<div class="col-lg-8">

<h2 class="mb-4">

Search Results

</h2>

@if($query)

<p>

Found

<strong>

{{ $posts->total() }}

</strong>

results for

<strong>

{{ $query }}

</strong>

</p>

@endif

<div class="row">

@forelse($posts as $post)

@include('partials.news-card')

@empty

<div class="alert alert-warning">

No articles found.

</div>

@endforelse

</div>

{{ $posts->links() }}

</div>

<div class="col-lg-4">

@include('partials.sidebar')

</div>

</div>

@endsection