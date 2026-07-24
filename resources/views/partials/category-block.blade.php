@if($category->posts->count())

<div class="mt-5">

<div class="d-flex justify-content-between">

<h2>

{{ $category->name }}

</h2>

<a href="{{ route('category.show',$category->slug) }}">

More →

</a>

</div>

<div class="row">

@foreach($category->posts as $post)

<div class="col-md-3">

@include('partials.news-card')

</div>

@endforeach

</div>

</div>

@endif