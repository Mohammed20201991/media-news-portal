@extends('layouts.app')

@section('title',$category->name)

@section('content')

<div class="row">

<div class="col-lg-8">

<h2 class="mb-4">

{{ $category->name }}

</h2>

<div class="row">

@forelse($posts as $post)

@include('partials.news-card')

@empty

<div class="alert alert-warning">

No news found.

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