<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Michael Gwynne PHP/Laravel/Full-Stack developer"/>

        <title>Michael Gwynne</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <div class="main-container">
            <div class="content">
                <div class="title">Michael Gwynne</div>
                <div class="email"><a href='mailto&#58;mich&#97;el&#64;votem%69k%65&#46;c&#111;&#46;uk'>michael&#64;vote&#109;ike&#46;co&#46;uk</a></div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <dl class="dl-horizontal">
                    <dt>My Sites:</dt>
                    <dd>
                        <ul class="list-inline">
                            @foreach($sites as $name => $site)
                                <li title="{{ $site['title'] }}"><a href="{{ $site['link'] }}">{{ $name }}</a></li>
                            @endforeach
                        </ul>
                    </dd>
                    <dt>Personal Pages:</dt>
                    <dd>
                        <ul class="list-inline">
                            @foreach($personal as $name => $site)
                                <li title="{{ $site['title'] }}"><a href="{{ $site['link'] }}">{{ $name }}</a></li>
                            @endforeach
                        </ul>
                    </dd>
                    <dt>Sites I've worked on:</dt>
                    <dd>
                        <ul class="list-inline">
                            @foreach($workedon as $name => $site)
                                <li title="{{ $site['title'] }}"><a href="{{ $site['link'] }}">{{ $name }}</a></li>
                            @endforeach
                        </ul>
                    </dd>
                    <dt>Keyword Stuffing:</dt>
                    <dd>
                        <ul class="list-inline">
                            @foreach($keywords as $keyword)
                                <li>{{ $keyword }}</li>
                            @endforeach
                        </ul>
                    </dd>
                </dl>
            </div>
        </footer>
    </body>
</html>