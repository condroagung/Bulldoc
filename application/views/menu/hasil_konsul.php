<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Hasil Konsul</a></li>
  </ol>
</nav>

<div class="container-fluid">
    <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-4">
    <img src="<?= base_url('uploads/konsultasi.png') ?>" alt="" style="width:70%; height:70%; margin-left:50px;">
    <p style="font-style:italic; font-size:20px; margin-top:20px; margin-left:20px;">Cek Hasil Konsultasi Mu Sekarang <br>
    <span style="font-weight: bold; margin-left:100px; font-size:25px;"> <?= $this->session->userdata('username') ?></span></p>
    </div>

    <div class="col-lg-6" style="font-family: 'Source Code Pro', monospace;">
    <h4 style="text-align:center">Hasil Konsul</h4>

    <form action="<?= base_url('dashboard/hasil_konsul'); ?>" method="post" style="width:30%;">
        <div class="input-group">
          <input type="text" class="form-control" name="keyword1" placeholder="Search..." autofocus>
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
        <th>Nama Dokter</th>
        <th>Keluhan</th>
        <th>Diagnosa</th>
        <th>Tindakan</th>
        <th>Tanggal Konsul</th>
    </tr>
    <?php $no=1;  foreach($all->result() as $key => $data) { ?>

        <tr>
            <td><?= ++$start?></td>
            <td><?= $data->nama_dokter ?></td>
            <td><?= $data->keluhan ?></td>
            <td><?= $data->diagnosa ?></td>
            <td><?= $data->tindakan?></td>
            <td><?= date('d-m-Y', strtotime($data->tanggal_kirim))?></td>
        </tr>
        
    <?php } ?>

    </table>

    <?= $this->pagination->create_links(); ?>

    </div>
    </div>
</div>