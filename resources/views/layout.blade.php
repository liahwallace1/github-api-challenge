<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boomtown Github Review</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

{{--Bootstrap Styles and JS--}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Boomtown Github Review</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Organization Data</a></li>
                    <li class="nav-item"><a class="nav-link" href="/repos">See Repositories</a></li>
                    <li class="nav-item"><a class="nav-link" href="/events">See Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="/hooks">See Hooks</a></li>
                    <li class="nav-item"><a class="nav-link" href="/issues">See Issues</a></li>
                    <li class="nav-item"><a class="nav-link" href="/members">See Members</a></li>
                    <li class="nav-item"><a class="nav-link" href="/public-members">See Public Members</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
    @yield('content')
</div>

</body>
</html>
