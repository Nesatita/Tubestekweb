
<body style="background-size: cover; background-position: center;  background-repeat: no-repeat;background-image: url('<?php echo base_url()?>assets/img/temp.jfif');">


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0" style="background-color: rgb(193, 139, 153)">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-weight: bold;">LOGIN CAR DEALER</h1>
                                    </div>
                                    <div class="text">
                                        <h5 class="h6 text-gray-900 mb-1" style="font-weight: bold;">USERNAME</h5>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>


                                    <form method="post" action="<?php echo base_url('auth/login') ?>"class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username"pattern="[A-Za-z]+" title="Username diawali dengan huruf" required>

                                                <?php echo form_error('username', '<div class="text-danger small ml-2"> ',' </div');?>


                                        </div>
                                        <div class="text">
                                            <h5 class="h6 text-gray-900 mb-1" style="font-weight: bold;">PASSWORD</h5>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Password" name="password" required>

                                                <?php echo form_error('password', '<div class="text-danger small ml-2"> ',' </div');?>
                                        </div>
                                        <button type="submit" class="form-control" style="color: white; background-color: rgb(0, 0, 0)">Login</button>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" style="color: black;" href="<?php echo base_url('registrasi/index'); ?>">Belum Punya Akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    
</body>

</html>