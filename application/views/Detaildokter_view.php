<?php $this->load->view('page_headerdokter')?>
<div class="col-12 " style="background-image: linear-gradient(to left, rgba(0,255,255,0) 0%, #3670d2),url('<?=base_url('assets/caridokter.png') ?>')">
        <div class="hdr-2">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item "><a href="#" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item "><a href="#" class="text-white">Booking Jadwal Dokter</a></li>
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
                        <i><img src="<?= base_url('assets/search.png')?>" width="25px;" style="position:absolute; left: 190px; margin-top:15px;"></i>
                        <input type="search" id="searchSpecialities" class="searchLocation" placeholder="Cari Dokter Spesialis atau Nama Dokter" autocomplete="off">
                        
                    </div>
                </td>
                <td>
                    <p class="text-white lok">Lokasi:</p>
                    <input type="search" class="searchLocation" placeholder="Semua Lokasi">
                </td>
                <td><button type="button" class="btn btn-warning">Cari</button></td>
                </tr>

            </table>
        </div>
    </div>
<div class="d-flex flex-row flex-wrap">
  <div class="sidenav p-2 box-filter">
    <div class="kota">
        <h5>Pilih Kota</h5>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
          Gunakan lokasi saya
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
        <label class="form-check-label" for="exampleRadios1">
          Semua Kota
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
        <label class="form-check-label" for="exampleRadios1">
          Bandung
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
        <label class="form-check-label" for="exampleRadios1">
          Bali
        </label>
        </div>
    </div>
  </div>

  <div class="p-2">
    <div class="d-flex flex-row">
      <h6 class="p-2" style="margin-top: 8px;">Filter:</h6>
      <div class="input-group col-3 p-2">
        <select class="custom-select" id="inputGroupSelect02">
          <option selected>Tersedia Hari Ini</option>
        </select>
      </div>
      <div class="input-group col-3 p-2">
        <select class="custom-select" id="inputGroupSelect02">
          <option selected>Pilih Hari Ini</option>
        </select>
      </div>
    </div>
      
    <div class="p-2">
        <h3>Cari Jadwal Dokter Kandungan</h3>
              <div class="card p-2" style="width: 60rem; margin-top: 16px;">
                <div class="d-flex flex-row flex-wrap"> 
                  <div class="p-2">
                    <img src="<?= base_url('assets/default_ava.png')?>" style="border-radius: 100%; margin-top: 16px; margin-left:16px;" width="80px">
                  </div>
                  <div class="card-body p-4">
                    <h5 class="card-title">dr. Lenny Khosal, M.Kes, Sp.OG</h5>
                    <p class="card-text" style="font-size: 12px; margin-bottom: 4px;">Dokter Kandungan</p>
                    <p class="card-text" style="font-size: 12px; margin-bottom: 8px;">Makassar</p>
                    <p class="card-text" style="font-size: 12px;">Siloam Hospitals Makassar</p>
                  </div>
                  <div class="p-2">
                    <p class="text-primary" style="margin: 12px;">Biaya mulai dari</p>
                    <p class="text-primary" style="font-weight: bold; margin-left: 32px;">Rp. 200.000</p>
                  </div>

            </div>  
        
          </div>  


          <div class="card p-2" style="width: 60rem; margin-top: 16px;">
                <div class="d-flex flex-row flex-wrap"> 
                  <div class="p-2">
                    <img src="<?= base_url('assets/default_ava.png')?>" style="border-radius: 100%; margin-top: 16px; margin-left:16px;" width="80px">
                  </div>
                  <div class="card-body p-4">
                    <h5 class="card-title">dr. Lenny Khosal, M.Kes, Sp.OG</h5>
                    <p class="card-text" style="font-size: 12px; margin-bottom: 4px;">Dokter Kandungan</p>
                    <p class="card-text" style="font-size: 12px; margin-bottom: 8px;">Makassar</p>
                    <p class="card-text" style="font-size: 12px;">Siloam Hospitals Makassar</p>
                  </div>
                  <div class="p-2">
                    <p class="text-primary" style="margin: 12px;">Biaya mulai dari</p>
                    <p class="text-primary" style="font-weight: bold; margin-left: 32px;">Rp. 200.000</p>
                  </div>
                  
            </div>  
        
          </div>

          <div class="card p-2" style="width: 60rem; margin-top: 16px;">
                <div class="d-flex flex-row flex-wrap"> 
                  <div class="p-2">
                    <img src="<?= base_url('assets/default_ava.png')?>" style="border-radius: 100%; margin-top: 16px; margin-left:16px;" width="80px">
                  </div>
                  <div class="card-body p-4">
                    <h5 class="card-title">dr. Lenny Khosal, M.Kes, Sp.OG</h5>
                    <p class="card-text" style="font-size: 12px; margin-bottom: 4px;">Dokter Kandungan</p>
                    <p class="card-text" style="font-size: 12px; margin-bottom: 8px;">Makassar</p>
                    <p class="card-text" style="font-size: 12px;">Siloam Hospitals Makassar</p>
                  </div>
                  <div class="p-2">
                    <p class="text-primary" style="margin: 12px;">Biaya mulai dari</p>
                    <p class="text-primary" style="font-weight: bold; margin-left: 32px;">Rp. 200.000</p>
                  </div>
                  
            </div>  
        
          </div> 
        </div>
</div>