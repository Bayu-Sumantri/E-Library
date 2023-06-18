<?php

    if($this->session->userdata('id_level') == '1' || $this->session->userdata('id_level') == '2'){ ?>

      <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari Keyword" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-dark" type="submit" name="cari" id="button-addon2"><i data-feather="search"></i> Cari</button>
          </div>
        </form>

      <?php

        // $keyword = $_GET['keyword'];


      $libra = $this->db->query("SELECT * FROM jurnal WHERE judul LIKE '%$keyword%' OR tahun_rilis LIKE '%$keyword%' OR genre LIKE '%$keyword%' OR penulis LIKE '%$keyword%'")->result();


      ?>

    <?php
    } else {
      $libra = $this->db->query("SELECT * FROM jurnal LIMIT 5")->result();

    } ?>


  <?php foreach ($libra as $data) : ?>

    <div class="col-md-4">
      <div class="card mb-4">
      <img src="<?=base_url('assets/ennocuy/foto/'.$data->sampul )?>" class="card-img-top" size="10" alt="...">
      <div class="card-body">
        <h2><?= $data->judul ?></h2>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Tahun : <?= $data->tahun_rilis ?></li>
        <li class="list-group-item"><b>Genre :</b><br><?= $data->genre ?></li>
        <li class="list-group-item"><b>Penulis :</b><br><?= $data->penulis ?></li>
      </ul>
      <div class="card-footer">
      <?php echo anchor('Dash/lihat_buku/' . $data->id_buku, '<button class="btn btn-primary"><i data-feather="eye"></i> Lihat</button>'); ?>
      </div>
    </div>

    </div>

    <?php endforeach; ?>