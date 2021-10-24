<html>
<head>
    <meta charset="utf8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="wrapper">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/" class="brand-link text-center">
            <span class="brand-text font-weight-lighter">LanAdmin</span>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                    <li class="nav-item">
                        <a href="/" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item {{ (request()->is('user/*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Joueurs
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/user/list" class="nav-link {{ (request()->is('user/list')) ? 'active' : '' }}">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Liste des joueurs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ (request()->is('user/team')) ? 'active' : '' }}">
                                    <i class="fas fa-list  nav-icon"></i>
                                    <p>Liste des équipes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ (request()->is('user/rank')) ? 'active' : '' }}">
                                    <i class="fas fa-list-ol nav-icon"></i>
                                    <p>Classement</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ (request()->is('server/*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-server"></i>
                            <p>
                                Serveurs
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ (request()->is('server/status')) ? 'active' : '' }}">
                                    <i class="fas fa-tachometer-alt nav-icon"></i>
                                    <p>Status des serveurs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/server/list" class="nav-link {{ (request()->is('server/list')) ? 'active' : '' }}">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Liste des serveurs</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/ticket" class="nav-link {{ (request()->is('ticket')) ? 'active' : '' }}">
                            <i class="fas fa-ticket-alt nav-icon"></i>
                            <p>Gestion des tickets</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="/logout" class="nav-link bg-danger">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Déconnexion</p>
                        </a>
                    </li>
            </nav>
        </div>
    </aside>
    <div class="content-wrapper py-5">
        @yield('content')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/chart.min.js') }}"></script>
</body>
</html>
