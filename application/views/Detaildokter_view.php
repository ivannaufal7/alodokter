<?php $this->load->view('Page_headerdokter')?>

<div class="col-12 " style="margin-top:63px; background-image:linear-gradient(#00b2ff, #006bff),url('<?=base_url('assets/caridokter.png') ?>')">
        <div class="hdr-2">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item "><a href="#" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item "><a href="#" class="text-white">Booking Jadwal Dokter</a></li>
                    <li class="breadcrumb-item "><a href="#" class="text-white">Dokter Kandungan</a></li>
                </ol>
            </div>
            <h3 class="text-white jdl">Cari Nama Dokter atau Spesialisasi</h3>
            <ul class="text-white list">
                <li>Buat janji dengan dokter pilihan lebih mudah</li>
                <li>Kemudahan sistem registrasi online tanpa antre</li>
                <li>Gratis panduan kesehatan yang tepat untuk Anda</li>
            </ul>
            <table>
                <tr>
                <td>
                    <p class="text-white srch">Saya mencari informasi mengenai:</p>

                    <div class="seacrhIcon">
                        <i><img src="<?= base_url('assets/search2.png')?>" width="20px;" style="position:absolute; left: 193px; margin-top:15px;"></i>
                        <input type="search" id="searchSpecialities" class="searchLocation" placeholder="Cari Dokter Spesialis atau Nama Dokter" autocomplete="off">
                        
                    </div>
                </td>
                <td>
                <p class="text-white lok">Lokasi:</p>
                    <div class="searchIcon">
                        <i><img src="<?= base_url('assets/location1.png')?>" width="23px;" style="position:absolute; left: 670px; margin-top:15px;"></i>
                        <i><img src="<?= base_url('assets/location2.png')?>" width="35px;" style="position:absolute; left: 968px; margin-top:11px;"></i>
                        <input type="search" class="searchLocation" placeholder="Semua Lokasi">
                    </div>
                </td>
                <td><button type="button" class="btn btn-warning btnCari">Cari</button></td>
                </tr>
            </table>
        </div>
</div>

<!-- ISI -->

<div class="d-flex flex-row flex-wrap container contain-detaildokter">
  <div class="sidenav p-2 box-filter">
    <div class="kota" style="margin:20px;">
        <h6 >Pilih Kota</h6>
        <hr>
        <div class="form-check" style="margin-bottom: 15px;">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1">Gunakan lokasi saya</label>
        </div>

        <div class="form-check" style="margin-bottom: 15px;">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
          <label class="form-check-label" for="exampleRadios1">Semua Kota</label>
        </div>

        <div class="form-check" style="margin-bottom: 15px;">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
          <label class="form-check-label" for="exampleRadios1">Aceh</label>
        </div>


        <div class="form-check" style="margin-bottom: 15px;">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
          <label class="form-check-label" for="exampleRadios1">Bali</label>
        </div>

        <div class="form-check" style="margin-bottom: 15px;">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
          <label class="form-check-label" for="exampleRadios1">Balikpapan</label>
        </div>
    </div>
  </div>

  <div class="main-container">
    <div class="p-2">
      <div class="d-flex flex-row">
        <h6 class="p-2" style="margin-top: 8px; margin-left: 10px;">Filter:</h6>
        
        <div class="input-group col-3 p-2">
          <button type="button" class="btn btn-outline-secondary btn-filter"  data-toggle="modal" data-target="#Modal1" style="font-size:14px;width:150px;text-align:left;">Tersedia Besok</button>
          <i><img src="<?= base_url('assets/arraw-down.png')?>" width="10px;" style="position:absolute; left: 130px; margin-top:-23px;"></i>
        </div>

        <div class="input-group col-3 p-2">
        <button type="button" class="btn btn-outline-secondary btn-filter" data-toggle="modal" data-target="#Modal1" style="font-size:14px;width:100px;text-align:left;">Pilih Hari</button>
          <i><img src="<?= base_url('assets/arraw-down.png')?>" width="10px;" style="position:absolute; left: 90px; margin-top:14px;"></i>
        </div>
      </div>  
    </div>

<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Filter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color:#7C7C7C;">Hari Praktik Dokter</p>
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>
        <small class="text-muted">Tersedia Besok</small>
        <p style="color:#7C7C7C;">Buat Janji sebelum pukul 13:00 WIB untuk konsultasi hari ini.</p>
        <p>Pilih Hari</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Senin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Selasa</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Rabu</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Kamis</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Jumat</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Sabtu</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Minggu</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Terapkan</button>
      </div>
    </div>
  </div>
</div>

    <div class="p-4">
          <h3>Cari Jadwal Dokter Kandungan</h3>
            <!--1-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                  <div class="p-1">
                      <img src="<?= base_url('assets/dr.3.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Ni Putu Titien Sri Kusumayanti, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Cikarang</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-left:15px;">Mitra Keluarga Cikarang</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 135.000</p>
                      <div class="doctor-button" id="button">
                        <a href="<?= base_url('index.php/profildokter')?>" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div>  
            <!--2-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.1.png')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Lenny Khosal, M.Kes, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Makassar</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">Siloam Hospitals Makassar</p>
                    </div>
                    
                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 200.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div> 

            <!--3-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.2.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Lina Meilina Pudjiastuti, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Bekasi Selatan, Bekasi</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">Mitra Keluarga Bekasi</p>
                    </div>

                    
                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 210.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div>  

            <!--4-->    
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.4.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Tia Indriana, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Purwakarta</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">Siloam Hospitals Purwakarta</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 95.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div> 

              <!--5-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.5.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Inneke Sirowanto, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Pinang, Tangerang</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">RS Awa Bros Tangerang</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 250.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div>  
                
            <!--6-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.7.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Renie Widiyanti, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Gubeng, Surabaya</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">Siloam Hospitals Surabaya</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 150.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div> 

            <!--7-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.6.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Anthony Atmadja, Sp.OGG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Bekasi Selatan, Bekasi</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">Siloam Hospitals Bekasi</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 210.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div>  
                
            <!--8-->

                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.8.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Amelia Abdullah, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Makassar</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">RS Awal Bros Makassar</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 250.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div> 

            <!--9-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.9.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Evelyn Tunardy, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Makassar</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">Siloam Hospitals Makassar</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 200.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div>  
            
          <!--10-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.10.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Olivia Franciska Laksmana, Sp.OG</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;">Dokter Kandungan</p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Semarang</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">Columbia Asia Hospital Semarang</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp. 150.000</p>
                      <div class="doctor-button" id="button">
                        <a href="#" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div> 
      </div> <!--end p-4-->

      <div>
        <i><img class="doubleright" src="<?= base_url('assets/doubleright2.png')?>" width="13px;" style=""></i>
        <button type="button" class="btn btn-primary btn-next" style="">Selanjutnya</button>
      </div>

      <div class="description-container">
        <h2>Dokter Kandungan</h2>
        <p class="sub-judul"> Apa itu Dokter Spesialis Obstetri dan Ginekologi?</p>
        <p class="desc">Kata obstetri dan ginekologi memiliki arti yang berbeda. Obstetri adalah cabang ilmu kedokteran yang khusus mempelajari tentang kehamilan dan persalinan. Cabang ilmu kedokteran ini berfokus pada perawatan dan pemeliharaan kesehatan ibu hamil dan janin selama masa kehamilan hingga proses persalinan. Sedangkan ginekologi adalah cabang ilmu kedokteran yang khusus mempelajari masalah seputar sistem reproduksi wanita. Dengan kata lain, seorang dokter spesialis obstetri dan ginekologi adalah dokter yang menangani masalah seputar kesehatan wanita dan kehamilan.</p>
        <p class="desc">Seorang Dokter Kandungan harus menyelesaikan pendidikan dokter umum terlebih dahulu, kemudian melanjutkan pendidikannya pada Program Pendidikan Dokter Spesialis di bidang obstetri dan ginekologi. Setelah menyelesaikan pendidikan tersebut dokter akan meraih gelar spesialis obstetri dan ginekologi (SpOG)</p>
        <p class="desc">Setelah itu, Dokter SpOG bisa melanjutkan pendidikannya sebagai konsultan dan memilih di antara lima bidang subspesialisasi, meliputi Uroginekologi dan Bedah Rekonstruksi Panggul, Kedokteran Fetomaternal, Onkologi ginekologi, Obstetri-Ginekologi Sosial, serta Fertilitas-Endokrinologi Reproduksi.</p>
        <p class="sub-judul">Penyakit Apa Saja yang dapat Ditangani oleh Dokter Obgyn?</p>
        <p class="desc">Beragam gangguan pada sistem reproduksi wanita, kehamilan, dan juga persalinan, meliputi:</p>
          <ol>
            <li style="font-size: 15px; font-weight: 500;margin-inline-start: 25px;">Masalah seputar kesehatan wanita</li>
              <ul style="font-size: 15px; margin-inline-start: 5px; margin-bottom:15px; margin-top:15px;">
                <li>Mengatasi masalah seputar menstruasi.</li>
                <li>Pengobatan penyakit menular seksual.</li>
                <li>Gangguan terkait kesehatan seksual, seperti masalah pada libido, nyeri saat berhubungan seksual, dan vagina kering.</li>
                <li>Memeriksa dan mengobati masalah kesuburan.</li>
                <li>Menangani masalah seputar menopause.</li>
                <li>Mengatasi dan mengobati kondisi medis terkait sistem reproduksi wanita, seperti PCOS, radang panggul, mioma rahim, kista ovarium, kanker rahim, kanker serviks, kanker ovarium, dan endometriosis.</li>
                <li>Mendiagnosis dan mengobati gangguan hormonal yang memengaruhi reproduksi wanita.</li>
                <li>Pemeriksaan dan pengobatan keputihan yang tidak normal.</li>
              </ul>
              <li style="font-size: 15px; font-weight: 500;margin-inline-start: 25px;">Masalah seputar kehamilan, persalinan, dan <span><i>post partum</i></span></li>
                <ul style="font-size: 15px; margin-inline-start: 5px; margin-bottom:15px; margin-top:15px;">
                  <li>Konsultasi kehamilan dan perawatan prenatal (sebelum melahirkan).</li>
                  <li>Mendeteksi dan menangani masalah dalam kehamilan, seperti diabetes gestasional, preeklamsia dan eklamsia, kehamilan ektopik, plasenta letak rendah, kelainan janin di dalam kandungan, atau keguguran.</li>
                  <li>Penanganan terkait pendarahan pasca persalinan.</li>
                  <li>Menangani kegawatdaruratan dalam persalinan, misalnya gawat janin, lilitan tali pusat, dan infeksi cairan ketuban.</li>
                  <li>Perawatan setelah melahirkan <span><i> (postpartum).</i></span></li>
                  <li>Program bayi tabung.</li>
                </ul>
          </ol>
        <p class="sub-judul">Berapa Biaya Konsultasi Dokter Spesialis Obstetri dan Ginekologi?</p>
        <p class="desc">Biaya untuk melakukan konsultasi dengan Dokter Spesialis Obstetri dan Ginekologi (Obgyn) atau dokter kandungan, sangat bervariasi, tergantung di rumah sakit mana dokter tersebut praktik. Bila Anda berniat untuk berkonsultasi dengan dokter kandungan, Anda harus mempersiapkan biaya sekitar Rp. 150.000,- hingga Rp. 500.000,-. Akan tetapi, Anda dianjurkan untuk membawa dana lebih karena mungkin ada biaya tambahan lainnya yang dibutuhkan.</p>
        <p class="sub-judul">Apa Tindakan Medis yang dapat Dilakukan Dokter Spesialis Obstetri dan Ginekologi?</p>
        <p class="desc">Dokter Spesialis Obstetri dan Ginekologi terlatih untuk melakukan berbagai tindakan medis untuk menolong persalinan, melakukan tindakan pembedahan, dan memberikan penanganan untuk mengatasi berbagai gangguan pada sistem reproduksi wanita. Beberapa tindakan yang bisa dilakukan yaitu:</p>
          <ul style="font-size: 15px; margin-inline-start: 5px; margin-bottom:15px; margin-top:15px;">
                <li>Pemeriksaan organ reproduksi wanita, termasuk pemeriksaan fisik seperti pemeriksaan panggul, dan pemeriksaan penunjang seperti USG rahim dan USG transvaginal.</li>
                <li>Deteksi dini kanker pada organ reproduksi wanita, seperti kanker serviks dan kanker ovarium.</li>
                <li>Biopsi rahim atau leher rahim, seperti pap smear.</li>
                <li>Konsultasi terkait alat kontrasepsi dan vaksinasi HPV untuk mencegah kanker serviks.</li>
                <li>Proses persalinan, baik normal maupun dengan operasi caesar, dan perawatan setelahnya.</li>
                <li>Dilatasi dan kuretase (kuret).</li>
                <li>Tindakan pembedahan, seperti histerektomi atau pengangkatan Rahim, dan miomektomi atau pengangkatan mioma uteri dalam rahim.</li>    
                <li>Ligasi tuba untuk sterilisasi pada wanita.</li>
                <li>Dokter spesialis Obgyn konsultan fertilitas dapat melakukan tindakan inseminasi buatan atau bayi tabung untuk membantu mengupayakan terjadinya kehamilan.</li>
          </ul>
      <p class="sub-judul">Kapan Seharusnya Anda ke Dokter Obgyn?</p>
      <p class="desc">Sebenarnya, Anda dianjurkan untuk memeriksakan diri ke dokter kandungan rutin setiap satu hingga lima tahun sekali, terlebih jika Anda sudah aktif melakukan hubungan seksual. Namun, Anda disarankan untuk segera memeriksakan diri jika mengalami beberapa hal berikut ini:</p>
        <ul style="font-size: 15px; margin-inline-start: 5px; margin-bottom:15px; margin-top:15px;">
                <li>Perubahan pada siklus menstruasi.</li>
                <li>Keluhan atau gangguan selama kehamilan.</li>
                <li>Menopause dan gejala yang terkait.</li>
                <li>Sulit hamil setelah beberapa tahun mencoba melakukan program hamil.</li>
                <li>Terdapat perdarahan vagina di luar siklus menstruasi.</li>
        </ul>
    <p class="desc"> Beberapa gejala yang dapat terjadi terkait gangguan kesehatan organ kewanitaan yaitu perubahan volume atau frekuensi pada siklus menstruasi, kram perut yang tidak biasa, nyeri saat buang air kecil, dan nyeri ketika berhubungan seksual.</p>
    <p class="sub-judul">Apa yang Harus Dipersiapkan Sebelum ke Dokter Obgyn?</p>  
    <p class="desc">Dokter Obgyn perlu mengetahui dengan jelas keluhan apa yang Anda alami. Oleh karena itu, dokter akan menanyakan beberapa hal secara rinci untuk mendapatkan data kesehatan Anda.</p>
    <p class="desc">Jangan malu dan ragu untuk menceritakan semua yang Anda alami, terkait masalah kesehatan reproduksi, kehamilan, persalinan, menstruasi, bahkan kegiatan seksual Anda. Sebelum menemui dokter, catat berbagai masalah atau keluhan yang Anda alami.</p>
    <p class="desc">Dalam memilih Dokter Spesialis Obstetri dan Ginekologi, ada baiknya Anda bertanya dan mendapatkan rekomendasi dari orang terpercaya, cari tahu bagaimana pengalaman dan penilaian dari beberapa pasien yang pernah ditangani oleh dokter yang Anda pilih, apakah dokter tersebut memiliki kepribadian yang baik dan membuat Anda merasa nyaman, serta berapa biayanya. </p> 
  
  </div>
  </div> <!--end main-container-->
</div> <!--end container-->


<?php $this->load->view('Page_footer')?>

  
  