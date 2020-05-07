<div class="container-fluid">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('dashboard/index_user');?>" style="color:pinkhot;">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Beli Obat</a></li>
    <li class="breadcrumb-item"><a href="#">Bayar Obat</a></li>
    <li class="nav-item" style="margin-left:1500px; font-family: 'Merriweather', serif;
    font-family: 'Girassol', cursive;"><i class="fas fa-shopping-cart"><?php $keranjang = $this->cart->total_items().' items'?>
    <?= anchor('beli/detail_cart/', $keranjang) ?></i></li>
  </ol>
</nav>
</div>

        <div class="container">
        <div class="col-lg" style="font-family: 'Amiri', serif; font-family: 'Shadows Into Light', cursive; font-family: 'Gochi Hand', cursive; font-size:20px;">
        
        <form action="<?= base_url('beli/buy') ?>" method="post">

                            <div class="form-group">
                                <label class="control-label" for="total">Total Harga</label>
                                <input type="number" name="total" class="form-control" id="total" value="<?= $this->cart->total() ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_pembeli">Masukkan Nama Pembeli *</label>
                                <input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Alamat *</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Pilih Bank *</label>
                                    <select class="form-control" name="bank" class="form-control" id="bank" required>
                                            <option value="BNI">BNI</option>
                                            <option value="BCA">BCA</option>
                                            <option value="MANDIRI">MANDIRI</option>
                                            <option value="BRI">BRI</option>
                                            <option value="Lain-lain">Lain-lain</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">No-Rekening *</label>
                                <input type="text" name="no_rekening" class="form-control" id="no_rekening" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Cara Pengiriman *</label>
                                    <select class="form-control" name="cara_kirim" class="form-control" id="cara_kirim" required>
                                            <option value="JNE">JNE</option>
                                            <option value="TIKI">TIKI</option>
                                            <option value="POS INDONESIA">POS INDONESIA</option>
                                            <option value="GRAB">GRAB</option>
                                            <option value="GOJEK">GOJEK</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Masukkan Nominal *</label>
                                <input type="number" name="nominal" class="form-control" id="nominal" required>
                            </div>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </form>

        </div>

        </div>

