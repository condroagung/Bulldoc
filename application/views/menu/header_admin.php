<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link href="<?php echo base_url();?>fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url('dashboard');?>" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Bull</b>DOC</span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url();?>uploads/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?= base_url();?>uploads/admin.png" class="img-circle" alt="User Image">
                <p style="color:black;">
                  Admin
                  <small>Member since Dec. 2019</small>
                </p>
              </li>
     
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('auth/logout');?>" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <section class="sidebar">
   
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url();?>uploads/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="margin-top:10px;">MAIN NAVIGATION</li>
        <li class="active treeview" style="margin-top:10px;">
          <a href="#">
          <i class="fas fa-columns"></i> <span style="margin-left:5px;">Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-clinic-medical"></i> <span style="margin-left:5px;">Apotek</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('obat');?>"><i class="fas fa-first-aid"></i> <span style="margin-left:5px;">Obat</span></a></li>
            <li><a href="<?php echo base_url('cart');?>"><i class="fas fa-notes-medical"></i><span style="margin-left:10px;">Pembelian</span></a></li></a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-notes-medical"></i> <span style="margin-left:5px;">Rumah Sakit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pasien');?>"><i class="fas fa-user-injured"></i> <span style="margin-left:5px;">Pasien</span></li>
            <li><a href="<?php echo base_url('kamar');?>"><i class="fas fa-procedures"></i> <span style="margin-left:5px;">Kamar</span></li>
            <li><a href="<?php echo base_url('dokter');?>"><i class="fas fa-user-md"></i> <span style="margin-left:5px;">Dokter</span></a></li>
            <li><a href="<?php echo base_url('poli');?>"><i class="far fa-id-card"></i> <span style="margin-left:5px;">Poliklinik</span></a></li>
            <li><a href="<?php echo base_url('konsul/data_konsul');?>"><i class="far fa-id-card"></i> <span style="margin-left:5px;">Konsultasi</span></a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('rekammedis');?>"><i class="fa fa-book"></i> <span>Rekam Medis</span></a></li>
        <li class="header">SYNC</li>
        <li><a href="<?php echo base_url('auth/logout');?>"><i class="fas fa-sign-out-alt"></i> <span>LogOut</span></a></li>
      </ul>
    </section>
  </aside>