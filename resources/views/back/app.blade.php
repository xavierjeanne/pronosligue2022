<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="{{url('/')}}">Pronosligue</a></h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#ligueSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Ligue</a>
                    <ul class="collapse list-unstyled" id="ligueSubmenu">
                        <li>
                            <a href="{{route('admin.league')}}">Gestion des Ligues</a>
                        </li>
                        <li>
                            <a href="{{route('admin.user')}}">Gestion des joueurs</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#statSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Statistique</a>
                    <ul class="collapse list-unstyled" id="statSubmenu">
                        <li>
                            <a href="{{route('admin.league.stat')}}">Statistiques des Ligues</a>
                        </li>
                        <li>
                            <a href="{{route('admin.user.stat')}}">Statistiques des joueurs</a>
                        </li>
                    </ul>
                </li>
               
                <li>
                    <a href="{{route('admin.contact')}}">Contact</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>

                </div>
            </nav>
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
</body>

</html>