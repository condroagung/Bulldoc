<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Apotek
     <small>Data Obat</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data Obat</li>
   </ol>
 </section>


 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Obat</h3>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_obat">
                    <i class="fa fa-user-plus">Tambah Obat</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Obat</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Dosis</th>
                        <th>Aturan Pakai</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $data->nama_obat ?></td>
                        <td><?= $data->kategori_obat ?></td>
                        <td><?= $data->deskripsi_obat ?></td>
                        <td><?= $data->dosis ?></td>
                        <td><?= $data->aturan_pakai ?></td>
                        <td><?= $data->stok_obat ?></td>
                        <td class="text-center" width="160px">
                            <a href="#" class="btn btn-primary btn-xs">
                            <i class ="fa fa-pencil">
                            </i>Update</a>
                            <a href="#" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin ?')">
                            <i class ="fa fa-trash">
                            </i>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>     
    </div>

    <div id="tambah_obat" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data Obat</h4>
                </div>
                <form method="post" enctype="multipart/form-data" id="tambah_obat_form">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="nama_obat">Nama Obat</label>
                                <input type="text" name="nama_obat" class="form-control" id="nama_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="kategori_obat">Kategori Obat</label>
                                <input type="text" name="kategori_obat" class="form-control" id="kategori_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="bentuk_obat">Bentuk Obat</label>
                                <input type="text" name="bentuk_obat" class="form-control" id="bentuk_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="deskripsi_obat">Deskripsi Obat</label>
                                <input type="text" name="deskripsi_obat" class="form-control" id="deskripsi_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dosis_obat">Dosis Obat</label>
                                <input type="text" name="dosis_obat" class="form-control" id="dosis_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="aturan_obat">Aturan Pakai</label>
                                <input type="text" name="aturan_obat" class="form-control" id="aturan_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="stok_obat">Stok Obat</label>
                                <input type="text" name="stok_obat" class="form-control" id="stok_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga_obat">Harga Obat</label>
                                <input type="text" name="harga_obat" class="form-control" id="harga_obat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_obat">Gambar Obat</label>
                                <input type="file" name="gambar_obat" class="form-control" id="gambar_obat" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" id="tambah_data_obat" onclick="tambah_data_obat_all()" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
</div>