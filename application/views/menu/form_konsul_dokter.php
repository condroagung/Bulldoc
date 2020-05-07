<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/konsultasi_dokter');?>">Konsultasi Dokter</a></li>
    <li class="breadcrumb-item"><a href="#">Daftar Konsultasi</a></li>
  </ol>
</nav>

<div class="container-fluid" style="margin-top:-16px;">
    <div class="row h-100">
      <div class="col lg-5">
        <div class="row justify-content-center" style="margin-top:10px;">
            <div class="column">
                <h6>Konsultasi dengan dokter terpercaya sekarang</h6>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="column">
                <p><span style="color:blue;">Syarat dan Ketentuan </span>konsultasi berlaku</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="column">
                <img src="<?= base_url('uploads/ask.png');?>" style="width:256px; height:256px;"alt="">
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top:30px;">
            <div class="column">
                <h6>Dokter akan menerima dan mengirim hasil konsultasi mu secepat mungkin</h6>
            </div>
        </div>
        <div class="row" style="margin-top:30px; margin-left:15px;">
            <div class="column">
                <h6>Kami Pastikan</h6>
            </div>
        </div>
        <div class="row" style="margin-top:30px; margin-left:15px;">
            <div class="column">
              <div class="media">
                  <img src="<?= base_url('uploads/doctor_1.png');?>" style="width:32px; height:32px;" class="align-self-center mr-3" alt="...">
                  <div class="media-body">
                    <h6 class="mt-0">Profesional</h6>
                    Dokter berpengalaman dan terverifikasi dengan beragam pilihan dokter umum dan dokter spesialis di seluruh Indonesia
                    </div>
                  </div>  
            </div>
        </div>
        <div class="row" style="margin-top:30px; margin-left:15px;">
            <div class="column">
              <div class="media">
                  <img src="<?= base_url('uploads/lock.png');?>" style="width:32px; height:32px;" class="align-self-center mr-3" alt="...">
                  <div class="media-body">
                    <h6 class="mt-0">Safety</h6>
                    Data anda dengan dokter akan lebih terjaga
                    </div>
                  </div>  
            </div>
        </div>
        <div class="row" style="margin-top:30px; margin-left:15px;">
            <div class="column">
              <div class="media">
                  <img src="<?= base_url('uploads/chat.png');?>" style="width:32px; height:32px;" class="align-self-center mr-3" alt="...">
                  <div class="media-body">
                    <h6 class="mt-0">Communication</h6>
                    Dapatkan penjelasan dan saran medis yang akurat dan dapat dipercaya
                    </div>
                  </div>  
            </div>
        </div>
      </div>

      <div class="col-lg-4" style="margin-top:30px; margin-left:5px; box-shadow: 0px 3px 20px rgba(0,0,0,0.1); border-radius:2px; ">
        <div class="row">
             <h4 style="margin-left:30px;">Rincian</h4>
        </div>
        <div class="row " style="margin-top:15px;">
        <?php foreach($all->result() as $key => $data) { ?>
            <div class="column">
              <div class="media">
                  <?php if($data->gambar_dokter == null) { ?>
                  <img src="<?= base_url('uploads/docdefault.png');?>" style="width:100px; height:100px; margin-left:30px;" class="align-self-center mr-2 rounded-circle">
                  <?php } else { ?>
                    <img src="<?= base_url();?>uploads/<?=$data->gambar_dokter ?>" style="width:100px; height:100px; margin-left:30px;" class="align-self-center mr-2 rounded-circle">
                  <?php } ?>
                  <div class="media-body">
                    <h6 class="mt-0">Dr. <?= $data->nama_dokter ?></h6>
                    <span >Dokter <?= $data->spesialis ?></span>
                    </div>
                  </div>
            </div>   
        </div>
        <h6 style="margin-left:25px; margin-top:50px;"> Promo Konsultasi Gratis </h6>
        <div class="row" style="margin-top:30px; margin-left:5px;">
            <div class="col-lg-7">
            <?= form_open_multipart('konsul/tambah_konsul') ?>
                            <input type="hidden" name="id_dokter" id="id_dokter" value="<?= $data->id_dokter ?>" >
                            <div class="form-group">
                                <label class="control-label" for="id_kamar" style="font-family: 'Baloo Bhaina 2', cursive;;">Keluhan</label>
                                <textarea name="keluhan" class="form-control" id="keluhan" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                    <?= form_close() ?>
            </div>
      </div>
      <?php } ?>  
      </div>
      <div class="col-lg-1">
      </div>
</div>
</div>