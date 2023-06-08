<div class="container col-md-10 mt-2">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url()?>assets/img/banner1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url()?>assets/img/banner1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url()?>assets/img/banner1.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>


<!--Awal Produk Terlaris-->
<div class="container shadow mt-2 col-md-10">
    <div class="row">
    <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
        <h5 class="text-left" style="color: black;"><strong>Produk Pilihan</strong>
        <a style="color: green;" href="#">&nbsp;<small><strong>Lihat Semua</strong></small></a> </h5>
    </div>
        <?php foreach ($barang as $brg) : ?>
            <div class="card col-lg-2 col-md-3 col-sm-4 col-6 ml-4 mr-3 mb-4" style="width: 18rem;">
            <img src="<?php echo base_url().'/uploads/'. $brg->gambar?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h6 class="card-title"><?php echo $brg->nama_brg ?></h6>
                    <p class="card-text"><strong>Rp <?php echo number_format($brg->harga, 0,',','.') ?></strong>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example" type="submit">
                            <a type="button" class="btn btn-danger mr-1"><i class="fa-solid fa-heart" href="#"></i></a>
                            <a type="button" class="btn btn-warning"><i class="fa-solid fa-cart-shopping" href="#"></i></a>
                            <a type="button" class="btn btn-success ml-1"><i class="fa-solid fa-circle-info" href="#"></i></a>
                        </div>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!--Produk Lainnya Lainnnya-->
<div class="container shadow mt-2 col-md-10">
    <div class="row">
    <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
        <h5 class="text-left" style="color: black;"><strong>Produk Lainnya</strong>
        <a style="color: green;" href="#">&nbsp;<small><strong>Lihat Semua</strong></small></a> </h5>
    </div>
        <?php foreach ($barang as $brg) : ?>
            <div class="card col-lg-2 col-md-3 col-sm-4 col-6 ml-4 mr-3 mb-4" style="width: 18rem;">
            <img src="<?php echo base_url().'/uploads/'. $brg->gambar?>" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                    <p class="card-text">Rp <?php echo number_format($brg->harga, 0,',','.') ?>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example" type="submit">
                            <a type="button" class="btn btn-danger mr-1"><i class="fa-solid fa-heart" href="#"></i></a>
                            <a type="button" class="btn btn-warning"><i class="fa-solid fa-cart-shopping" href="#"></i></a>
                            <a type="button" class="btn btn-success ml-1"><i class="fa-solid fa-circle-info" href="#"></i></a>
                        </div>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!--KATEGORI-->
<div class="container mt-2 col-md-10">
    <div class="row">
        <div class="card-group">
            <div class="card-body">
                <div class="card bg-primary p-3">
                <a class="btn btn-graident-primary" style="color: white;" href="<?php echo base_url('Kecantikan')?>">Kecantikan</a>
                </div>
            </div>
            <div class="card-body ml-2">
                <div class="card bg-secondary p-3">
                <a class="btn btn-gradient-secondary" style="color: white;" href="<?php echo base_url('Dapur') ?>">&nbsp;&nbsp; Dapur &nbsp;&nbsp;</a>
                </div>
            </div>
            <div class="card-body ml-2">
                <div class="card bg-success p-3">
                <a class="btn btn-gradient-success" style="color: white;" href="<?php echo base_url('Makanan_Minuman')?>">Makanan</a>
                </div>
            </div>
            <div class="card-body ml-2">
                <div class="card bg-info p-3">
                <a class="btn btn-gradient-info" style="color: white;" href="<?php echo base_url('Sekolah')?>">Sekolah</a>
                </div>
            </div>
            <div class="card-body ml-2">
                <div class="card bg-danger p-3">
                <a class="btn btn-gradient-danger" style="color: white;" href="<?php echo base_url('Material')?>">Material</a>
                </div>
            </div>
        </div>
    </div>
</div>