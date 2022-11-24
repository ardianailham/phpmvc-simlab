<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['alat']['Nama_Alat']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['alat']['Merk']; ?></h6>
      <p class="card-text"><?= $data['alat']['Qty']; ?></p>
      <a href="<?= BASEURL; ?>/alat" class="card-link">Back</a>

    </div>
  </div>

</div>