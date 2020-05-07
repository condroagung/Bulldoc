<div class="content-wrapper">
 
 <section class="content-header">
   <h1>
     Apotek
     <small>Detail Pembelian</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="<?php echo base_url();?>">Apotek</a></li>
     <li class="active">Detail Pembelian</li>
   </ol>
 </section>

 <?= $this->session->flashdata('flash'); ?>
<section class = "content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Detail Pembelian</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Obat</th>
                        <th>Nama Obat</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody id="detail">

                </tbody>
            </table>
        </div>     
    </div>

</section>

<script type="text/javascript">

    ambildata2();

    function ambildata2(){
        $.ajax({
            type:'POST',
            url:'<?= base_url()."cart/tampil_detail" ?>',
            dataType: 'json',
            success: function(data){
                console.log(data);
                var baris='';
                var a=1;
                for(var i=0;i<data.length;i++){
                    baris += '<tr>'+
                            '<td>'+ a++ +' </td>' +
                            '<td>'+ data[i].id_obat +' </td>' +
                            '<td>'+ data[i].nama_obat +' </td>' +
                            '<td>'+ data[i].jumlah +' </td>' +
                            '<td>'+ data[i].harga +' </td>' +
                            '</tr>';
                }
                $('#detail').html(baris);
            }
        });
    }
    
</script>
</div>