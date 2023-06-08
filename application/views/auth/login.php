<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form method="post" action="<?php echo base_url('auth/login') ?>">
        <h3>Login</h3>
        <?php echo $this->session->flashdata('pesan')?>
        <div>
            <label for="username">Username</label>
            <input type="text" placeholder="Email or Phone" id="username" name="username">
            <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
            </div>
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">
        <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>

        <button type="submit">Log In</button>
        <hr>
        <div class="mt-2 ml-3">
            <a> Belum mempunyai akun?<a href="<?php echo base_url('registrasi/index') ?>"> Daftar!</a></a>
        </div>
    </form>
