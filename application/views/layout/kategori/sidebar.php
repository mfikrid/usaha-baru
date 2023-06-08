<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper" class="container col-md-12">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top shadow">
                    <div class="collapse navbar-collapse col-md-0" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="<?php echo base_url('Dashboard') ?>"><strong>USAHA BARU</strong></a>
                    </div>
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url('Kategori')?>" style="color: black;"><small>Kategori</small></a>
                        </li>
                    </div>
                    <!-- Topbar Search -->
                    <div class="d-flex ms-auto my-4 my-lg-0">
                        <form class="navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <div class="container">
                            <div class="text-end">
                                <button type="button" class="btn btn-outline-primary me-2" href="<?= site_url('welcome')?>">Login</button>
                                <button type="button" class="btn btn-primary" <?= site_url('welcome')?>>Sign-up</button>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
                <!-- End of Topbar -->