 <?php $this->load->view('Page_headerRS');?>
 <div class="col-12 bg-blue" id="">
	<div class="float-right col-5">
		<img src="<?= base_url('assets/hospital.png')?>" style="width: 465px;">
	</div>
	<div class="menu-head">
		<div class="col-6">
			<div class="p-5 head">
				<h6 class="text-white">Beranda / cari Rumah Sakit</h6>
				<img src="<?= base_url('assets/textRS.svg')?>" style="width: 700px;">
				<table>
                <tr>
                <td>
                    <p class="text-white srch">Saya mencari informasi mengenai:</p>

                    <div class="seacrhIcon">
                        <i><img src="<?= base_url('assets/search.png')?>" width="25px;" style="position:absolute; left: 190px; margin-top:15px;"></i>
                        <input type="search" id="searchSpecialities" class="searchLocation" placeholder="Cari Rumah Sakit" autocomplete="off">
                        
                    </div>
                </td>
                <td>
                    <p class="text-white lok">  Lokasi:</p>
                    <input type="search" class="searchLocation" placeholder="Semua Lokasi">
                </td>
                <td><button type="button" class="btn_btn-warning" style="margin-top:40px;">Cari</button></td>
                </tr>

            </table>
			</div>
    </div>
    
</div>
</div>

<div class="list-wraper">

<div class="row justify-content-md-center">
<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>"> <img class="card-img-top" src="<?= base_url('assets/RS-card_1.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Cek Kolesterol</a> <br>
    <a class="isi-card" href="">Tes Narkoba</a> <br>
    <a class="isi-card" href="">Tes HIV</a> <br>
    <a class="isi-card" href="">Profil Lemak</a> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Laboratorium Klinik</a>
</div>

<div class="col-md-3"  style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_2.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Endoskopsi</a> <br>
    <a class="isi-card" href="">Oprasi turun Berok</a> <br> <br> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Sistem Pencernaan</a>
</div>

<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_3.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Oprasi caesar</a> <br>
    <a class="isi-card" href="">Melahirkan Normal</a> <br>
    <a class="isi-card" href="">Bayi Tabung</a> <br>
    <a class="isi-card" href="">Vaksin HPV</a> <br>
  </div>
</div>
<a href="<?= base_url('index.php/DetailRS_controller')?>"" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Kebidanan dan Kandungan</a>
</div>

</div>

<div class="row justify-content-md-center">
<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_4.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">CT scan</a> <br>
    <a class="isi-card" href="">MRI scan</a> <br>
    <br> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Radiologi</a>
</div>

<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_5.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Oprasi Katarak</a> <br>
    <a class="isi-card" href="">LASIK</a> <br>
    <a class="isi-card" href="">Pengobatan Mata Juling</a> <br>
     <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Mata</a>
</div>

<div class="col-md-3 " style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_6.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="" style="">Sunat</a> <br>
    <a class="isi-card" href="">ESWL</a> <br>
    <a class="isi-card" href="">USG Prostat</a> <br>
     <br>
  </div>
</div>
<a href="" class="pil-lanjutan"style="font-size:10px;" align:"right">Lihat Semua Saluran Kemih</a>
</div>

</div>
</div>


</div>    <!-- style="background-image: linear-gradient(to left, rgba(0,255,255,0) 19%, #3670d2) -->

<?php $this->load->view('Footer_RS');?>