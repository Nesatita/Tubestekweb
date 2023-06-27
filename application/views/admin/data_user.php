
<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_user"><i class="fas fa-plus fa-sm"></i> Tambah User</button>

  <table class=" text-center table table-bordered">
    <tr align="center">
      <th>No</th>
      <th>Nama User</th>
      <th>Username</th>
      <th>Email</th>
      <th>Nomor HP</th>
      <th>Status</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach ($user as $us) : ?>
    <tr align="center">
      <td><?php echo $no++ ?></td>
      <td><?php echo $us->nama_user ?></td>
      <td><?php echo $us->username ?></td>
      <td><?php echo $us->email ?></td>
      <td><?php echo $us->no_hp ?></td>
      <?php  if($us->role_id == '1' ){?>
        <td><?php echo "Admin"?></td>
      <?php } elseif ($us->role_id == '2' ){?>
        <td><?php echo "Customer"?></td>
      <?php } elseif ($us->role_id == '3' ){?>
        <td><?php echo "CS"?></td>
      <?php } elseif ($us->role_id == '4' ){?>
        <td><?php echo "Manajer"?></td>
      <?php } elseif ($us->role_id == '5' ){?>
        <td><?php echo "Marketing"?></td>
      <?php }?>
      


      <td><?php echo anchor('admin/data_user/edit/' .$us->id_user, '<div class="btn btn-success btn-sm"><i class="fa fa-edit" style="color : white" data-toggle="tooltip" title="Edit"></i>') ?></td>
      <td><?php echo anchor('admin/data_user/hapus/' .$us->id_user, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" style="color : white" data-toggle="tooltip" title="Hapus"></i>') ?></td>
    </tr>

    <?php endforeach; ?>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_user/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label>ID User</label>
            <input type="text" name="id_user" readonly class="form-control">
          </div>

          <div class="form-group">
            <label>Nama User</label>
            <input type="text" name="nama_user" class="form-control">
          </div>

          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control">
          </div>

          <div class="form-group">
            <label>Status</label>
             <select class="form-control" name="role_id">
              <option value="1">Admin</option>
              <option value="3">CS</option>
              <option value="4">Manajer</option>
              <option value="5">Marketing</option>
              
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>