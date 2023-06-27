<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		

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
								<li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
								<li class="ml-3"><?php echo anchor('auth/logout', 'Logout')  ?></li>
							<?php }else{ ?>
								<li><?php echo anchor('auth/login', 'Login'); ?></li>

							<?php  } ?>
							
						</ul>

					    </div>
						
				    </ul>
					<div class="elfsight-app-37843510-c90e-4f96-b34c-7dc2809fe4b8"></div>

				</nav>
				
				<script src="https://apps.elfsight.com/p/platform.js" defer></script>
