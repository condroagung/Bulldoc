<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Rumah Sakit
     <small>Data konsul</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data konsul</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Konsul</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Periksa</th>
                        <th>Username</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Keluhan</th>
                        <th>Tanggal Periksa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td>P00<?= $data->id_periksa ?></td>
                        <td><?= $data->username ?></td>
                        <td><?= $data->nama_dokter ?></td>
                        <td><?= $data->spesialis ?></td>
                        <td><?= $data->keluhan ?></td>
                        <td><?= date('d-m-Y', strtotime($data->tanggal_periksa))?></td>
                        <td class="text-center" width="160px">
                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#tambah_hasil<?php echo $data->id_periksa ?>">
                            <i class ="fas fa-user-edit">
                            </i>Balas</a>
                            <a href="<?= base_url(); ?>konsul/hapus_konsul/<?= $data->id_periksa ?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah anda yakin ?');" ?>
                            <i class ="fa fa-trash">
                            </i>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>     
    </div>

    <?php foreach($all->result() as $key => $data) { ?>
    <div id="tambah_hasil<?php echo $data->id_periksa ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Tambah Data konsul</h4>
                </div>
                    <?= form_open_multipart('konsul/tambah_hasil_konsul') ?>
                        <div class="modal-body">
                            <input type="hidden" name="id_periksa" id="id_periksa" value="<?= $data->id_periksa ?>">
                            <div class="form-group">
                                <label class="control-label" for="diagnosa">Diagnosa</label>
                                <input type="text" name="diagnosa" class="form-control" id="diagnosa" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tindakan">Tindakan</label>
                                <input type="text" name="tindakan" class="form-control" id="tindakan" required>
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
        <?php } ?>
    
</section>
</div>
