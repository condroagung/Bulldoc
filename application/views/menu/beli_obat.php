<div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Beli Obat</a></li>
    <li class="nav-item" style="margin-left:1500px; font-family: 'Merriweather', serif;
    font-family: 'Girassol', cursive;"><i class="fas fa-shopping-cart"><?php $keranjang = $this->cart->total_items().' items'?>
    <?= anchor('beli/detail_cart/', $keranjang) ?></i></li>
  </ol>
</nav>
</div>

<?= $this->session->flashdata('flash'); ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg">
        <form action="" method="post" style="width:65%; margin-left:320px;">
        <div class="input-group mb-12 input-group-lg">
            <input type="text" class="form-control" placeholder="Obat atau Vitamin" name="keyword" autofocus>
            <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
        </form>
        </div>
    </div>
</div>

<div class="container" style="margin-top:50px;">
<div class="row">

<?php foreach($all->result() as $key => $data) { ?>

    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <?php if($data->gambar_obat) { ?>
            <img src="<?= base_url();?>uploads/<?= $data->gambar_obat ?>" style="height:220px;" class="card-img-top" alt="...">
            <?php } else { ?>
            <img src="<?= base_url('uploads/obatdefault.png') ?>" style="height:220px;" class="card-img-top" alt="...">
            <?php } ?>
            <div class="card-body">
              <h3 class="card-text"><?= $data->nama_obat ?></h3>
              <h5 >Kategori : <span style="font-style:italic; font-size:17px;"><?= $data->kategori_obat ?></span></h5>
              <div class="d-flex justify-content-between align-items-center">
              <button class="btn btn-sm btn-success">Rp. <?= number_format($data->harga_obat),0,',','.' ?></button>
              <a href="<?= base_url(); ?>beli/add_cart/<?= $data->id_obat ?>" class="btn btn-sm btn-primary">Add to Cart</a>
              <a data-toggle="modal" data-target="#detail_obat<?php echo $data->id_obat ?>" class="btn btn-sm btn-info">Detail</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
</div>
</div>




<?php foreach($all->result() as $key => $data) { ?>
<div id="detail_obat<?php echo $data->id_obat ?>" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Nama Obat : <?= $data->nama_obat ?></h6>
        <h6>Kategori : <?= $data->kategori_obat ?></h6>
        <h6>Deskripsi : <?= $data->deskripsi_obat ?></h6>
        <h6>Bentuk Obat : <?= $data->bentuk_obat ?></h6>
        <h6>Dosis : <?= $data->dosis_obat ?></h6>
        <h6>Aturan Pemakaian : <?= $data->aturan_obat ?></h6>
        <h6>Stok Tersisa : <?= $data->stok_obat ?> items</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>