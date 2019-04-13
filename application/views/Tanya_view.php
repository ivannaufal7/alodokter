<?php $this->load->view('page_header.php')?>
<div class="col-12 bg-blue">
	<div class="d-flex flex-row flex-wrap text-white" style="margin-left: 8%; padding: 0px; font-size: 12px;">
		<div class="p-2 diagnosa" >Diabetes</div>
		<div class="p-2 diagnosa">Jantung</div>
		<div class="p-2 diagnosa">Kesehatan Mulut</div>
		<div class="p-2 diagnosa">Kolesterol Tinggi</div>
		<div class="p-2 diagnosa">Diet</div>
		<div class="p-2 diagnosa">Kecantikan</div>
		<div class="p-2 diagnosa">Kulit</div>
		<div class="p-2 diagnosa">Kehamilan</div>
		<div class="p-2 diagnosa">Bayi</div>
		<div class="p-2 diagnosa">Mata</div>
	</div>
</div>
<div class="container col-12">
	<div class="col-8 tanya">
		<h3 class="txt-tanya">Tanya Dokter</h3>
		<!-- <button class="btn btn-primary btn-lg btn-block btn-tanya">Buat Pertanyaan</button>
		<button class="btn bg-darkblue text-white btn-lg btn-block btn-tanya">Cari Pertanyaan Berdasarkan Topik</button> -->
		<button type="button" class="btn btn-outline-info btn-lg col-5 btn-tanya">Buat Pertanyaan</button>
		<button type="button" class="btn btn-primary btn-lg col-6 btn-tanya">Cari Pertanyaan Berdasarkan Topik</button>
		<h3 class="txt-tanya">Diskusi Kesehatan Terbaru</h3>

		<div class="form-tanya">
			<h6>Judul Topik</h6>
			<?php
          if($this->simple_login->cek_login() == true){
           ?>
			<form class="form-group">
				<input type="text" class="form-control" style="margin-bottom: 12px;" name="judul" placeholder="Contoh: Dari umur berapa bayi boleh diberi makan pada ?">
				<textarea name="editor1"></textarea>
				<script>
                        CKEDITOR.replace( 'editor1' );
                </script>
                <div class="form-check" style="margin-top: 12px;">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Saya bersedia menerima notifikasi untuk pertanyaan ini
				  </label>
				</div>
			</form>
			<div class="text-right">
				<button type="button" class="btn btn-outline-info btn-lg btn-tanya">Batal</button>
				<button type="button" class="btn btn-primary btn-lg btn-tanya">Kirim</button>				
			</div>
			<?php 
			          }
	        ?>
		</div>
		<div class="question d-flex flex-row flex-wrap">
				<img src="<?= base_url('assets/default_ava.png')?>" class="p-2 author" width="80px">
				<div class="d-flex flex-column">
					<h6 class="p-1">Tentang Kehamilan</h6>	
					<p class="p-1">Oleh: John Doe</p>
				</div>
				<div class="d-flex flex-column col-8 float-right">
					<a href="#" class="p-1 text-right">0 Balasan</a>
					<p class="p-1 text-right">1 Menit yang lalu</p>
				</div>
				<p class="p-3">Hallo dok saya umur 17 tahun, 2 bulan lalu saya mengalami pitak dirambut saya dan sudah 2 bulan melakukan berbagai cara agar...</p>
		</div>
		<div class="question d-flex flex-row flex-wrap">
				<img src="<?= base_url('assets/default_ava.png')?>" class="p-2 author" width="80px">
				<div class="d-flex flex-column">
					<h6 class="p-1">Tentang Kehamilan</h6>	
					<p class="p-1">Oleh: John Doe</p>
				</div>
				<div class="d-flex flex-column col-8 float-right">
					<a href="#" class="p-1 text-right">0 Balasan</a>
					<p class="p-1 text-right">1 Menit yang lalu</p>
				</div>
				<p class="p-3">Hallo dok saya umur 17 tahun, 2 bulan lalu saya mengalami pitak dirambut saya dan sudah 2 bulan melakukan berbagai cara agar...</p>
		</div>
		<div class="question d-flex flex-row flex-wrap">
				<img src="<?= base_url('assets/default_ava.png')?>" class="p-2 author" width="80px">
				<div class="d-flex flex-column">
					<h6 class="p-1">Tentang Kehamilan</h6>	
					<p class="p-1">Oleh: John Doe</p>
				</div>
				<div class="d-flex flex-column col-8 float-right">
					<a href="#" class="p-1 text-right">0 Balasan</a>
					<p class="p-1 text-right">1 Menit yang lalu</p>
				</div>
				<p class="p-3">Hallo dok saya umur 17 tahun, 2 bulan lalu saya mengalami pitak dirambut saya dan sudah 2 bulan melakukan berbagai cara agar...</p>
		</div>
	</div>
		<div class="col-5 p-2 float-right iklan" style="position: absolute; bottom: 0px; left:70%; top: 20px; width: 120px;">
		<img src="<?= base_url('assets/iklan.gif')?>" width="300px" style="padding-bottom: 24px">
		<img src="<?= base_url('assets/iklan2.jpg')?>" width="300px">
	</div>
	<div class="col-7" style="margin-left: 65px;">
				<button class="btn btn-primary text-white float-right">Selanjutnya >></button>		
	</div>
</div>