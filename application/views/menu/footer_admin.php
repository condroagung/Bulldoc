<footer class="main-footer" >
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2020 BULLDOC.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>

<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>

<script type="text/javascript" languange="javascript">

$( document ).ready(function() {
        function tambah_data_obat_all(){

            var nama_obat=$('#nama_obat').val();
            var kategori_obat=$('#kategori_obat').val();
            var bentuk_obat=$('#bentuk_obat').val();
            var deskripsi_obat=$('#deskripsi_obat').val();
            var dosis_obat=$('#dosis_obat').val();
            var aturan_obat=$('#aturan_obat').val();
            var stok_obat=$('#stok_obat').val();
            var harga_obat=$('#harga_obat').val();
            var gambar_obat=$('#gambar_obat').val().split('.').pop().toLowerCase();

            $.ajax({

                url:"<?= base_url('dashboard/tambah_data_obat');?>",
                type:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data){
                    alert(data);
                    $('$tambah_obat_form')[0].reset();
                    $('$tambah_obat').modal('hide');
                    dataTable.ajax.reload();
                    console.log('sukses');
                }
            });
        };
      });
</script>

</body>
</html>
