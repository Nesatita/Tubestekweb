<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data User </h3>

	<?php foreach($user as $us) : ?>

		<form action="<?php echo base_url().'admin/data_user/update' ?>" method="post">

			<div class="form-group">
				<input type="hidden" name="id_user" class="form-control" value="<?php echo $us->id_user ?>">
			</div>

			<div class="form-group">
				<label>Nama User</label>
				<input type="text" name="nama_user" class="form-control" value="<?php echo $us->nama_user ?>">
				
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $us->username ?>">
				
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $us->email ?>">
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $us->password ?>">
				
			</div>
			<div class="form-group">
				<label>No HP</label>
				<input type="number" name="no_hp" class="form-control" value="<?php echo $us->no_hp ?>">
				
			</div>
			<div class="form-group">
	            <label>Status</label>
	             <select class="form-control" name="role_id">
	              <option value="1">Admin</option>
	              <option value="2">Customer</option>
	              <option value="3">CS</option>
	              <option value="4">Manajer</option>
	              <option value="5">Marketing</option>
	              
	            </select>
          	</div>
			

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>

	<?php endforeach; ?>

</div>