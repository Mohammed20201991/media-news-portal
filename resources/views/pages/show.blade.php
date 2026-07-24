@extends('layouts.app')

@section('title', $page->title)

@section('content')

<div class="container mt-5">

    <h1>{{ $page->title }}</h1>

    <hr>

    @if($page->image)
        <img src="{{ Voyager::image($page->image) }}"
             class="img-fluid rounded mb-4">
    @endif

    {!! $page->body !!}

</div>

@endsection