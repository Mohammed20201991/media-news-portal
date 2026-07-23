<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Media News Portal')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
        }

        .navbar-brand{
            font-size:26px;
            font-weight:bold;
        }

        .news-card img{
            height:220px;
            object-fit:cover;
        }

        .hero-image{
            height:500px;
            object-fit:cover;
        }

        footer{
            margin-top:60px;
        }

    </style>

</head>

<body>

@include('partials.navbar')

<div class="container mt-4">

    @yield('content')

</div>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>