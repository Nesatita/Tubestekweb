<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide ml-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/slider3.jpg')?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>

    <div class="row text-center mt-3 mr-5 ml-5 mb-5">
        <?php foreach ($mobil as $mbl) : ?>
            <div class="card ml-4 mr-2 mt-5" style="width: 16rem;">
              <img src="<?php echo base_url().'/uploads/'.$mbl->gambar ?>" class="card-img-top" alt="...">
              <div class="card-body pl-2">
                <p style="font-weight: bold; font-size: 18px;"><?php echo $mbl->merk?></p>
                <p class="card-title mb-1"><?php echo $mbl->kategori?></p> 
                <small><?php echo $mbl->warna?></small><br>

                <span class="badge badge-success mb-3">Rp. <?php echo number_format($mbl->harga,0, ',','.') ?></span>
                <br>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$mbl->id_mobil, '<div class="btn btn-sm btn-primary">Beli</div>') ?>
                <?php echo anchor('dashboard/detail/'.$mbl->id_mobil, '<div class="btn btn-sm btn-success">Detail</div>') ?>
              </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>