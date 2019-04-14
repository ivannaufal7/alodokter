<!DOCTYPE html>
<html>
<head>
	<title>Alodokter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles.css')?>">
  <script src="https://cdn.ckeditor.com/4.11.3/basic/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <a class="navbar-brand" href="<?= base_url('index.php/home')?>"><img src="<?= base_url('assets/alodok.png')?>" width="120px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
         <form class="form-inline my-2 my-lg-0">
            <i><img src="<?= base_url('assets/search2.png')?>" width="15px;" style="position:absolute; left: 170px; margin-top:-7px;"></i>
            <input class="form-control mr-sm-2 search" type="search" placeholder="Cari di Alodokter" aria-label="Search">
          </form>
      </li>
    </ul>
   
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link menu-size" href="#">Info Kesehatan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link menu-size" href="<?= base_url('index.php/caridokter')?>">Cari Dokter <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link menu-size" href="<?= base_url('index.php/cariRS')?>">Cari Rumah Sakit <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link menu-size" href="<?= base_url('index.php/tanya')?>">Tanya Dokter <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <?php
          if($this->simple_login->cek_login() == true){
           ?>
            <a href="" class="nav-link text-primary"><?= $this->session->userdata('username')?></a>
            <a href="" class="nav-link"><?= anchor('login_controller/logout','Logout');?></a>
        <?php 
          }else{
         ?>
            <a href="<?= base_url('index.php/login_controller');?>" class="btn btn-outline-info btn-primary" style="margin-right: 8px; margin-left: 8px;">Masuk</a>
            <button class="btn btn-md btn-primary">Download Aplikasi</button>
         <?php   
          }
        ?>
        
      </li>
    </ul>

  </div>
</nav>