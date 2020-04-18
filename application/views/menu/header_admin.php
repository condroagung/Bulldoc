<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <link href="<?php echo base_url();?>fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index2.html" class="logo">
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
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
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
        <li>
          <a href="pages/widgets.html">
          <i class="fas fa-user"></i> <span style="margin-left:5px;">My Profile</span>
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
            <li><a href="<?php echo base_url('Dashboard/data_obat');?>"><i class="fas fa-first-aid"></i> <span style="margin-left:5px;">Obat</span></a></li>
            <li><a href="pages/examples/profile.html"><i class="fas fa-notes-medical"></i><span style="margin-left:10px;">Pembelian</span></a></li></a></li>
            <li><a href="pages/examples/login.html"><i class="far fa-id-card"></i> <span style="margin-left:5px;">Pegawai</span></a></li>
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
            <li><a href="<?php echo base_url('Dashboard/data_pasien');?>"><i class="fa fa-circle-o"></i> Pasien</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Kamar</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Dokter</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Rekam Medis</span></a></li>
        <li class="header">SYNC</li>
        <li><a href="<?php echo base_url('auth/logout');?>"><i class="fas fa-sign-out-alt"></i> <span>LogOut</span></a></li>
      </ul>
    </section>
   
  </aside>