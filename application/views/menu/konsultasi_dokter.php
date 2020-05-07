<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Konsultasi Dokter</a></li>
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

      <div class="col lg">
        <div class="row">
          <div class="col-lg">
          <form action="" method="post">
            <div class="input-group mb-12 input-group-lg" style="margin-top:15px;">
            <input type="text" class="form-control" placeholder="Nama Dokter atau Spesialis" name="keyword1" autofocus>
            <div class="input-group-append">
            <button class="btn btn-success" type="submit">Cari</button>
            </div>
        </div>
        </form>
        </div>
      </div>
      <div class="row" style="margin-top:30px; margin-left:5px;">
        <?php foreach($all->result() as $key => $data) { ?>
            <div class="column" style="box-shadow: 0px 3px 20px rgba(0,0,0,0.1); border-radius:2px; width:48%;">
              <div class="media">
              <?php if ($data->gambar_dokter){ ?>
                  <img src="<?= base_url();?>uploads/<?=$data->gambar_dokter ?>" style="width:100px; height:100px; margin-left:20px;" class="align-self-center mr-2 rounded-circle">
                <?php } else { ?>
                  <img src="<?= base_url('uploads/docdefault.png')?>" style="width:100px; height:100px; margin-left:20px;" class="align-self-center mr-2 rounded-circle">
                <?php } ?>
                  <div class="media-body">
                    <h6 class="mt-0">Dr. <?= $data->nama_dokter ?></h6>
                    Dokter <?= $data->spesialis ?>
                    </div>
                  </div>
                  <hr>
                  <a href="<?= base_url(); ?>konsul/konsul_dokter_now/<?= $data->id_dokter ?>" class="btn btn-danger btn-xs" style="margin-left:300px; margin-top:-20px;" >
                  <i class="fas fa-check"></i> konsul</a>
            </div>
        <?php } ?>
      </div>
    </div>
</div>
</div>