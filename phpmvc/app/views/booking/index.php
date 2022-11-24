<div class="container mt-3">
  <div class="row d-flex justify-content-center">
    <div class="col-lg-8">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-lg-8">
      <h3 class="mt-3">Daftar Booking</h3>
      <table class="table table-bordered table-responsive table-striped" cellpadding="10" cellspacing="0">
        <thead>
          <tr cellpadding="10" cellspacing="0">
            <th>No</th>
            <th>Nama Alat</th>
            <th>Jumlah</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach ($data['booking'] as $booking) : ?>
          <tr cellpadding="10" cellspacing="0">
            <td><?= $i; ?></td>
            <td><?= $booking['id_alat']; ?></td>
            <td><?= $booking['user_id']; ?></td>
            <td><?= $booking['Qty']; ?></td>
            <td><?= $booking['start_date']; ?></td>
            <td><?= $booking['end_date']; ?></td>
            <td><?= $booking['status']; ?></td>

            <td>
              <a href="<?= BASEURL; ?>/booking/hapus/<?= $booking['id_alat']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">hapus</a>
              <a href="<?= BASEURL; ?>/booking/detail/<?= $booking['id_alat']; ?>" class="badge text-bg-primary float-end ms-1">ubah</a>

            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>


      </table>
    </div>
  </div>
</div>