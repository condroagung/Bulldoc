<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Rumah Sakit
     <small>Data Poli</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data Poli</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Poli</h3>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_poli">
                    <i class="fa fa-user-plus">Tambah Poli</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Poli</th>
                        <th>Gedung</th>
                        <th>Lantai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $data->nama_poli ?></td>
                        <td><?= $data->gedung ?></td>
                        <td><?= $data->lantai ?></td>
                        <td class="text-center" width="160px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_poli<?php echo $data->id_poli ?>">
                            <i class ="fas fa-user-edit">
                            </i>Update</a>
                            <a href="<?= base_url(); ?>poli/hapus_data_poli/<?= $data->id_poli ?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin ?');" ?>
                            <i class ="fa fa-trash">
                            </i>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>     
    </div>

    <div id="tambah_poli" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data Obat</h4>
                </div>
                    <?= form_open_multipart('poli/tambah_data_poli') ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="id_poli">Id Poli</label>
                                <input type="text" name="id_poli" class="form-control" id="id_poli" value="DP<?=rand(0,100)?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_poli">Nama Poli</label>
                                <input type="text" name="nama_poli" class="form-control" id="nama_poli" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gedung">Gedung</label>
                                <input type="text" name="gedung" class="form-control" id="gedung" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="lantai">Lantai</label>
                                <input type="text" name="lantai" class="form-control" id="lantai" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_poli">Gambar Poli</label>
                                <input type="file" name="gambar_poli" class="form-control" id="gambar_poli">
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

        <?php
        foreach($all->result() as $key => $data) { ?>
        <div id="edit_poli<?php echo $data->id_poli ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data Obat</h4>
                </div>
                    <?= form_open_multipart('poli/edit_data_poli') ?>
                        <div class="modal-body">
                        <input type="hidden" class="form-control" name="id_poli" id="id_poli" value="<?= $data->id_poli ?>"  required>
                            <div class="form-group">
                                <label class="control-label" for="nama_poli">Nama Poli</label>
                                <input type="text" name="nama_poli" class="form-control" id="nama_poli" value="<?= $data->nama_poli ?>"  required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gedung">Gedung</label>
                                <input type="text" name="gedung" class="form-control" id="gedung" value="<?= $data->gedung ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="lantai">Lantai</label>
                                <input type="text" name="lantai" class="form-control" id="lantai" value="<?= $data->lantai ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_poli">Gambar Poli</label>
                                <input type="file" name="gambar_poli" class="form-control" id="gambar_poli" value="<?= base_url();?>uploads/<?=$data->gambar_poli?>">
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
</section>
</div>
<?php } ?>
