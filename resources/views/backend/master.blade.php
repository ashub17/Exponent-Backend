<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('backend/assets/images/favicon.png')}}">
    <title>Admin Panel</title>
    <link rel="canonical" href="#" />
    
    <link href="{{ URL::asset('backend/css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('backend/css/colors/green-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{ URL::asset('backend/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{ URL::asset('backend/css/colors/default-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{ URL::asset('backend/css/colors/megna-dark.css')}}" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="{{ URL::asset('backend/assets/images/logo-icon.png')}}" height="64" alt="">
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a
                                class="nav-link nav-toggler d-block d-md-none text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('register') }}">Register Admin</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <div class="profile-img"> <img src="{{ URL::asset('backend/assets/images/logo-icon.png')}}" /> </div>
                </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li> <a class="waves-effect waves-dark" href="{{url('admin')}}" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i>Dashboard</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('setup')}}" aria-expanded="false"><i
                            class="mdi mdi-tooltip-edit"></i>Website Setup</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('categories')}}" aria-expanded="false"><i
                            class="mdi mdi-notification-clear-all"></i>Categories</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('home')}}" aria-expanded="false"><i
                            class="mdi mdi-home"></i>Homepage</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('about')}}" aria-expanded="false"><i
                            class="mdi mdi-group"></i>About Us</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('service')}}" aria-expanded="false"><i
                            class="mdi mdi-tools"></i>Services</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('product')}}" aria-expanded="false"><i
                            class="mdi mdi-home"></i>Products</a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('client')}}" aria-expanded="false"><i
                            class="mdi mdi-handshake"></i>Clients/Partners</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="sidebar-footer">
                <a href="{{url('setup')}}" class="link" data-toggle="tooltip" title="Settings"><i
                        class="ti-settings"></i></a>
                <a href="https://gmail.com" class="link" data-toggle="tooltip" title="Email"><i
                        class="mdi mdi-gmail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        <h3 class="text-themecolor">@yield('title')</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
                @yield('content')
            </div>
            <footer class="footer">
                © Exponent
            </footer>
        </div>
    </div>
    <script src="{{ URL::asset('backend/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/popper/popper.min.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{ URL::asset('backend/js/waves.js')}}"></script>
    <script src="{{ URL::asset('backend/js/sidebarmenu.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ URL::asset('backend/js/custom.min.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/d3/d3.min.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/c3-master/c3.min.js')}}"></script>
    <script src="{{ URL::asset('backend/js/dashboard1.js')}}"></script>
    <script src="{{ URL::asset('backend/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>