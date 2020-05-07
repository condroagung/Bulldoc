<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Rumah Sakit
     <small>Data Rekam Medis</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Rumah Sakit</a></li>
     <li class="active">Data Rekam Medis</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Rekam Medis</h3>
            <div class="pull-right">
                <a href="<?php echo base_url('rekammedis/pdf_rm') ?>" class="btn btn-primary btn-flat">
                    <i class="far fa-file-pdf">  Export PDF</i>
                </a>
            </div>
            <div class="pull-right">
                <a href="<?php echo base_url('rekammedis/print_rm') ?>" class="btn btn-success btn-flat">
                    <i class="fa fa-print">  Print</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No RM</th>
                        <th>Username</th>
                        <th>Nama Dokter</th>
                        <th>Keluhan</th>
                        <th>Diagnosa</th>
                        <th>Tindakan</th>
                        <th>Tanggal kirim</th>
                    </tr>
                </thead>
                <tbody id="rm">
                    
                </tbody>
            </table>
        </div>     
    </div>

</section>

<script type="text/javascript">

    ambildata();

    function ambildata(){
        $.ajax({
            type:'POST',
            url:'<?= base_url()."rekammedis/ambil_rm" ?>',
            dataType: 'json',
            success: function(data){
                console.log(data);
                var baris='';
                var a=1;
                for(var i=0;i<data.length;i++){
                    baris += '<tr>'+
                            '<td>'+ a++ +' </td>' +
                            '<td> RM00'+ data[i].id_hasil +' </td>' +
                            '<td>'+ data[i].username +' </td>' +
                            '<td>'+ data[i].nama_dokter +' </td>' +
                            '<td>'+ data[i].keluhan +' </td>' +
                            '<td>'+ data[i].diagnosa +' </td>' +
                            '<td>'+ data[i].tindakan +' </td>' +
                            '<td>'+ data[i].tanggal_kirim +' </td>' +
                            '</tr>';
                }
                $('#rm').html(baris);
            }
        });
    }
    
</script>

</div>
