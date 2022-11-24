<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['booking']['id_alat']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['booking']['start_date']; ?></h6>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['booking']['end_date']; ?></h6>
      <p class="card-text"><?= $data['Data']['Qty']; ?></p>
      <a href="<?= BASEURL; ?>/alat" class="card-link">Back</a>
      <?php var_dump($data); ?>
    </div>
  </div>

</div>