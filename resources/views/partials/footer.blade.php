<footer class="footer">

<div class="container">

<div class="row">

<div class="col-md-4">

<h5>About</h5>

<p>Professional multilingual news portal.</p>

</div>

<div class="col-md-4">

<h5>Categories</h5>

<ul>

@foreach($categories as $category)

<li>

<a href="{{ route('category.show',$category->slug) }}">

{{ $category->name }}

</a>

</li>

@endforeach

</ul>

</div>

<div class="col-md-4">

<h5>Follow Us</h5>

Facebook

Twitter

YouTube

</div>

</div>

</div>

</footer>