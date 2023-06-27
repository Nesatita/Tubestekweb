
<div class="container-fluid">

  <table class=" text-center table table-bordered">
    <tr align="center">
      <th>No</th>
      <th>Nama Pemesanan</th>
      <th>Alamat</th>
      <th>No HP</th>
      <th>Merk Mobil</th>
      <th>Harga</th>


    </tr>

    <?php
    // echo site_url('tampil_data');
    $no=1;
    foreach ($pesanan as $ps) : ?>
    <tr align="center">
      <td><?php echo $no++ ?></td>
      <td><?php echo $ps->nama ?></td>
      <td><?php echo $ps->alamat ?></td>
      <td><?php echo $ps->no_hp ?></td>
      <td><?php echo $ps->merk ?></td>
      <td>Rp. <?php echo number_format($ps->harga, 0, ',','.') ?></td>
    </tr>

    <?php endforeach; ?>
  </table>
</div>
