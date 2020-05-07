<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg" style="background-image:url('<?= base_url('assets/steto.jpg');?>">

  <div class="container" style="margin-top:180px;">

    <div class="card o-hidden border-0 shadow-lg my-8">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <?= form_open_multipart('auth/register') ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username');?>">
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email');?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="pass1" name="pass1" placeholder="Password">
                    <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                    <input type="checkbox" class="form-checkbox"> Show password
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="pass2" name="pass2" placeholder="Repeat Password">
                    <input type="checkbox" class="form-checkbox1"> Show repeat password
                  </div>
                <div class="form-group row">
                  <div class="col" style="margin-top:15px; margin-left:12px;">
                    <input type="file" class="form-control form-control-user" id="image" name="image">
                  </div>
                </div>
                <button type="submit" class="btn btn-outline-success btn-user btn-block">
                  Register Account
                </button>
              <?= form_close() ?>
              <hr>
              <div class="text-center" style="margin-left:430px; margin-top:30px;">
                <a class="small" href="<?php echo base_url('auth/login');?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>

  <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('#pass1').attr('type','text');
			}else{
				$('#pass1').attr('type','password');
			}
		});
    $('.form-checkbox1').click(function(){
			if($(this).is(':checked')){
				$('#pass2').attr('type','text');
			}else{
				$('#pass2').attr('type','password');
			}
		});
	});
</script>
</body>

</html>
