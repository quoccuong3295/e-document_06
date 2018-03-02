
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Album example for Bootstrap</title>
        <!-- Custom styles for this template -->
        {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>

    <body>
        <nav class="site-header sticky-top py-1" style="background-color:rgba(0, 0, 0, .85);">
            <div class="container d-flex flex-column flex-md-row justify-content-between">

                <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Category</a>
                <a class="py-2 d-none d-md-inline-block" href="#">List Friend</a>
                <a class="py-2 d-none d-md-inline-block" href="#">History</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Create Category</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Profile</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Regiter</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Login/Logout</a>
                <a class="search-button" href="#"><i class="fa fa-search"></i></a>
            </div>
        </nav>
    @yield('content')
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
            </div>
        </footer>
    <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></scrip>
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    </body>
</html>
