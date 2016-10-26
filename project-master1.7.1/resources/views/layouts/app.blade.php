<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">

    <script src="http://maps.googleapis.com/maps/api/js?AIzaSyA1qMMb2QKzBOhS5KkBQMB4P4yx3guclS0"></script>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
    <div class="content-wrap">
        <nav class="navbar navbar-default clearfix">
            <div class="container clearfix">
                <div class="navbar-header">

                    <div class="menu-icon float-right">
                        <a href="#menuExpand">
                            <img class="hamburger-icon" src="{{ URL::asset('img/hamburger-icon.png') }}">
                            <img class="cancel-icon" src="{{ URL::asset('img/cancel-icon.png') }}">
                        </a>
                    </div>

                    <!-- Branding Image -->
                    <a href="{{ url('/') }}"><img src="{{ URL::asset('img/A_logo_RGB_123x123.jpg') }}" 
                    class="nav-logo float-left"></a>
                </div>

                <div class="collapse navbar-collapse clearfix" id="spark-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav float-left">
                        <a href="{{ url('/') }}" class="nav-button"><li class="nav-button {{ Request::is('/') ? 'active' : '' }}">Home</li></a>
                        <a href="{{ url('/catalogs') }}" class="nav-button"><li  class="nav-button {{ Request::is( 'catalogs') ? 'active' : '' }}">Projecten</li></a>
                        <a href="{{ url('/maps') }}" class="nav-button"><li class="nav-button {{ Request::is( 'maps') ? 'active' : '' }}">Map</li></a>
                        @can('admin-access')
                            <li class="dropdown  " id="manage-button">
                                <a href="#" class="nav-button dropbtn {{ Request::is('categories') ? 'active' : '' }}">
                                    Beheer <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu manage-menu " role="menu">
                                    <a href="{{ route('categories.index') }}"><li><i class="fa fa-btn fa-tags "></i>Categorieën</li></a>
                                    <a href="{{ route('products.index') }}"><li><i class="fa fa-btn fa-tags"></i>Projecten</li></a>
                                    <a href="{{ route('fases.index') }}"><li><i class="fa fa-btn fa-tags"></i>Fases</li></a>
                                    <a href="{{ url('/questions') }}"><li><i class="fa fa-btn fa-tags"></i>Vragen</li></a>
                                    <a href="{{ url('/resultaten') }}"><li><i class="fa fa-btn fa-tags"></i>Resultaten</li></a>
                                </ul>
                            </li>
                        @endcan
                    </ul>
                    <div class="last-ul">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav float-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <a class="nav-button" href="{{ url('/login') }}"><li>Inloggen</li></a>
                                <a class="nav-button" href="{{ url('/register') }}"><li>Registreren</li></a>
                            @else
                                <li class="dropdown" id="logout-button">
                                    <a href="{{ route('coin.index') }}">{{ $user->coin }} 
                                        <img class="img-coin"src="{{ URL::asset('img/coin.png') }}">
                                    </a>
                                    <a href="#" class="nav-button">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu logout-menu" role="menu">
                                        <a href="{{ url('/logout') }}"><li><i class="fa fa-btn fa-sign-out"></i>Uitloggen</li></a>
                                        <a href="{{ url('account', Auth::user()->id) }}"><li><i class="fa fa-btn fa-sign-out"></i>Account</li></a>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <img class="img-home"src="{{ URL::asset('img/imgStad.jpg') }}">
        @if (Session::has('flash_notification.message'))
            <div class="container">
                <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                    <img class="succes-img" src="{{ asset('img/succes.png') }}">
                    {{ Session::get('flash_notification.message') }}
                </div>
            </div>
        @endif
        @yield('content')

        <div class="bottom-footer">

            <div class="container">

                <div class="made-by">

                    made by Antwaarpen &copy;

                </div>

            </div>

        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
