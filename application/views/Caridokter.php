<?php $this->load->view('Page_headerdokter')?>

<body>
    <div class="col-12 " style="background-position: right bottom;margin-top:63px;background-image:linear-gradient(#00b2ff, #006bff),url('<?=base_url('assets/caridokter.png') ?>')">
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
                        <i><img src="<?= base_url('assets/search2.png')?>" width="20px;" style="position:absolute; left: 193px; margin-top:15px;"></i>
                        <input type="search" id="searchSpecialities" class="searchProcedure" placeholder="Cari Dokter Spesialis atau Nama Dokter" autocomplete="off">
                    </div>
                </td>
                <td>
                    <p class="text-white lok">Lokasi:</p>
                    <div class="searchIcon">
                        <i><img src="<?= base_url('assets/location1.png')?>" width="23px;" style="position:absolute; left: 670px; margin-top:15px;"></i>
                        <i><img src="<?= base_url('assets/location2.png')?>" width="35px;" style="position:absolute; left: 968px; margin-top:11px;"></i>
                        <input type="search" class="searchLocation" placeholder="Semua Lokasi" disabled>
                    </div>
                    
                </td>

                <td><button type="button" class="btn btn-warning btnCari">Cari</button></td>
                </tr>

            </table>
        </div>
    </div>

    <div class="container contain-cariDokter" style="margin-top:90px; margin-left:120px;">
        <h3 class="text-black subJudul">Pilih Spesialisasi Dokter</h3>
        <a class="button link-button expand_category" href="#">Lihat Semua</a>
        <div class="d-flex flex-row flex-wrap m-4"> 
                <div class="p-0 w-30 background-top-inner" style="background: url('<?=base_url('assets/card1.jpg') ?>') top; background-radius:7px;">
                    <a href="<?= base_url('index.php/detaildokter')?>"><p class="hospital-index-title background-dark">Dokter Kandungan</p></a>
                </div>
                <div class="p-0 w-30 background-top-inner" style="background: url('<?=base_url('assets/card2.jpg') ?>') top; background-radius:7px;">
                    <a href="/cari-dokter/dokter-kandungan"><p class="hospital-index-title background-dark">Dokter Anak</p></a>
                </div>
                <div class="p-0 w-30 background-top-inner" style="background: url('<?=base_url('assets/card3.jpg') ?>') top; background-radius:7px;">
                    <a href="/cari-dokter/dokter-kandungan"><p class="hospital-index-title background-dark">Dokter Penyakit Dalam</p></a>
                </div>
        </div>
        <div class="d-flex flex-row flex-wrap m-4"> 
                <div class="p-0 w-30 background-top-inner" style="background: url('<?=base_url('assets/card4.jpg') ?>') top; background-radius:7px;">
                    <a href="/cari-dokter/dokter-kandungan"><p class="hospital-index-title background-dark">Dokter Urologi</p></a>
                </div>
                <div class="p-0 w-30 background-top-inner" style="background: url('<?=base_url('assets/card5.jpg') ?>') top; background-radius:7px;">
                    <a href="/cari-dokter/dokter-kandungan"><p class="hospital-index-title background-dark">Dokter Jantung</p></a>
                </div>
                <div class="p-0 w-30 background-top-inner" style="background: url('<?=base_url('assets/card6.jpg') ?>') top; background-radius:7px;">
                    <a href="/cari-dokter/dokter-kandungan"><p class="hospital-index-title background-dark">Dokter Saraf</p></a>
                </div>
        </div>
    </div>
        
<?php $this->load->view('Page_footer')?>