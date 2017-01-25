<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Michael Gwynne PHP/Laravel/Full-Stack developer based in London"/>
    <title>@yield('title', 'VoteMike')</title>

    <link href="//fonts.googleapis.com/css?family=Lato:100,300,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    @yield('stylesheets')
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('homepage') }}">VoteMike</a>
            <a class="navbar-brand" href="{{ route('showBlogPosts') }}">Blog</a>
            <a class="navbar-brand" href="{{ route('tv') }}">TV</a>
            <a class="navbar-brand" href="{{ route('stressTest') }}">Stress Test</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p>Created by <a href="http://www.votemike.co.uk/">Michael Gwynne</a></p>
    </div>
</footer>
@yield('scripts')
</body>
</html>
