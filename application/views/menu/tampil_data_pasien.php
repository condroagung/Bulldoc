<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Rumah Sakit
     <small>Data pasien</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data pasien</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data pasien</h3>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_pasien">
                    <i class="fa fa-user-plus">Tambah Pasien</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar Pasien</th>
                        <th>Nama pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>TTL</th>
                        <th>Alamat</th>
                        <th>No_Telp</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td width="50px"><?= $no++ ?>.</td>
                        <?php if ($data->gambar_pasien) { ?>
                        <td width="100px;"><img src="<?= base_url();?>uploads/<?=$data->gambar_pasien ?>" alt="gambar pasien" style="height:100px; width:100px;"></td>
                        <?php } else { ?>
                        <td width="100px;"><img src="<?= base_url('uploads/userdefault.png')?>" alt="gambar pasien" style="height:100px; width:100px;"></td>
                        <?php } ?> 
                        <td><?= $data->nama_pasien ?></td>
                        <td><?= $data->jenis_kelamin ?></td>
                        <td><?= $data->tempat_lahir ?>, <?= date('d-m-Y', strtotime($data->tanggal_lahir)) ?></td>
                        <td><?= $data->alamat ?></td>
                        <td><?= $data->no_telp ?></td>
                        <td class="text-center" width="160px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_pasien<?= $data->id_pasien ?>">
                            <i class ="fas fa-user-edit">
                            </i>Update</a>
                            <a href="<?= base_url(); ?>pasien/hapus_pasien/<?= $data->id_pasien ?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin ?');" ?>
                            <i class ="fa fa-trash">
                            </i>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>     
    </div>

    <div id="tambah_pasien" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data pasien</h4>
                </div>
                    <?= form_open_multipart('pasien/tambah_data_pasien') ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="id_pasien">Id pasien</label>
                                <input type="text" name="id_pasien" class="form-control" id="id_pasien" value="P<?=rand(0,1000)?><?=date('Ymd')?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_pasien">Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Wanita">Wanita</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="alamat">Alamat pasien</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="no_telp">No Telp pasien</label>
                                <input type="text" name="no_telp" class="form-control" id="no_telp" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_pasien">Gambar pasien</label>
                                <input type="file" name="gambar_pasien" class="form-control" id="gambar_pasien">
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
        <div id="edit_pasien<?= $data->id_pasien ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Edit Data pasien</h4>
                </div>
                <?= form_open_multipart('pasien/edit_data_pasien') ?>
                <div class="modal-body">
                        <input type="hidden" name="id_pasien" class="form-control" id="id_pasien" value="<?= $data->id_pasien ?>"  required>
                            <div class="form-group">
                                <label class="control-label" for="nama_pasien">Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" value="<?= $data->nama_pasien ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="<?= $data->tempat_lahir ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tempat_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Wanita">Wanita</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="alamat">Alamat pasien</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $data->alamat ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="no_telp">No Telp pasien</label>
                                <input type="text" name="no_telp" class="form-control" id="no_telp" value="<?= $data->no_telp ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_pasien">Gambar pasien</label>
                                <input type="file" name="gambar_pasien" class="form-control" id="gambar_pasien">
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
</section>
</div>
<?php } ?>
