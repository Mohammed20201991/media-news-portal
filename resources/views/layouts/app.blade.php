<!DOCTYPE html>
<html>

<head>

    <title>Media News Portal</title>

    @vite(['resources/css/app.css'])

</head>

<body>

@include('partials.navbar')

<div class="container">

    @yield('content')

</div>

@include('partials.footer')

</body>
</html>