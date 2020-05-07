<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="<?php echo base_url();?>fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Manrope&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Manrope&family=Roboto+Condensed:wght@700&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Merriweather:ital,wght@1,300;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=Gochi+Hand&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jua&family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Jua&family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,500;1,600&family=Indie+Flower&family=Permanent+Marker&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    
    <title><?= $title ?></title>

    <style>
        /* .nav-menu ul{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }*/

        /*.nav-menu ul li{
            list-style-type:none;
            cursor:pointer;
        }*/

        a{
            color: black;
            font-weight: bold;
            font-family: 'Manrope', sans-serif;

        }

        a:hover {
            color: rgb(128,128,128);
        }

        
    </style>
  </head>

<body>
    <div class="container-fluid">
            <div class="nav-menu">
            <ul style="display: flex; flex-direction: row; justify-content: space-around;">
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('dashboard/index_user');?>" style="font-family: 'Oswald', sans-serif;
                    font-family: 'Jua', sans-serif;
                    font-family: 'Fascinate Inline', cursive;font-size:50px; margin-left:-60px; color: ">BULLDOC</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('beli');?>" style="font-family:'viga', sans-serif;">OBAT & VITAMIN</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('riwayatbeliobat');?>" style="font-family:'viga', sans-serif;">RIWAYAT BELI OBAT</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('caridokter');?>" style="font-family:'viga', sans-serif;">CARI DOKTER</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('dashboard/data_kamar');?>" style="font-family:'viga', sans-serif;">DATA KAMAR</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('dashboard/daftar_pasien');?>" style="font-family:'viga', sans-serif;">DAFTAR PASIEN</a>
                </li>   
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('konsul');?>" style="font-family:'viga', sans-serif;">KONSULTASI</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="<?= base_url('dashboard/hasil_konsul');?>" style="font-family:'viga', sans-serif;">HASIL KONSULTASI</a>
                </li>  
                <li class="nav-item dropdown" style="list-style-type:none; cursor:pointer;">
                    <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if($this->session->userdata('gambar')) { ?>
                    <img src="<?= base_url(); ?>uploads/<?= $this->session->userdata('gambar') ?>" style="width:64px; height:64px;" class="rounded-circle"></a>
                    <?php } else { ?>
                    <img src="<?= base_url('uploads/user.png'); ?>" style="width:64px; height:64px;" class="rounded-circle"></a>
                    <?php }?>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><?= $this->session->userdata('username') ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('auth/logout');?>">Log Out</a>
                        </div>
                </li> 
            </ul>
        </div>
    </div>
    <hr>

    
       
  

   