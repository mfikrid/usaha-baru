<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard_admin">
                <div class="sidebar-brand-text mx-3"> Admin Usaha Baru</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/Dashboard_admin')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Sekolah</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Dapur</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kecantikan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kesehatan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/Data_barang') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Makanan & Minuman</span>
                </a>
            </li>    
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <div class="container">
                        <ul class="nav navbar-nav navbar-right">
                                    <?php if($this->session->userdata('username')) { ?>
                                        <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                        <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                                        <?php } else { ?>
                                            <li><?php echo anchor('auth/login', 'Login'); ?></li>

                                        <?php }?>
                                </ul>
                        </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->