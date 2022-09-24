    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')"
                        class="btn btn-block btn-danger btn-lg"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Logout
                    </a>

                </form>
            </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Online Bank</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{ route('home')}}" class="d-block">
                    Welcome,
                    <span class="text-white">{{ Auth::user()->name }}</span>
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Single Links -->
            <li class="nav-item">
                <a href="{{ route('home')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard

                </p>
                </a>
            </li>
            @if (auth()->user()->is_admin)
            <li class="nav-item">
                <a href="{{ route('admin.pages.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Users Transaction
                </p>
                </a>
            </li>
            @endif

            <li class="nav-item">
                <a href="{{ route('profile.index') }}" class="nav-link">
                <i class="nav-icon fa fa-user-circle"></i>
                <p>
                    Profile

                </p>
                </a>
            </li>

            @if (!auth()->user()->is_admin)

             <!-- Drop Down Links -->
             <li class="nav-item menu-open">

                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-university"></i>
                    <p>
                        Account
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview ml-4">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-forward nav-icon"></i>
                            <p>Transfer</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-credit-card nav-icon"></i>
                            <p>Cards</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fa fa-list nav-icon"></i>
                            <p>Transaction</p>
                        </a>
                    </li>
                </ul>

            </li>
            @endif


            <!-- Drop Down Links -->
            <!-- <li class="nav-item menu-open">

                <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>

                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inactive Page</p>
                    </a>
                </li>
                </ul>

            </li>



            </ul> -->


        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
