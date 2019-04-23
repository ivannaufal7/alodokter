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
                        <input type="search" id="searchSpecialities" class="searchLocation" placeholder="Cari Dokter Spesialis atau Nama Dokter" autocomplete="off">
                        
                    </div>
                </td>
                <td>
                    <p class="text-white lok">  Lokasi:</p>
                    <input type="search" class="searchLocation" placeholder="Semua Lokasi">
                </td>
                <td><button type="button" class="btn_btn-warning">Cari</button></td>
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
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RS-card_1.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-cards" href="">Cek Kolesterol</a> <br>
    <a class="isi-cards" href="">Tes Narkoba</a> <br>
    <a class="isi-cards" href="">Tes HIV</a> <br>
    <a class="isi-cards" href="">Profil Lemak</a> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" >Lihat Semua Laboratorium Klinik</a>
</div>

<div class="col-md-3"  style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RS-card_2.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-cards" href="">Endoskopsi</a> <br>
    <a class="isi-cards" href="">Oprasi turun Berok</a> <br> <br> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" >Lihat Semua Sistem Pencernaan</a>
</div>

<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RS-card_3.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-cards" href="">Oprasi caesar</a> <br>
    <a class="isi-cards" href="">Melahirkan Normal</a> <br>
    <a class="isi-cards" href="">Bayi Tabung</a> <br>
    <a class="isi-cards" href="">Vaksin HPV</a> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" >Lihat Semua Kebidanan dan Kandungan</a>
</div>

</div>

<div class="row justify-content-md-center">
<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RS-card_4.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-cards" href="">CT scan</a> <br>
    <a class="isi-cards" href="">MRI scan</a> <br>
    <br> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" >Lihat Semua Radiologi</a>
</div>

<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RS-card_5.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-cards" href="">Oprasi Katarak</a> <br>
    <a class="isi-cards" href="">LASIK</a> <br>
    <a class="isi-cards" href="">Pengobatan Mata Juling</a> <br>
     <br>
  </div>
</div>
<a href="" class="pil-lanjutan" >Lihat Semua Mata</a>
</div>

<div class="col-md-3 " style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RS-card_6.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-cards" href="" style="">Sunat</a> <br>
    <a class="isi-cards" href="">ESWL</a> <br>
    <a class="isi-cards" href="">USG Prostat</a> <br>
     <br>
  </div>
</div>
<a href="" class="pil-lanjutan" >Lihat Semua Saluran Kemih</a>
</div>

</div>
</div>


</div>    <!-- style="background-image: linear-gradient(to left, rgba(0,255,255,0) 19%, #3670d2) -->