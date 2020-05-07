<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Cari Dokter</a></li>
    <li class="breadcrumb-item"><a href="#">Data Dokter</a></li>
  </ol>
</nav>

<div class="container" style="box-shadow: 0px 3px 20px rgba(0,0,0,0.1); border-radius:2px;">

    <div class="row">

    <?php foreach($all->result() as $key => $data) { ?>
    
        <div class="col-md-4">
        <div class="media">
            <?php if ($data->gambar_dokter){ ?>
            <img src="<?= base_url('uploads/') ?><?= $data->gambar_dokter ?>" style="width:126px; height:126px;" class="align-self-center mr-3" alt="...">
            <?php } else { ?>
            <img src="<?=base_url('uploads/docdefault.png')?>" style="width:126px; height:126px;" class="align-self-center mr-3" alt="...">
            <?php } ?>
                <div class="media-body">
                <h5 class="mt-0">Dr. <?= $data->nama_dokter ?></h5>
                <p class="mb-0" style="font-weight: bold;">Hari Shift : <?= $data->hari_shift ?></p>
                <p class="mb-0" style="font-weight: bold;">Jam Shift : <?= $data->jam_shift ?></p>
                </div>
        </div>
        </div>

    <?php } ?>

    </div>

</div>