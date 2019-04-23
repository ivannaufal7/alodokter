<?php $this->load->view('Page_headerRS');?>
<div>
<h6>3</h6>
</div>
<br>
<div  style="margin-left:130px;margin-top:30px;">
<div class="row" style="">
<br>
<br>

<div class="col-8" style="margin-left:30px;">
<h2>Rumah Sakit Premier Bintaro</h2>
<div id="demo" class="carousel slide" data-ride="carousel" style="height:400px;width:600px;">
  <!-- Indicators -->
  <ul class="carousel-indicators" >
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/RSbintaro1.jpg')?>" alt="Los Angeles" width="600px" height="400px ">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/RSbintaro2.jpg')?>" alt="Los Angeles" width="600px" height="400px ">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div id="list-example" class="list-group-horizontal">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Item2</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <h4 id="list-item-1">Profil</h4>
  <p>Rumah Sakit Premier Bintaro beroperasi sejak 12 Oktober 1998 di kawasan Pondok Jaya, Pondok Aren, Tangerang. Beberapa fasilitas pendukung medis yang dimiliki oleh rumah sakit ini adalah laboratorium, radiologi (Mammografi, USG, Ekokardiografi, MRI, CT Scan), rehabilitasi medis, endoskopi, serta BMD (Bone Mineral Densinometry). Rumah sakit ini memiliki layanan unggulan untuk ortopedi dan kardiologi.
Lokasi
Jl. M.H. Thamrin Blok B3 No. 1, Sektor 7, Bintaro Jaya, Pondok Jaya, Pondok Aren, Tangerang, Banten 15224, Indonesia</p>
  <h4 id="list-item-2">Tarif Kamar</h4>
  <div id="acordion">
  
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          SVIP 
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Kamar dengan kapasitas satu (1) pasien dengan fasilitas meliputi:
    Electric bed
    Dining room
    Pantry
    Kamar mandi dalam
    Lemari
    Electric kettle
    Sofa bed
    2 single sofa
    Kulkas
    2 Televisi
    2 Telepon
    Nakas/lemari kecil 
    verbed table
    Welcome drink
    Koran setiap pagi
    Luas Kamar: 7,42 Meter X 5,15 Meter
      </div>
    </div>
    <br>

    <div class="card-header" id="heading2">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          VIP 
        </button>
      </h5>
    </div>

    <div id="collapse2" class="collapse show" aria-labelledby="heading2" data-parent="#accordion">
      <div class="card-body">
      Kamar dengan kapasitas satu (1) pasien dengan fasilitas meliputi:
    Electric bed
    Dining room
    Pantry
    Kamar mandi dalam
    Lemari
    Electric kettle
    Sofa bed
    2 single sofa
    Kulkas
    2 Televisi
    2 Telepon
    Nakas/lemari kecil 
    verbed table
    Welcome drink
    Koran setiap pagi
    Luas Kamar: 7,42 Meter X 5,15 Meter
      </div>
    </div>
    <br>
    <div class="card-header" id="heading3">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
          SVIP 
        </button>
      </h5>
    </div>

    <div id="collapse3" class="collapse show" aria-labelledby="heading3" data-parent="#accordion">
      <div class="card-body">
      Kamar dengan kapasitas satu (1) pasien dengan fasilitas meliputi:
    Electric bed
    Dining room
    Pantry
    Kamar mandi dalam
    Lemari
    Electric kettle
    Sofa bed
    2 single sofa
    Kulkas
    2 Televisi
    2 Telepon
    Nakas/lemari kecil 
    verbed table
    Welcome drink
    Koran setiap pagi
    Luas Kamar: 7,42 Meter X 5,15 Meter
      </div>
    </div>
  </div>


  </div>
  <h4 id="list-item-3">Tidakan Medis</h4>
  <h6>Laboratorium Klinik</h6>
  <h6>Kedokteran Umum</h6>
  <h6>Bedah Umun</h6>
  <h6>Kelenjar</h6>
  <h4 id="list-item-4">Dokter</h4>
  <h6>Dokter Kulit</h6>
  <h6>Dokter Bedah</h6>
  <h6>Dokter Jantung</h6>
</div>


</div>

<div class="col-3" style="margin-left:-60px;">
<div class="container" >
<div class="row">

<div class="col-sm">
<button type="button" class="btn_btn-warning" style="width:290px;margin-left:-3px;">Buat Janji Konsultasi</button>
</div>
<div class="col-sm">
<br>
<h4>Peta Lokasi</h4>
<br>
</div>
<div class="col-sm">
<div class="card" style="width: 18rem;">
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RSbintaro2.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <p>Jl. M.H. Thamrin Blok B3 No. 1, Sektor 7, Bintaro Jaya, Pondok Jaya, Pondok Aren, Tangerang, Banten 15224, Indonesia</p>
  </div>
</div>

</div>
</div>

</div>

</div>  

</div>
</div>
</div>

<?php $this->load->view('Footer_RS');?>





