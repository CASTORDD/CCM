<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" defer></script>
    -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/them/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/them/custom.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- SIDER BAR -->
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                      <a href="{{ url('/') }}" class="site_title">
                        <i class="fa fa-user-md"></i> 
                        <span>{{ config('app.name', 'Laravel') }}</span>
                      </a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    @guest
                        <br>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>{{ __('Login') }}</h3>
                            </div>
                        </div>
                    @else
                    <div class="profile clearfix">
                      <div class="profile_pic">
                        <img src="{{ URL::asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                      </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                      <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                          <li>
                            <a href="{{ route('dashboard.index')}}">
                              <i class="fa fa-tachometer"></i> Dashboard
                            </a>
                          </li>
                          <li>
                            <a><i class="fa fa-user"></i> Paciente <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="/pacientes">listado</a></li>
                              <li><a href="index2.html">Registro</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    @endguest
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                      <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>    
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </li>
                            @else
                            <li class="">
                              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{ URL::asset('images/img.jpg') }}" alt="">{{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                  <a href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                  </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i> 
                                        Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                              </ul>
                            </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- footer content -->
            <footer>
              <div class="pull-right">
                CCM by <a href="#">vort</a>
              </div>
              <div class="clearfix"></div>
            </footer>
        </div>
    </div>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    @yield('scripts')
    <script src="{{ URL::asset('js/custom.js') }}"></script>
</body>
</html>
