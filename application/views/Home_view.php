<?php $this->load->view('page_header');?>
<div class="col-12 bg-blue">
	<div class="float-right col-5">
		<img src="<?= base_url('assets/women.png')?>" style="width: 465px;">
	</div>
	<div class="menu-head">
		<div class="col-6">
			<div class="p-5 head">
				<h1 class="text-white">Alodokter</h1>
				<h3 class="text-white">Sehatmu, Prioritas Kami</h3>
				<form class="row frmCari">
					<div class="form-group mx-sm-3 mb-2">
					    <label for="inputPassword2" class="sr-only">Password</label>
					    <input type="text" class="form-control p-3" style="width: 525px" id="inputPassword2" placeholder="Cari di Alodokter">
					  </div>
					  <button type="submit" class="btn btn-orange text-white mb-2 btnCari">Cari</button>
				</form>
			</div>
		</div>
		<div class="row col-6">
			<div class="d-flex flex-row flex-wrap">
			  <div class="p-2"><div class="card card-head d-flex flex-row"><img src="<?= base_url('assets/ico-chat.svg')?>" class="icon-head"><p>Chat Bersama Dokter</p></div></div>
			</div>
			
		</div>
	</div>
</div>
<div class="col-12 bg-darkblue">
	<div class="d-flex flex-row flex-wrap text-white" style="margin-left: 7%; padding: 24px;">
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
<h3 class="info-sehat">Info Kesehatan Terkini</h3>
<div class="konten d-flex flex-row col-12">
	<div class="kesehatan">
		<div class="highlight p-2" >
			<img src="<?= base_url('assets/bumil.jpg')?>" class="img-fluid" alt="Responsive image">
			<h3>Makanan yang harus Dihindari Ibu Hamil</h3>
			<p class="w-50">Saat hamil, banyak hal yang harus dilakukan dengan lebih berhati-hati. Salah satunya adalah makan. Pasalnya, ada beberapa makanan yang harus...</p>
			<a href="#" class="text-primary">Baca Selengkapnya</a>	
		</div>
		<div class="artikel p-2">
			<div class="d-flex flex-row flex-wrap">
				<div class="p-2">
					<img src="<?= base_url('assets/berat.jpg')?>">	
				</div>
				<div class="p-2">
					<h3 class="w-50">Cara Sehat agar Berat Badan Turun Drastis</h3>
					<p class="w-50">Banyak orang yang ingin berat badannya turun drastis. Namun untuk menurunkan berat badan, sebaiknya dilakukan..</p>
					<a href="#" class="text-primary">Baca Selengkapnya</a>
				</div>
		</div>
	</div>
	<div class="artikel p-2">
			<div class="d-flex flex-row flex-wrap">
				<div class="p-2">
					<img src="<?= base_url('assets/berat.jpg')?>">	
				</div>
				<div class="p-2">
					<h3 class="w-50">Cara Sehat agar Berat Badan Turun Drastis</h3>
					<p class="w-50">Banyak orang yang ingin berat badannya turun drastis. Namun untuk menurunkan berat badan, sebaiknya dilakukan..</p>
					<a href="#" class="text-primary">Baca Selengkapnya</a>
				</div>
		</div>
	</div>
	<div class="artikel p-2">
			<div class="d-flex flex-row flex-wrap">
				<div class="p-2">
					<img src="<?= base_url('assets/berat.jpg')?>">	
				</div>
				<div class="p-2">
					<h3 class="w-50">Cara Sehat agar Berat Badan Turun Drastis</h3>
					<p class="w-50">Banyak orang yang ingin berat badannya turun drastis. Namun untuk menurunkan berat badan, sebaiknya dilakukan..</p>
					<a href="#" class="text-primary">Baca Selengkapnya</a>
				</div>
		</div>
	</div>
	<div class="col-5 p-2 float-right iklan" style="position: absolute; bottom: 0px; left:70%; top: -40px; width: 120px;">
		<img src="<?= base_url('assets/iklan.gif')?>" width="300px" style="padding-bottom: 24px">
		<img src="<?= base_url('assets/iklan2.jpg')?>" width="300px">
	</div>
	<div class="col-7">
				<button class="btn btn-primary text-white float-right">Selanjutnya >></button>		
	</div>

</div>
<?php //$this->load->view('page_footer');?>