
<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_promo"><i class="fas fa-plus fa-sm"></i> Tambah Promo</button>

  <table class=" text-center table table-bordered">
    <tr align="center">
      <th>No</th>
      <th>Gambar</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach ($promo as $pr) : ?>
    <tr align="center">
      <td><?php echo $no++ ?></td>
      <td><?php echo $pr->gambar ?></td>
      


      <td><?php echo anchor('admin/data_promo/edit/' .$pr->id_promo, '<div class="btn btn-success btn-sm"><i class="fa fa-edit" style="color : white" data-toggle="tooltip" title="Edit"></i>') ?></td>
      <td><?php echo anchor('admin/data_promo/hapus/' .$pr->id_promo, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash" style="color : white" data-toggle="tooltip" title="Hapus"></i>') ?></td>
    </tr>

    <?php endforeach; ?>
  </table>
</div>