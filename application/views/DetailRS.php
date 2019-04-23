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

<div  style="margin-left:130px;">
<div class="row">
<div class="col-3">

<div class="container" style="border:1px solid #cecece; background-color:white;">
<ul class="list-group list-group-flush">
  <li class="list-group-item"  style="background-color = grey;" >Pilih Tindakan Kebidanan dan Kandungan</li>
  <br>
</ul>
<form>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><img src="<?= base_url('assets/search2.png')?>" style="width: 20px;"></span>
    </div>
    <input type="text" class="form-control" placeholder="Username">
    <div>
    <span><button type="button" class="btn btn-secondary"> -> </button> </span>
    </div>
    </div>

    <div class="" style="overflow-y:scroll; overflow-x:hidden;height:150px;">
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Semua Tindakan
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Apendikrogram
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Bedah Nissen Fundoplication
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Bedah Saluran Cerna
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Calon Polyp Detection and Removal
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Cutting of Abdominal Adhesion
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Endoscopic Retrograde Cholangio-Pancreatography
    </label>
    </div>

    </div>
   </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div class="col-8">
<h3 style="font-size:bold;">Estimasi Biaya Sistem Pencernaan</h3>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RS-1.jpg')?>" class="w-60">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>rumah sakit premiere bintaro</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>lokasinya</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">sistempen..</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Buat Janji</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

</div>  

</div>
</div>
</div>

<?php $this->load->view('Footer_RS');?>
