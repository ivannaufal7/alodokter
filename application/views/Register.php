<?php $this->load->view('Page_header')?>
<div class="bg-blue col-12" style="padding-top: 80px; padding-bottom: 100px;">
	<div class="bg-white mx-auto" style="width: 35%; padding: 35px;">
		<h3 class="text-center" style="font-size: 24px;">Daftar Alodokter
</h3>
		<p class="text-center" style="font-size: 16px;">Dapatkan Akses Ke Berbagai Info Kesehatan Terkini & Terpercaya</p>
		<p class="text-center" style="font-size: 16px;">Daftar dengan</p>
		<div class="text-center">
			<a class="button-fb btn btn-primary" href="/core_users/auth/facebook">Connect with Facebook</a>
			<p style="margin-top: 12px;">Atau Daftar Di Sini</p>
			<form action="<?= base_url('index.php/register_controller/daftarAccount');?>"  method="post">
				 <div class="form-group">
				    <input type="text" class="form-control col-12 mx-auto" name="username"  placeholder="Username">
				 </div>
				 <div class="form-group">
				    <input type="email" class="form-control col-12 mx-auto" name="email" placeholder="Email">
				 </div>
				 <div class="form-group">
				    <input type="password" class="form-control col-12 mx-auto" name="pass" placeholder="Kata Sandi">
				 </div>
				 <div class="form-check text-left">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Saya setuju dengan <a href="">Syarat & Ketentuan</a></label>
				  </div>
				  <input type="submit" class="btn btn-orange col-12 text-white" style="margin-top: 16px" value="Daftar" />
				  <p style="margin-top: 12px;">Sudah punya akun Alodokter? <a href="<?= base_url('index.php/login_controller');?>">Masuk</a></p>
			</form>
		</div>
	</div>
</div>