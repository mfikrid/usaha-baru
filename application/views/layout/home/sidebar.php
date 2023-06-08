    <!-- Page Wrapper -->
    <div class="container-fluid shadow col-md-12 ">
        <!-- Content Wrapper -->
        <div id="content-wrapper">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top">
                    <div class="collapse navbar-collapse col-md-0" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="<?php echo base_url('Dashboard') ?>"><strong>USAHA BARU</strong></a>
                    </div>
                    <div>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo base_url('Kategori')?>" style="color: black;"><small>Kategori</small></a>
                            </li>
                        </ul>
                            
                    </div>
                    <!-- Topbar Search -->
                    <div class="d-flex">
                        <form class="navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="ml-3">
                        <a href="#" type="submit"><i class="fa-solid fa-cart-shopping" style="color: grey"></i></a>
                    </div>
                    <div class="ml-3">
                    <a href="#" type="submit"><i class="fa-solid fa-heart" href="#" style="color: grey"></i></a>
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
                                <ul class="nav navbar-nav navbar-right">
                                    <?php if($this->session->userdata('username')) { ?>
                                        <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                        <li class="ml-2"><?php echo anchor('auth/logout', 'Logout') ?></li>
                                        <?php } else { ?>
                                            <li><?php echo anchor('auth/login', '<div type="submit" class="btn btn-primary" style="color: white;">Login</div>'); ?></li>
                                        <?php }?>
                                </ul>
                        </div>
                         <!-- BEGIN: Account Menu -->
                        <!-- <div class="intro-x dropdown w-8 h-8">
                            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                                <img alt="" src="<?= site_url('asset') ?>/user.png">
                            </div>
                            <div class="dropdown-menu w-56">
                                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                                    <li class="p-2">
                                        <div class="font-medium"> <?php echo $this->session->userdata('nama_user') ?></div>
                                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500"> <?php echo $this->session->userdata('email') ?></div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider border-white/[0.08]">
                                    </li>
                                    <li>
                                        <a href="<?= site_url('profile') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="<?= site_url('change_password') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider border-white/[0.08]">
                                    </li>
                                    <li>
                                        <a href="<?= site_url('welcome/logout') ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- END: Account Menu -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>
                <!-- End of Topbar -->