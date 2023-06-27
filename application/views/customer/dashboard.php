<body style="background-size: cover; background-position: center;  background-repeat: no-repeat;background-image: url('<?php echo base_url()?>assets/img/customer.png');">


    
        <!-- Header-->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="ml-3">
                                    <?php
                                    $keranjang = '<i class="fas fa-shopping-cart fa-lg" data-toggle="tooltip" title="Keranjang Belanja"></i> '.$this->cart->total_items()  
                                    ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>

                            </ul>
                            

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <ul class="nav navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) { ?>
                                <li class="ml-3"><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                <li class="ml-3">
                                    <a href="#Tim">About US</a>
                                </li>
                                <li class="ml-3"><?php echo anchor('auth/logout', 'Logout')  ?></li>
                            <?php }else{ ?>
                                <li><?php echo anchor('auth/login', 'Login'); ?></li>

                            <?php  } ?>
                            
                        </ul>

                        </div>
                        
                    </ul>
                    <div class="elfsight-app-37843510-c90e-4f96-b34c-7dc2809fe4b8"></div>

                </nav>
        <section class="customer" >
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">PEMESANAN</h1>
                <br><br>
                <a class="btn btn-primary btn-xl" href="#promo">Info Promo&Event</a>
                <br><br><br>
                <a class="btn btn-primary btn-xl" href="#promo">Produk</a>
                <br><br><br>
                <a class="btn btn-primary btn-xl" href="<?php echo base_url('customer/pemesananmobil') ?>">Isi Pesanan</a>
                <br><br><br>
                <a class="btn btn-primary btn-xl" href="<?php echo base_url('admin/pesan') ?>">Pesan Bantuan</a>
            </div>
        </section>
        <h1 class="text-center">PROMO AKHIR TAHUN</h1>
        <div class="row text-center mt-3 mr-5 ml-5 mb-5" id="promo">
        <?php foreach ($mobil as $mbl) : ?>
            <div class="card ml-4 mr-2 mt-5" style="width: 16rem;">
              <img src="<?php echo base_url().'/uploads/'.$mbl->gambar ?>" class="card-img-top" alt="...">
              <div class="card-body pl-2">
                <p style="font-weight: bold; font-size: 18px;"><?php echo $mbl->merk?></p>
                <p class="card-title mb-1"><?php echo $mbl->kategori?></p> 
                <small><?php echo $mbl->warna?></small><br>

                <span class="badge badge-success mb-3">Rp. <?php echo number_format($mbl->harga,0, ',','.') ?></span>
                <br>
                <?php echo anchor('dashboard/pembayaran/'.$mbl->id_mobil, '<div class="btn btn-sm btn-primary">Beli</div>') ?>
              </div>
            </div>
        <?php endforeach; ?>
        </div>
        <h1 class="text-center" id="Tim">Profil</h1>
            <div class="row ">
                <div class="row justify-content-md-center">
                    <div class="card ml-4 mr-2 mt-5" style="width: 16rem;">
                    <img src="<?php echo base_url('assets/img/logo.jpg'); ?>" alt="Profil Picture">
                      <div class="card-body pl-2">
                        <p style="font-weight: bold; font-size: 18px;">Nesa Tita Nurlela</p>
                        <p style="font-weight: bold; font-size: 18px;">3411201048</p>
                      </div>
                    </div>
                    
                </div>
            </div>
  </div>
  </div>
</div>