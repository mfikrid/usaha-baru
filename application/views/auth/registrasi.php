<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form method="post" action="<?php echo base_url('registrasi/index') ?>">
        <h3>Registrasi</h3>
        <?php echo $this->session->flashdata('pesan')?>
        <div>
            <label for="username">Nama</label>
            <input type="text" placeholder="Nama" id="username" name="nama">
            <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>'); ?>
        </div>
        <div>
            <label for="username">Username</label>
            <input type="text" placeholder="Username" id="username" name="username">
            <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
        </div>
        <div>    
            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password">
            <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
        </div>
        <button type="submit">Daftar</button>
        <hr>
        <div class="mt-2 ml-3">
            <a> Sudah mempunyai akun?<a href="<?php echo base_url('auth/login') ?>"> Login!</a></a>
        </div>
    </form>
