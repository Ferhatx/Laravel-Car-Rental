<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="FERHAT AKTÜRK">
    <link rel="icon" href="{{asset('assets')}}/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> @yield('title') </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/owl.css">

</head>

<body>
@include('home._header');
@yield("content")

@include('home._footer');
</body>
</html>
