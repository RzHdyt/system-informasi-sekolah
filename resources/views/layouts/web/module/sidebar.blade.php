<!-- Main Sidebar Container -->
<!-- Brand Logo -->
<a href="" class="brand-link">
    <img src="{{ asset('assests/adminLTE/dist/img/AdminLTELogo.png') }}" alt="FOR LOGO"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{auth()->user()->name}}</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="" class="d-block">SMP NURUL HALIM WIDASARI</a>

        </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div> --}}

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <i class="nav-icon fa fa-certificate"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.guru.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-certificate"></i>
                    <p>
                        Data Guru Pengajar & Staf
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.pemberitahuan.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-certificate"></i>
                    <p>
                        Pemberitahuan
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
