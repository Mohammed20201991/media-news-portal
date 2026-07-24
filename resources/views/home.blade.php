@extends('layouts.app')

@section('title','Home')

@section('content')

@include('partials.hero')

<div class="row mt-5">

<div class="col-lg-8">

<h2 class="section-title">

Latest News

</h2>

<div class="row">

@foreach($latest as $post)

<div class="col-md-6 mb-4">

@include('partials.news-card')

</div>

@endforeach

</div>

{{ $latest->links() }}

</div>

<div class="col-lg-4">

@include('partials.sidebar')

</div>

</div>

<hr>

@foreach($sections as $category)

@include('partials.category-block')

@endforeach

@endsection