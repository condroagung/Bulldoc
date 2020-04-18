<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <title>Home BullDog</title>

    <style>
        body{
            font-family:'viga', sans-serif;
        }
        .nav-link{
            text-transform:uppercase;
            margin-right:20px;
        }
        .nav-link:hover::after{
            content:'';
            display:block;
            border-bottom: 2px solid white;
            width:50%;
            margin:auto;
            padding-bottom:5px;
            margin-bottom:-7px;
        }
        .login{
            border-radius:40px;
        }
        .jumbotron{
            background-image:url(assets/img/teammate1.png);
            background-size:cover;
            height:900px;
            margin-top:-75px;
        }
        .navbar-brand, .nav-link{
            color:white !important;
            text-shadow:1px 1px 1px rgba(0,0,0,0.7);
        }
        .jumbotron .display-4{
            color:white;
            text-align:center;
            margin-top:280px;
            font-weight:200;
        }
    </style>
  </head>

<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url();?>">BullDOC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Main/faq');?>">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Career</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-success login" href="<?php echo base_url('auth/login');?>">Login</a>
            </li>
            </ul>
        </div>
  </div>
</nav>
  

   