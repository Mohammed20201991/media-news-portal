@extends('layouts.app')

@section('title','Home')

@section('content')

@include('partials.breaking-news')

@include('partials.carousel')

<div class="row">

<div class="col-lg-8">

    @foreach($sections as $category)

        @include('partials.category-section',
            ['category'=>$category])

    @endforeach

    <h2 class="mt-5 mb-4">

        Latest News

    </h2>

    <div class="row">

        @foreach($posts as $post)

            @include('partials.news-card')

        @endforeach

    </div>

    {{ $posts->links() }}

</div>

<div class="col-lg-4">

    @include('partials.sidebar')

</div>

</div>

@endsection