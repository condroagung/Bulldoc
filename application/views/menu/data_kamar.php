<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Data Kamar</a></li>
  </ol>
</nav>

<div class="container">

  <div class="row">
  <?php foreach($all->result() as $key => $data) { ?>
      <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                 <?php if($data->gambar_kamar == null) { ?>
                <img class="card-img-top" src="<?= base_url('uploads/kamar.png') ?>" style="height:300px;" alt="Card image cap">
                 <?php } else { ?>
                <img class="card-img-top" src="<?= base_url() ?>uploads/<?=$data->gambar_kamar ?>" style="height:300px; alt="Card image cap">
                 <?php } ?>
                <div class="card-body">
                  <p style="font-family: 'Indie Flower', cursive; font-family: 'Shadows Into Light', cursive; font-family: 'EB Garamond', serif; font-family: 'Permanent Marker', cursive;"
                  class="card-text"><?= $data->deskripsi_kamar ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-info"><?= $data->harga_kamar ?></button>
                      <?php if($data->status_kamar == 'kosong') { ?>
                      <button type="button" class="btn btn-sm btn-danger"><?= $data->status_kamar ?></button>
                      <?php } else { ?>
                      <button type="button" class="btn btn-sm btn-success"><?= $data->status_kamar ?></button>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  <?php } ?>
      </div>
 </div>
