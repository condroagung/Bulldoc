<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Apotek
     <small>Data Obat</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Apotek</a></li>
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
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar Obat</th>
                        <th>Nama Obat</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td width="50px;"><?= $no++ ?>.</td>
                        <?php if ($data->gambar_obat) { ?>
                        <td width="100px;"><img src="<?= base_url();?>uploads/<?=$data->gambar_obat ?>" alt="gambar pasien" style="height:100px; width:100px;"></td>
                        <?php } else { ?>
                        <td width="100px;"><img src="<?= base_url('uploads/obatdefault.png')?>" alt="gambar pasien" style="height:100px; width:100px;"></td>
                        <?php } ?> 
                        <td><?= $data->nama_obat ?></td>
                        <td><?= $data->kategori_obat ?></td>
                        <td><?= "Rp ".$data->harga_obat ?></td>
                        <td><?= $data->stok_obat ?></td>
                        <td class="text-center" width="200px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#detail_obat<?php echo $data->id_obat ?>">
                            <i class ="fas fa-user-detail">
                            </i>Detail</a>
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_obat<?php echo $data->id_obat ?>">
                            <i class ="fas fa-user-edit">
                            </i>Update</a>
                            <a href="<?= base_url(); ?>obat/hapus_obat/<?= $data->id_obat ?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin ?');" ?>
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
                    <?= form_open_multipart('obat/tambah_data_obat') ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="id_obat">Id Obat</label>
                                <input type="text" name="id_obat" class="form-control" id="id_obat" value="O<?=rand(0,1000)?><?=date('Ymd')?>"required readonly>
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
                                <input type="file" name="gambar_obat" class="form-control" id="gambar_obat">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                        <?= form_close() ?>
                </div>
            </div>
        </div>
        </div>

        <?php foreach($all->result() as $key => $data) { ?>
        <div id="edit_obat<?= $data->id_obat ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Edit Data Obat</h4>
                </div>
                <?= form_open_multipart('obat/edit_data_obat') ?>
                        <div class="modal-body">
                                <input type="hidden" name="id_obat" id="id_obat" value="<?= $data->id_obat ?>" >
                            <div class="form-group">
                                <label class="control-label" for="nama_obat">Nama Obat</label>
                                <input type="text" name="nama_obat" class="form-control" id="nama_obat" value="<?= $data->nama_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="kategori_obat">Kategori Obat</label>
                                <input type="text" name="kategori_obat" class="form-control" id="kategori_obat" value="<?= $data->kategori_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="bentuk_obat">Bentuk Obat</label>
                                <input type="text" name="bentuk_obat" class="form-control" id="bentuk_obat" value="<?= $data->bentuk_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="deskripsi_obat">Deskripsi Obat</label>
                                <input type="text" name="deskripsi_obat" class="form-control" id="deskripsi_obat" value="<?= $data->deskripsi_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="dosis_obat">Dosis Obat</label>
                                <input type="text" name="dosis_obat" class="form-control" id="dosis_obat" value="<?= $data->dosis_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="aturan_obat">Aturan Pakai</label>
                                <input type="text" name="aturan_obat" class="form-control" id="aturan_obat" value="<?= $data->aturan_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="stok_obat">Stok Obat</label>
                                <input type="text" name="stok_obat" class="form-control" id="stok_obat" value="<?= $data->stok_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga_obat">Harga Obat</label>
                                <input type="text" name="harga_obat" class="form-control" id="harga_obat" value="<?= $data->harga_obat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_obat">Gambar Obat</label>
                                <input type="file" name="gambar_obat" class="form-control" value="<?= $data->gambar_obat ?>" id="gambar_obat">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <?php } ?>
</section>
</div>
