
<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_mobil"><i class="fas fa-plus fa-sm"></i> Tambah Mobil</button>

  <table class=" text-center table table-bordered">
    <tr align="center">
      <th>No</th>
      <th>Merk</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Warna</th>
      <th>Gambar</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach ($mobil as $mb) : ?>
    <tr align="center">
      <td><?php echo $no++ ?></td>
      <td><?php echo $mb->merk ?></td>
      <td><?php echo $mb->kategori ?></td>
      <td>Rp. <?php echo number_format($mb->harga, 0, ',','.') ?></td>
      <td><?php echo $mb->warna ?></td>
      <td><?php echo $mb->gambar ?></td>
      <td><?php echo anchor('admin/data_mobil/edit/' .$mb->id_mobil, '<div class="btn btn-success btn-sm"><i class="fa fa-edit" style="color : white" data-toggle="tooltip" title="Edit"></i>') ?></td>
      <td><?php echo anchor('admin/data_mobil/hapus/' .$mb->id_mobil, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" style="color : white" data-toggle="tooltip" title="Hapus"></i>') ?></td>
    </tr>

    <?php endforeach; ?>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_mobil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Mobil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_mobil/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label>ID Mobil</label>
            <input type="text" name="id_mobil" readonly class="form-control">
          </div>

          <div class="form-group">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control">
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
            <input type="number" name="harga" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Warna</label>
            <input type="text" name="warna" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" style="height: 45px;" accept="image/*" required>
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