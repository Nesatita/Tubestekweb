<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">			
			<h3>Input Alamat Pengiriman dan Pembayaran</h3>
		
			<form method="post" action="<?php echo base_url(). 'customer/pemesananmobil/tambah_aksi'?> ">
				<div class="form-group">
		            <label>ID Pesanan</label>
		            <input type="text" name="id_pesanan" value="2" readonly class="form-control">
		         </div>
		         
		         <div class="form-group">
		            <label>ID Mobil</label>
		            <input type="text" name="id_mobil" value="" class="form-control">
		         </div>
				

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" required name="nama" placeholder="Nama Lengkap Anda" minlength="2" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" required name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No HP</label>
					<input type="number" required minlength="12" maxlength="15" name="no_hp" placeholder="Nomor Handphone Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Merk</label>
					<input  type="text" required name="merk" value="All New HR-V S CVT" placeholder="Merk" class="form-control">
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="text" required name="harga" placeholder="Harga" value="365000000" class="form-control">
				</div>
				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BCA        - XXXXXXX</option>
						<option>Mandiri    - XXXXXXX</option>
						<option>BNI        - XXXXXXX</option>
						<option>BRI        - XXXXXXX</option>
						<option>BJB        - XXXXXXX</option>
						<option>CIMB Niaga - XXXXXXX</option>
						<option>OCBC Nisp  - XXXXXXX</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan Sekarang</button>

			</form>

		</div>

		<div class="col-md-2"></div>
	</div>
</div>