<nav class="navbar navbar-expand-lg navbar-dark news-navbar">

<div class="container">

<a class="navbar-brand d-lg-none" href="/">

SD Media

</a>

<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbar">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="navbar">

@include('partials.menu')

<form action="{{ route('search') }}"
class="d-flex ms-auto">

<input
name="q"
class="form-control"
placeholder="Search">

</form>

</div>

</div>

</nav>