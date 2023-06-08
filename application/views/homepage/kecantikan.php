<div class="container shadow mt-2 col-md-10">
    <div class="row">
    <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
        <h5 class="text-left" style="color: black;"><strong>Kecantikan</strong>
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