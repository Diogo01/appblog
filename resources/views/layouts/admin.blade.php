<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'AdminBlog')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/sb-admin.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        
    </head>
    <body>

        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('partials.nav-admin')
            </nav>
            
             <div id="page-wrapper">
                <div class="container-fluid">
                    @yield('h1')
                    @yield('content')
                </div>
            </div>
            
        </div>
    
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
</html>