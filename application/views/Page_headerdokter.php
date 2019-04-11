<!DOCTYPE html>
<html>
<head>
	<title>Alodokter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?rd5re8">
  <link rel="stylesheet" href="<?= base_url('assets/Caridokter.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/Detaildokter.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/Footer.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/Profildokter.css')?>">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

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
            <input class="form-control searchInput" type="search" placeholder="Cari di Alodokter" aria-label="Search">
          </form>
      </li>
    </ul>
   
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Info Kesehatan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('index.php/caridokter')?>">Cari Dokter <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('index.php/cariRS')?>">Cari Rumah Sakit <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('index.php/tanya')?>">Tanya Dokter <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <button class="btn btn-outline-info btn-primary btn-masuk" style="margin-right: 8px; margin-left: 8px;">Masuk</button>
        <button class="btn btn-primary btn-download">Download Aplikasi</button>
      </li>
    </ul>

  </div>
</nav>