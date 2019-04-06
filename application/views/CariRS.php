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






    <!-- style="background-image: linear-gradient(to left, rgba(0,255,255,0) 19%, #3670d2) -->