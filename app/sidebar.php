
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
        <img src="assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fa fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item" id="m-dash">
                    <a class="nav-link linker" id="a-dash">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a id="s-dash" class="nav-link linker" onclick="loadModule('modules/dashboard/dashboard.php','dash')">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="a-forms" class="nav-link linker" onclick="loadModule('modules/forms/forms.php','forms')">
                        <i class="nav-icon fa fa-th"></i>
                        <p>Forms</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="a-tabs" class="nav-link linker" onclick="loadModule('modules/tabs/tabs.php','tabs')">
                        <i class="nav-icon fa fa-file-archive-o"></i>
                        <p>Tabs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="a-modals" class="nav-link linker" onclick="loadModule('modules/modals/modals.php','modals')">
                        <i class="nav-icon fa fa-warning"></i>
                        <p>Modals y Alerts</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>