<div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Beli Obat</a></li>
  </ol>
</nav>
</div>

<div class="container">
    <h4>Cart</h4>
    <table class="table table-bordered table-striped table-hover">
    <tr>
        <th>NO</th>
        <th>Nama Obat</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Sub Total</th>
    </tr>
    <?php $no=1; foreach($this->cart->contents() as $items) : ?>

        <tr>
            <td><?= $no++?></td>
            <td><?= $items['name']?></td>
            <td><?= $items['qty']?> items</td>
            <td>Rp.  <?= number_format($items['price'],0,',','.')?></td>
            <td>Rp.  <?= number_format($items['subtotal'],0,',','.')?></td>
        </tr>
        
    
    <?php endforeach; ?>
        
        <tr>
            <td colspan="4"></td>
            <td align="left" >Rp.  <?= number_format($this->cart->total(),0,'.','.')?></td>
        </tr>

    </table>

    <div align="right">
        <a href="<?= base_url('beli/delete_cart') ?>"><div class="btn btn-sm btn-danger">Delete Cart</div></a>
        <a href="<?= base_url('beli') ?>"><div class="btn btn-sm btn-primary">Add Another Cart Again</div></a>
        <a href="<?= base_url('beli/data_buy') ?>"><div class="btn btn-sm btn-success">Buy Now</div></a>
    </div>
</div>