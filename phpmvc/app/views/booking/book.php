<div class="container mt-3">
  <h3>Booking <?= $data['booking']['Nama_Alat']; ?></h3>
  <form action="<?= BASEURL; ?>/booking/addbook" method="post">
    <input type="hidden" name="id_alat" id="id_alat" value="<?= $data['booking']['id'] ?>">
    <input type="hidden" name="status" id="status" value="1">
    <div class="mb-3">
      <label for="nama-alat">Nama Alat</label>
      <input type="text" class="form-control" id="nama-alat" name="Nama_Alat" value="<?= $data['booking']['Nama_Alat'] ?>">
    </div>
    <div class="mb-3">
      <label for="merk">Merk</label>
      <input type="text" class="form-control" id="merk" name="Merk" value="<?= $data['booking']['Merk'] ?>">
    </div>
    <div class="mb-3">
      <label for="Qty">Qty</label>
      <input type="number" class="form-control" min="1" max="<?= $data['booking']['Qty']; ?>" id="Qty" name="Qty" value="<?= $data['booking']['Qty'] ?>">
    </div>
    <div class="mb-3">
      <label for="start_date">Start Date</label>
      <input type="datetime-local" class="form-control" name="start_date" id="start_date">
    </div>
    <div class="mb-3">
      <label for="end_date">End Date</label>
      <input type="datetime-local" class="form-control" name="end_date" id="end_date">
    </div>
    <button type="submit" class="btn btn-primary submit" id="submit">Book</button>
  </form>
</div>
<?php //var_dump($data['bookinginfo']);
