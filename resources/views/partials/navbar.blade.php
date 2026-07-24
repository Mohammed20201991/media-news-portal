<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

@include('partials.menu')

<div class="container">

<a class="navbar-brand" href="{{ route('home') }}">

<i class="bi bi-newspaper"></i>

Media Portal

</a>

<button class="navbar-toggler"

data-bs-toggle="collapse"

data-bs-target="#navbar">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbar">

<ul class="navbar-nav me-auto">

<li class="nav-item">

<a class="nav-link"

href="{{ route('home') }}">

Home

</a>

</li>

@foreach($categories as $category)

<li class="nav-item">

<a class="nav-link"

href="{{ route('category.show',$category->slug) }}">

{{ $category->name }}

</a>

</li>

@endforeach

</ul>

<form class="d-flex me-3"
      action="{{ route('search') }}"
      method="GET">

    <input

        class="form-control"

        type="search"

        name="q"

        value="{{ request('q') }}"

        placeholder="Search news...">

</form>

<a href="/admin"

class="btn btn-warning">

Admin

</a>

</div>

</div>

</nav>