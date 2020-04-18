<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Rumah Sakit
     <small>Data Pasien</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data Pasien</li>
   </ol>
 </section>



<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pasien</h3>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus">Tambah Pasien</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No Telp.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1;
                    foreach($all->result() as $key => $data) { ?>
                    <tr>
                        <td><?= $no++ ?>.</td>
                        <td><?= $data->nama_pasien ?></td>
                        <td><?= $data->jenis_kelamin ?></td>
                        <td><?= $data->tanggal_lahir ?></td>
                        <td><?= $data->alamat ?></td>
                        <td><?= $data->no_telp ?></td>
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
</section>

</div>