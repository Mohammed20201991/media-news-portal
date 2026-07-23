@extends('layouts.app')

@section('title','Home')

@section('content')

@include('partials.breaking-news')

@include('partials.hero')

<div class="row">

    <div class="col-lg-8">

        <h3 class="mb-4">

            Latest News

        </h3>

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