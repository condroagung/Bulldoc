<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Cari Dokter</a></li>
  </ol>
</nav>

<div class="container">
    <div class="row">
        <h1 style="color:rgb(255, 45, 71);">Temukan Dokter yang Tepat</h1>
    </div>
    <div class="row" style="margin-top:20px;">
        <h5>Cari dan Temukan Dokter yang Tepat</h5>
    </div>
    <div class="row" style="margin-top:20px;">
        <div class="col-lg">
            <form action="" method="post">
                <div class="input-group mb-12 input-group-lg">
                <input type="text" class="form-control" placeholder="Nama Dokter atau Spesialisasi" name="keyword2" autofocus>
                <div class="input-group-append">
                <span class="input-group-text">
                <i class="fas fa-search"></i>Search</span>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="container-fluid" style=" box-shadow: 0px 3px 20px rgba(0,0,0,0.1); border-radius:2px; margin-top:30px;">
    <div class="row">
        <h2 style="margin-top:30px; margin-left:50px;">Telusuri berdasarkan Spesialisasi</h2>
        <h4 style="color:rgb(255, 45, 71); margin-top:35px; margin-left:1000px;">Lihat Semua Spesialisasi Sekarang</h4>
    </div>

    <div class="row">

    <?php foreach($spesialis->result() as $key => $data) { ?>

      <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?= base_url('uploads/doctorgigi.jpg') ?>" style="height:300px;" alt="Card image cap">
                <div class="card-body">
                  <h3 class="card-text">Spesialis <?= $data->spesialis ?></h3>
                  <p class="card-text">Spesialis Kedokteran <?= $data->spesialis ?> merupakan spesialisasi yang berfokus menangani masalahnya sendiri </p>
                  <div class="d-flex justify-content-between align-items-center">
                  <form action="caridokter/data_cari_dokter" method="post">
                      <div class="form-group">
                      <input type="hidden" name="spesialis" class="form-control" id="spesialis" value="<?= $data->spesialis ?>"  required>
                      </div>
                      <button type="submit" class="btn btn-success" style="margin-top:-30px; margin-left :200px;">Lihat Dokter</button>
                      </form>
                  </div>
                </div>
              </div>
            </div>
        <?php } ?>
      </div>
      
</div>

</div>