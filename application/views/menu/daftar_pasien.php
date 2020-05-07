<nav aria-label="breadcrumb" style="margin-top:-20px;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Daftar Pasien</a></li>
  </ol>
</nav>

<div class="container-fluid" style="margin-top:16px;">

    <div class="row h-100">

        <div class="col-lg-5">

            <div class="row justify-content-center">
        
            <h3 style="margin-left:20px; font-family: 'Amiri', serif;">Selamat Datang, Silakan Mendaftar Terlebih Dahulu</h3>

            </div>

            <div class="row justify-content-center">
            
            <img src="<?= base_url('uploads/nurse.png') ?>" style="height:300px; width:300px;" alt="">

            </div>

            <div class="row justify-content-center">
            
            <h4 style="font-family: 'Amiri', serif; font-family: 'Shadows Into Light', cursive; margin-top:15px;">Mari Sehat Bersama Kami</h4>

            </div>

        </div>

        <div class="col-lg" style="font-family: 'Amiri', serif; font-family: 'Shadows Into Light', cursive; font-family: 'Gochi Hand', cursive; font-size:20px;">
        
        <form action="<?= base_url('daftarpasien/daftar_pasien') ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="control-label" for="id_pasien">Masukkan Id Pasien *</label>
                                <input type="text" name="id_pasien" class="form-control" id="id_pasien" required value="P<?=rand (0,1000).date('Ymd')?> " readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_pasien">Masukkan Nama Pasien *</label>
                                <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Masukkan Tempat Lahir *</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Masukkan Tanggal Lahir *</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin *</label>
                                    <select class="form-control" name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Wanita">Wanita</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="alamat">Masukkan Alamat *</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="no_telp">Masukkan Nomor Telepon *</label>
                                <input type="text" name="no_telp" class="form-control" id="no_telp" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_pasien">Gambar pasien</label>
                                <input type="file" name="gambar_pasien2" class="form-control" id="gambar_pasien">
                            </div>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </form>

        </div>

    </div>
</div>