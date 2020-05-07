<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Rumah Sakit
     <small>Data dokter</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data dokter</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data dokter</h3>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#tambah_dokter">
                    <i class="fa fa-user-plus">Tambah Dokter</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar Dokter</th>
                        <th>Id Poli</th>
                        <th>Nama Dokter</th>
                        <th>Jenis Kelamin</th>
                        <th>Spesialis</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td width="50px"><?= $no++ ?>.</td>
                        <?php if ($data->gambar_dokter) { ?>
                        <td width="100px;"><img src="<?= base_url();?>uploads/<?=$data->gambar_dokter ?>" alt="gambar pasien" style="height:100px; width:100px;"></td>
                        <?php } else { ?>
                        <td width="100px;"><img src="<?= base_url('uploads/docdefault.png')?>" alt="gambar pasien" style="height:100px; width:100px;"></td>
                        <?php } ?> 
                        <td><?= $data->id_poli ?></td>
                        <td><?= $data->nama_dokter ?></td>
                        <td><?= $data->jenis_kelamin ?></td>
                        <td><?= $data->spesialis ?></td>
                        <td class="text-center" width="160px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit_dokter<?php echo $data->id_dokter ?>">
                            <i class ="fas fa-user-edit">
                            </i>Update</a>
                            <a href="<?= base_url(); ?>dokter/hapus_dokter/<?= $data->id_dokter ?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin ?');" ?>
                            <i class ="fa fa-trash">
                            </i>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>     
    </div>

    <div id="tambah_dokter" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data dokter</h4>
                </div>
                    <?= form_open_multipart('dokter/tambah_data_dokter') ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="id_dokter">Id Dokter</label>
                                <input type="text" name="id_dokter" class="form-control" id="id_dokter" value="D<?=rand(0,1000)?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Id Poli</label>
                                    <select class="form-control" name="id_poli" class="form-control" id="id_poli" required>
                                        <?php foreach($only->result() as $key => $data1) { ?>
                                            <option value="<?= $data1->id_poli ?>"><?= $data1->id_poli ?>-<?= $data1->nama_poli?></option>
                                        <?php } ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="nama_dokter">Nama dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" id="nama_dokter" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="kategori_dokter">Spesialis</label>
                                <input type="text" name="spesialis" class="form-control" id="spesialis" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Wanita">Wanita</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="Hari_shift">Hari Shift</label>
                                    <select class="form-control" name="hari_shift" class="form-control" id="hari_shift" required>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Jam_shift">Jam Shift</label>
                                <input type="text" name="jam_shift" class="form-control" id="jam_shift" placeholder="01.00-03.00, 12.00-23.00" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="gambar_dokter">Gambar dokter</label>
                                <input type="file" name="gambar_dokter" class="form-control" id="gambar_dokter">
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
        <div id="edit_dokter<?= $data->id_dokter ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Edit Data dokter</h4>
                </div>
                <?= form_open_multipart('dokter/edit_data_dokter') ?>
                <div class="modal-body">
                            <input type="hidden" name="id_dokter" class="form-control" id="id_dokter" value="<?= $data->id_dokter ?>"  required>
                            <input type="hidden" name="id_poli" class="form-control" id="id_poli" value="<?= $data->id_poli ?>"  required>
                            <div class="form-group">
                                <label class="control-label" for="nama_dokter">Nama dokter</label>
                                <input type="text" name="nama_dokter" class="form-control" id="nama_dokter" value="<?= $data->nama_dokter ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="spesialis">Spesialis</label>
                                <input type="text" name="spesialis" class="form-control" id="spesialis" value="<?= $data->spesialis ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Wanita">Wanita</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="hari_shift">Hari Shift</label>
                                <select class="form-control" name="hari_shift" class="form-control" id="hari_shift" required>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="jam_shift">Jam Shift</label>
                                <input type="text" name="jam_shift" class="form-control" id="jam_shift" value="<?= $data->jam_shift ?>" required>
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
