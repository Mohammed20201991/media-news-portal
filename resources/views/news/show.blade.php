@extends('layouts.app')

@section('title', $post->title)

@section('content')

@php
    $readingTime = ceil(str_word_count(strip_tags($post->body)) / 200);
@endphp

<div class="row">

    <!-- ===================== -->
    <!-- Article -->
    <!-- ===================== -->

    <div class="col-lg-8">

        <!-- Breadcrumb -->

        <nav class="mb-3">

            <a href="{{ route('home') }}">Home</a>

            @if($post->category)

                /

                <a href="{{ route('category.show',$post->category->slug) }}">

                    {{ $post->category->name }}

                </a>

            @endif

        </nav>

        <!-- Category -->

        @if($post->category)

            <span class="badge bg-danger mb-2">

                {{ $post->category->name }}

            </span>

        @endif

        <!-- Title -->

        <h1 class="display-5 fw-bold mb-3">

            {{ $post->title }}

        </h1>

        <!-- Excerpt -->

        @if(!empty($post->excerpt))

            <p class="lead text-muted">

                {{ $post->excerpt }}

            </p>

        @endif

        <!-- Meta -->

        <div class="text-muted mb-4">

            <i class="bi bi-calendar3"></i>

            {{ $post->created_at->format('d M Y') }}

            &nbsp; | &nbsp;

            <i class="bi bi-clock"></i>

            {{ $readingTime }} min read

        </div>

        <!-- Featured Image -->

        @if($post->image)

            <img
                src="{{ Voyager::image($post->image) }}"
                class="img-fluid rounded shadow-sm mb-4"
                alt="{{ $post->title }}">

        @endif

        <!-- Body -->

        <div class="article-body">

            {!! $post->body !!}

        </div>

        <!-- Share -->

        <hr>

        <div class="my-4">

            <strong>Share:</strong>

            <a class="btn btn-sm btn-primary ms-2"
               target="_blank"
               href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}">

                <i class="bi bi-facebook"></i>

                Facebook

            </a>

            <a class="btn btn-sm btn-dark"
               target="_blank"
               href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}">

                <i class="bi bi-twitter-x"></i>

                X

            </a>

            <a class="btn btn-sm btn-info text-white"
               target="_blank"
               href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}">

                <i class="bi bi-linkedin"></i>

                LinkedIn

            </a>

        </div>

        <!-- Previous / Next -->

        <hr>

        <div class="row mb-5">

            <div class="col-6">

                @if($previous)

                    <small class="text-muted">

                        Previous Article

                    </small>

                    <br>

                    <a href="{{ route('news.show',$previous->slug) }}">

                        ← {{ $previous->title }}

                    </a>

                @endif

            </div>

            <div class="col-6 text-end">

                @if($next)

                    <small class="text-muted">

                        Next Article

                    </small>

                    <br>

                    <a href="{{ route('news.show',$next->slug) }}">

                        {{ $next->title }} →

                    </a>

                @endif

            </div>

        </div>

        <!-- Related -->

        @if($related->count())

            <h3 class="mb-4">

                Related Articles

            </h3>

            <div class="row">

                @foreach($related as $relatedPost)

                    <div class="col-md-6 mb-4">

                        @include('partials.news-card', [
                            'post' => $relatedPost
                        ])

                    </div>

                @endforeach

            </div>

        @endif

    </div>

    <!-- ===================== -->
    <!-- Sidebar -->
    <!-- ===================== -->

    <div class="col-lg-4">

        @include('partials.sidebar')

    </div>

</div>

@endsection