<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Rumah Sakit
     <small>Data kamar</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data kamar</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data kamar</h3>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_kamar">
                    <i class="fa fa-user-plus">Tambah Kamar</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama kamar</th>
                        <th>Jenis_Kamar</th>
                        <th>Status_Kamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $data->nama_kamar ?></td>
                        <td><?= $data->jenis_kamar ?></td>
                        <td><?= $data->status_kamar ?></td>
                        <td class="text-center" width="160px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_kamar<?php echo $data->id_kamar ?>">
                            <i class ="fas fa-user-edit">
                            </i>Update</a>
                            <a href="<?= base_url(); ?>kamar/hapus_kamar/<?= $data->id_kamar ?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin ?');" ?>
                            <i class ="fa fa-trash">
                            </i>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>     
    </div>

    <div id="tambah_kamar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data kamar</h4>
                </div>
                    <?= form_open_multipart('kamar/tambah_data_kamar') ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="id_kamar">Id kamar</label>
                                <input type="text" name="id_kamar" class="form-control" id="id_kamar" value="K<?=rand(0,1000)?><?=date('Ymd')?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_kamar">Nama kamar</label>
                                <input type="text" name="nama_kamar" class="form-control" id="nama_kamar" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="deskripsi_kamar">Deskripsi kamar</label>
                                <textarea name="deskripsi_kamar" class="form-control" id="deskripsi_kamar" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga_kamar">Harga Kamar</label>
                                <input type="text" name="harga_kamar" class="form-control" id="harga_kamar" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="jenis_kamar">Jenis kamar</label>
                                <input type="text" name="jenis_kamar" class="form-control" id="jenis_kamar" required>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Status Kamar</label>
                                    <select class="form-control" name="status_kamar" class="form-control" id="status_kamar" required>
                                            <option selected>Pilih Salah Satu</option>
                                            <option value="kosong">Kosong</option>
                                            <option value="terisi">Terisi</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_kamar">Gambar kamar</label>
                                <input type="file" name="gambar_kamar" class="form-control" id="gambar_kamar">
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

        <?php foreach($all->result() as $key => $data) { ?>
        <div id="edit_kamar<?= $data->id_kamar ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Edit Data kamar</h4>
                </div>
                    <?= form_open_multipart('kamar/edit_kamar') ?>
                        <div class="modal-body">
                            <input type="hidden" class="form-control" name="id_kamar" id="id_kamar" value="<?= $data->id_kamar ?>"  required>
                            <div class="form-group">
                                <label class="control-label" for="nama_kamar">Nama kamar</label>
                                <input type="text" name="nama_kamar" class="form-control" id="nama_kamar" value="<?= $data->nama_kamar ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_kamar">Deskripsi kamar</label>
                                <textarea name="deskripsi_kamar" class="form-control" id="deskripsi_kamar" value="<?= $data->deskripsi_kamar ?>" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga_kamar">Harga Kamar</label>
                                <input type="text" name="harga_kamar" class="form-control" id="harga_kamar" value="<?= $data->harga_kamar ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="jenis_kamar">Jenis kamar</label>
                                <input type="text" name="jenis_kamar" class="form-control" id="jenis_kamar" value="<?= $data->jenis_kamar ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Status Kamar</label>
                                    <select class="form-control" name="status_kamar" class="form-control" id="status_kamar" required>
                                            <option value="kosong">Kosong</option>
                                            <option value="terisi">Terisi</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_kamar">Gambar kamar</label>
                                <input type="file" name="gambar_kamar" class="form-control" id="gambar_kamar" value="<?= $data->gambar_kamar?>">
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
