
<div class="container-fluid">

  <table class=" text-center table table-bordered">
    <tr align="center">
      <th>No</th>
      <th>Pesan Bantuan</th>
      <th>Pesan Balasan</th>
      <th>Balas Pesan</th>

    </tr>

    <?php
    $no=1;
    foreach ($pesan as $ps) : ?>
    <tr align="center">
      <td><?php echo $no++ ?></td>
      <td><?php echo $ps->pesan_bantuan ?></td>
      <td><?php echo $ps->pesan_balasan ?></td>
      <td><button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pesan"><i class="fas fa-reply fa-sm"></i></button></td>
    </tr>

    <?php endforeach; ?>
  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_pesan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Pesan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/pesan/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

         <div class="form-group">
            <input type="hidden" name="id_pesan" class="form-control">
          </div>
          <div class="form-group">
            <input type="hidden" name="nama" class="form-control" value="<?php echo $ps->nama ?>">
          </div>
          <div class="form-group">
            <input type="hidden" name="email" class="form-control" value="<?php echo $ps->email ?>">
          </div>
          <div class="form-group">
            <input type="hidden" name="no_hp" class="form-control" value="<?php echo $ps->no_hp ?>">
          </div>
          <div class="form-group">
            <label>Pesan Balasan</label>
            <input type="text" name="pesan_bantuan" class="form-control">
          </div>
          <div class="form-group">
            <input type="hidden" name="pesan_balasan" class="form-control">
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