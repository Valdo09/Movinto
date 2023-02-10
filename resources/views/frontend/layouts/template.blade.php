<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MovInto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  @include('frontend.layouts.css')


</head>

<body>

@include('frontend.layouts.header')


@yield('introsection')


<main id="main">
@yield('content')
</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontend.layouts.footer')
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('frontend.layouts.js')
</body>

</html>
