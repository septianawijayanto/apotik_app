<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }} ({{ Auth::user()->role }})</a>
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
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link" id="dash">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (Auth::user()->role == 'Admin')
                    <li class="nav-item has-treeview" id="limasterdata">
                        <a href="#" class="nav-link" id="menumasterdata">
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                                Master Data
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link" id="user">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('jenis.index') }}" class="nav-link" id="jenis">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Jenis</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('satuan-produk.index') }}" class="nav-link " id="satuan">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Satuan Produk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('produk.index') }}" class="nav-link" id="produk">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Produk</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="nav-item has-treeview" id="litransaksi">
                    <a href="#" class="nav-link" id="menutransaksi">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Data Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('transaksi.index') }}" class="nav-link" id="transaksi">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('transaksi.create') }}" class="nav-link " id="create">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Transaksi</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('laporan.index') }}" class="nav-link " id="laporan">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout

                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
