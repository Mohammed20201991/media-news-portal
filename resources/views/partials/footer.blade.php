<footer class="bg-dark text-white">

<div class="container py-5">

<div class="row">

<div class="col-lg-4">

<h4>

Media Portal

</h4>

<p>

Professional Laravel News Portal powered by Voyager CMS.

</p>

</div>

<div class="col-lg-4">

<h5>

Pages

</h5>

<ul class="list-unstyled">

@foreach($pages as $page)

<li>

<a class="text-white text-decoration-none"

href="#">

{{ $page->title }}

</a>

</li>

@endforeach

</ul>

</div>

<div class="col-lg-4">

<h5>

Categories

</h5>

<ul class="list-unstyled">

@foreach($categories as $category)

<li>

{{ $category->name }}

</li>

@endforeach

</ul>

</div>

</div>

<hr>

<p class="text-center">

© {{ date('Y') }}

Media News Portal

</p>

</div>

</footer>