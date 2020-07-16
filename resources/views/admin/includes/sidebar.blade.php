<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard.index')}}" class="brand-link">
        <img src="{{asset('img/logo-branco.png')}}" alt="Logo"
            class="brand-image" style="margin-left:0;">
        <span class="brand-text font-weight-light">Imax<b>Painel</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{auth()->guard()->user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard.index')}}" class="nav-link {{ (Request::is('admin') ? 'active' : '') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.project.index')}}" class="nav-link {{ (Request::is('admin/projeto') ? 'active' : '') }} {{ (Request::is('admin/projeto/*') ? 'active' : '') }}">
                        <i class="nav-icon far fa-chart-bar"></i>
                        <p>Projetos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.access.index')}}" class="nav-link {{ (Request::is('admin/acesso') ? 'active' : '') }} {{ (Request::is('admin/access/*') ? 'active' : '') }}">
                        <i class="nav-icon fab fa-redhat"></i>
                        <p>Acessos</p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>