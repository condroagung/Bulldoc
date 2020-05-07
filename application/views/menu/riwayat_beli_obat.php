<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Riwayat Beli Obat</a></li>
  </ol>
</nav>

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-7" style="font-family: 'Source Code Pro', monospace;">
      <h4 style="text-align:center">Riwayat Beli Obat</h4>


      <form action="<?= base_url('riwayatbeliobat'); ?>" method="post" style="width:30%;">
        <div class="input-group">
          <input type="text" class="form-control" name="keyword" placeholder="Search..." autofocus>
          <div class="input-group-append">
            <input type="submit" class="btn btn-info" name="submit">
            </div>
        </div>
      </form>

    <h5 style="margin-top:10px;">Result : <?= $total_rows; ?></h5>

      <p></p>
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>NO</th>
          <th>Id_Beli</th>
          <th>Nama Obat</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>Sub Total</th>
          <th>Tanggal_Beli</th>
      </tr>

      <?php foreach($beli->result() as $key => $data) {     
      $total=0;
      $no=1;

      ?>

        <tr>
            <td><?= ++$start?></td>
            <td>BO<?= $data->id_invoice ?></td>
            <td><?= $data->nama_obat ?></td>
            <td><?= $data->jumlah ?></td>
            <td><?= $data->harga ?></td>
            <td><?= $total = $data->jumlah*$data->harga ?></td>
            <td><?= date('d-m-Y', strtotime($data->tanggal_beli))?></td>
        </tr>
        
    <?php } ?>

    </table>

    <?= $this->pagination->create_links(); ?>

    </div>
    
    <div class="col-lg-4">
        <img src="<?= base_url('uploads/pharmacist.png') ?>" style="width:60%; height:60%; margin-top:70px; margin-left:60px;"alt="">
        <p style="font-style:italic; font-size:20px; margin-top:30px; margin-left:150px;">Ini Adalah List Pembelian Obat dari <br> 
        <span style="font-weight: bold; font-size:25px; margin-left:100px;"><?= $this->session->userdata('username') ?></span></p>
    </div>
    </div>
</div>

