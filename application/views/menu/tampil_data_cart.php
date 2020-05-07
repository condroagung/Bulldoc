<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Apotek
     <small>Data Pembelian</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Apotek</a></li>
     <li class="active">Data Pembelian</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pembelian</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Beli</th>
                        <th>Username</th>
                        <th>Nama Pembeli</th>
                        <th>Alamat</th>
                        <th>Bank</th>
                        <th>Pengiriman</th>
                        <th>Harga Total</th>
                        <th>Tanggal</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody id="beli">

                </tbody>
            </table>
        </div>     
    </div>

</section>

<script type="text/javascript">

    ambildata1();

    function ambildata1(){
        $.ajax({
            type:'POST',
            url:'<?= base_url()."cart/tampil_cart" ?>',
            dataType: 'json',
            success: function(data){
                console.log(data);
                var baris='';
                var a=1;
                for(var i=0;i<data.length;i++){
                    baris += '<tr>'+
                            '<td>'+ a++ +' </td>' +
                            '<td> P00'+ data[i].id +' </td>' +
                            '<td>'+ data[i].username +' </td>' +
                            '<td>'+ data[i].nama_pembeli +' </td>' +
                            '<td>'+ data[i].alamat +' </td>' +
                            '<td>'+ data[i].bank +' </td>' +
                            '<td>'+ data[i].cara_kirim +' </td>' +
                            '<td>'+ data[i].nominal +' </td>' +
                            '<td>'+ data[i].tanggal_invoice +' </td>' +
                            '<td> <a href="<?= base_url(); ?>cart/detail_beli/' + data[i].id + '" class="btn btn-primary btn-xs" <i class="fas fa-info"></i>Detail</a></td>' +
                            '</tr>';
                }
                $('#beli').html(baris);
            }
        });
    }
    
</script>
</div>
