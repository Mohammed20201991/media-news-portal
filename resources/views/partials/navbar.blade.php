<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="{{ route('home') }}">
    Media Portal
</a>

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav me-auto">

<li class="nav-item">

<a class="nav-link" href="{{ route('home') }}">
Home
</a>

</li>

@foreach($categories as $category)

<li class="nav-item">

<a class="nav-link"
href="#">

{{ $category->name }}

</a>

</li>

@endforeach

</ul>

<ul class="navbar-nav">

@foreach($pages as $page)

<li class="nav-item">

<a class="nav-link"
href="#">

{{ $page->title }}

</a>

</li>

@endforeach

<li class="nav-item">

<a class="nav-link"
href="/admin">

Admin

</a>

</li>

</ul>

</div>

</div>

</nav>