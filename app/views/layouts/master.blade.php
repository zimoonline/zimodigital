<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:title" content="@yield('meta')" />
    <meta property="og:image" content="@yield('meta_img')" />

    <title>ZIMO Digital | web development & content marketing</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css')}}

    {{ HTML::style('css/bootstrap.css')}}


    <!-- Custom Google Web Font -->
    {{ HTML::style('font-awesome/css/font-awesome.min.css')}}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic')}}

    

    <!-- Add custom CSS here -->
    {{ HTML::style('css/landing-page.css')}}

    {{ HTML::style('css/posts.css')}}
    {{ HTML::style('css/one-page-wonder.css')}}
    {{ HTML::style('css/signin.css') }}



</head>

<body>
    
    @include('layouts.flash')

        @yield('container')



    <!-- JavaScript -->
    
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}

    {{ HTML::script('js/bootstrap.js') }}


    
</body>

</html>