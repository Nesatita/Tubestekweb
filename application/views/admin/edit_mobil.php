<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Mobil </h3>

	<?php foreach($mobil as $mb) : ?>

		<form action="<?php echo base_url().'admin/data_mobil/update' ?>" method="post">

			<div class="form-group">
				<input type="hidden" name="id_mobil" class="form-control" value="<?php echo $mb->id_mobil ?>">
			</div>

			<div class="form-group">
				<label>Merk</label>
				<input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
				
			</div>
			
			<div class="form-group">
            <label>Kategori</label>
             <select class="form-control" name="kategori">
              <option value="Hyundai Creta">Hyundai Creta</option>
              <option value="Honda HR-V">Honda HR-V</option>
              <option value="Toyota Kijang Innova">Toyota Kijang Innova</option>
              <option value="Mitsubishi Xpander">Mitsubishi Xpander</option>
            </select>
          </div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>"> 
			</div>

			<div class="form-group">
				<label>Warna</label>
				<input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>"> 
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>

	<?php endforeach; ?>

</div>