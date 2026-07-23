@extends('layouts.app')

@section('title', $post->title)

@section('content')

<div class="row">

    <div class="col-lg-8">

        @if($post->image)
            <img src="{{ Voyager::image($post->image) }}"
                 class="img-fluid rounded mb-4"
                 alt="{{ $post->title }}">
        @endif

        <h1>{{ $post->title }}</h1>

        <p class="text-muted">

            Published:
            {{ optional($post->created_at)->format('d M Y') }}

        </p>

        <hr>

        {!! $post->body !!}

    </div>

    <div class="col-lg-4">

        <div class="card">

            <div class="card-header">

                Latest News

            </div>

            <div class="list-group list-group-flush">

                @foreach(\TCG\Voyager\Models\Post::where('status','PUBLISHED')->latest()->take(5)->get() as $news)

                    <a href="{{ route('news.show',$news->slug) }}"
                       class="list-group-item list-group-item-action">

                        {{ $news->title }}

                    </a>

                @endforeach

            </div>

        </div>

    </div>

</div>

@endsection