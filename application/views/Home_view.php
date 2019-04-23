<?php $this->load->view('page_header');?>
<div class="col-12" style="background: #006bff">
	<div class="float-right col-5">
		<img src="<?= base_url('assets/newdoc.png')?>" style="width: 400px; margin-top: 56px; margin-bottom: 24px;">
	</div>
	<div class="menu-head">
		<div class="col-8">
			<div class="p-5 head" style="margin: 32px; margin-top: 66px;">
				<h3 class="text-white" style="position: relative; top: 16px; font-size: 32px; font-weight: 900;">Buat Janji Mudah dan Cepat</h3>
				<h4 class="text-white" style="font-size: 26px;letter-spacing: 0.9px; line-height: 27px; font-weight: 100;">Layanan Booking Dokter Terbaik di Indonesia</h4>
				<form class="row frmCari">
					<div class="form-group mx-sm-3 mb-2">
					    <label for="inputPassword2" class="sr-only">Password</label>
					    <div style="position: relative; left: 12px; top: 16px;" class="row">
					    	<input type="text" class="form-control p-3" style="width: 525px" id="inputPassword2" placeholder="Cari di Alodokter">
					    	<input type="submit" name="cari" class="btn btn-orange text-white" value="Cari" style="width: 120px; height: 58px;position: absolute;
					    right: 0px;">
					    </div>
					    
					  </div>
				</form>
			</div>
		</div>
	</div>
</div>
<div style="background: #F5F7FD; min-height: 130px;">
	<div class="d-flex flex-row col-12 flex-wrap justify-content-center" style="margin: 0 auto;">
		<div class="col-2 bg-white" style="margin-right: 16px; height: 80px;"><img src="<?= base_url('assets/ico-chat.svg')?>" style="width: 40px; margin-top: 18px;"><div style="margin-left: 8px; position: absolute; bottom: 30px; left: 56px;">Chat Bersama Dokter</div></div>
		<div class="col-2 bg-white" style="margin-right: 16px; height: 80px;"><img src="<?= base_url('assets/ico-rs.svg')?>" style="width: 40px; margin-top: 18px;"><div style="margin-left: 8px; position: absolute; bottom: 30px; left: 68px;">Cari Rumah Sakit</div></div>
		<div class="col-2 bg-white" style="margin-right: 16px; height: 80px;"><img src="<?= base_url('assets/ico-cari.svg')?>" style="width: 40px; margin-top: 18px;"><div style="margin-left: 8px; position: absolute; bottom: 30px; left: 86px;">Cari Dokter</div></div>	
		<div class="col-2 bg-white" style="margin-right: 16px; height: 80px;"><img src="<?= base_url('assets/ico-tanya.svg')?>" style="width: 40px; margin-top: 18px;"><div style="margin-left: 8px; position: absolute; bottom: 30px; left: 86px;">Tanya Dokter</div></div>	
	</div>
</div>

<h3 class="info-sehat">Artikel Kesehatan Terkini untuk Anda</h3>
<div class="col-12">
	<hr class="container">
	<div class="d-flex flex-row flex-wrap" style="margin-left: 6%; padding: 8px;">
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
	<hr class="container">
</div>
<?php if ($this->session->flashdata('flash_success')) { ?>
        <div class="alert alert-success alert-dismissible col-12 float-right" style="position: absolute; width: 50%; z-index: 99; margin-left: 100px;">
	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    <?php echo $this->session->flashdata('flash_success')?>
	  </div>
    <?php } ?>
<div class="konten d-flex flex-row col-12">
	<div class="kesehatan">
		<div class="highlight p-2" >
			<img src="<?= base_url('assets/bumil.jpg')?>" class="img-fluid" alt="Responsive image">
			<h3>Makanan yang harus Dihindari Ibu Hamil</h3>
			<p class="w-50">Saat hamil, banyak hal yang harus dilakukan dengan lebih berhati-hati. Salah satunya adalah makan. Pasalnya, ada beberapa makanan yang harus...</p>
			<a href="#" class="text-primary">Baca Selengkapnya</a>	
		</div>


<?php error_reporting(0); foreach ($artikel as $row) {?>
		<div class="artikel p-2">
			<div class="d-flex flex-row flex-wrap">
				<div class="p-2">
					<img src="<?= base_url('assets/').$row->foto_artikel?>" width="300" height="166">	
				</div>
				<div class="p-2">
					<h3 style="font-size: 18px; margin-bottom: 24px; width: 350px;"><a href="<?= base_url('index.php/TambahArtikel_controller/readArtikel/').$row->id_artikel?>" class="text-dark" style="text-decoration: none;"><?= $row->judul_artikel?></a></h3>
					<div class="w-75" style="font-size: 16px;"><?= substr($row->deskripsi, 0, 100)?></div>
					<a href="<?= base_url('index.php/TambahArtikel_controller/readArtikel/').$row->id_artikel?>" class="text-primary">Baca Selengkapnya</a><br>
					<?php if($this->session->userdata('status') == "admin"){?>
					<a data-toggle="modal" data-target="#modal-edit<?=$row->id_artikel;?>" class="text-warning" data-popup="tooltip" data-placement="top" title="Edit Data" style="cursor: pointer;">Edit</a>
					<?php echo anchor('TambahArtikel_controller/deleteArtikel/'.$row->id_artikel, 'Delete', array('class'=>'delete text-danger', 'onclick'=>"return confirmDialog();")); ?>
					<?php }?>
					
				</div>
		</div>
	</div>
	<?php }?>
	<script>
		function confirmDialog() {
		    return confirm("Are you sure you want to delete this record?")
		}
	</script>

	<?= $error?>
	<!-- Modal Ubah Pertanyaan-->
	<?php $no=0; foreach($artikel as $row): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$row->id_artikel;?>" class="modal fade">
    <div class="modal-dialog">

      	<form enctype="multipart/form-data" method="post" action="<?= base_url('index.php/TambahArtikel_controller/editArtikel/').$row->id_artikel?>">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$row->id_artikel;?>" name="mod_id" class="form-control" >
          <input type="hidden" readonly value="<?=$row->foto_artikel;?>" name="old_image" class="form-control" >
 		<div class="form-group col-md-12">
          	<img src="<?= base_url('assets/').$row->foto_artikel?>" width="435" height="250">
          </div>
          <div class="form-group">
            <label class='col-md-3'>Judul</label>
            <div class='col-md-12'><input type="text" name="judulartikel" autocomplete="off" value="<?=$row->judul_artikel;?>" required placeholder="Masukkan Modal" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Deskripsi</label>
            <div class='col-md-12'>
            	<textarea name="textDeskripsi<?= $row->id_artikel?>"><?= $row->deskripsi?></textarea>
				<script>
                        CKEDITOR.replace('textDeskripsi<?= $row->id_artikel?>');
                </script>
            </div>
          </div>
          <div class="form-group col-md-12">
		    <label>Ubah Foto</label>
		    <input type="file" class="form-control-file" name="userfile">
		  </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Edit</button>
          </div>
        </form>
    </div>
  </div>
</div>
</div>
<?php endforeach; ?>

	<div class="col-5 p-2 float-right iklan" style="position: absolute; bottom: 0px; left:70%; top: 20px; width: 120px; margin-bottom: 24px">
		<img src="<?= base_url('assets/iklan.gif')?>" width="300px" style="padding-bottom: 24px">
		<img src="<?= base_url('assets/iklan2.jpg')?>" width="300px">
	</div>
	



	<div class="d-flex justify-content-end col-8" style="margin-left: 0px;">
	    <button class="btn btn-primary text-white p-2">Selanjutnya >></button>		
	</div>




<footer class="page-footer font-small blue pt-4" style="height:484px; position: relative; right: 120px; width: 115%; top: 250px;">
  <div class="banner-footer">
        <div class="container-footer flex-center">
          <img class="imagephone" src="<?= base_url('assets/bannerr.png')?>" alt="">
          <div class="text-banner">
              <h3>Chat lebih dari 500 dokter di Aplikasi Alodokter!</h3>
              <h4>Respons Cepat, Jawaban Akurat!</h4>
          </div>
          <div class="download-app">
              <a class="storeimg" href="https://alodokter.onelink.me/1997390319?pid=Web-Dekstop-Pageapp&is_retargeting=true&af_dp=alodokter%3A%2F%2F&af_web_dp=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.alodokter.android">
                <img src="<?= base_url('assets/googleplay.png')?>" alt="Google Play">
              </a>
              <br>
              <a class="appstore" href="https://alodokter.onelink.me/1997390319?pid=Web-Dekstop-IOS-Pageapp&is_retargeting=true&af_dp=alodokter%3A%2F%2F&af_web_dp=https%3A%2F%2Fitunes.apple.com%2FID%2Fapp%2Fid1405482962">
                <img src="<?= base_url('assets/appstore.png')?>" alt="App Store">  
              </a>

            </div>
        </div>
  </div>
  <div class="footer-inner">
    <!--footer top-->
    <div class="footer-top">
      <div class="footer-data-item aboutus">
          <ul>
              <li><a href="#!"><b>Alodokter</b></a></li>
              <br>
              <li><a href="#!" class="footerdesc" >Tentang Kami</a></li>
              <li><a href="#!" class="footerdesc">Karier</a></li>
              <li><a href="#!" class="footerdesc">Kontak Kami</a></li>
              <li><a href="#!" class="footerdesc">Tim Editorial</a></li>
              <li><a href="#!" class="footerdesc">Proteksi Alodokter</a></li>
          </ul>
      </div>
      <!--end of about us-->

      <div class="footer-data-item contact">
          <ul>
              <li><a href="#!"><b>Lainnya</b></a></li>
              <br>
              <li><a href="#!" class="footerdesc">Syarat dan Ketentuan</a></li>
              <li><a href="#!" class="footerdesc">Privasi</a></li>
              <li><a href="#!" class="footerdesc">Iklan</a></li>
              <li><a href="#!" class="footerdesc">Gabung di Tim Dokter</a></li>
              <li><a href="#!" class="footerdesc">Daftarkan Rumah Sakit Anda</a></li>
          </ul>
      </div>
      <!--end of contact-->

      <div class="footer-data-item social-media">
        <ul>
             <li style="margin-top:30px;"><a href="#!"><b>Media Social</b></a></li>
          </ul>
        <div class="footer-row">
            <ul class="socicons-list">
                <li>
                  <a href='your_url_here' target='_blank'><span class="socicon-facebook"  ></span></a> 
                </li>
                  <li>
                  <a href='your_url_here' target='_blank'><span class="socicon-twitter"></span></a> 
                </li> 
                <li>
                  <a href='your_url_here' target='_blank'><span class="socicon-linkedin"></span></a> 
                </li>   
                <li>
                  <a href='your_url_here' target='_blank'><span class="socicon-instagram"></span></a> 
                </li>
                <li>
                  <a href='your_url_here' target='_blank'><span class="socicon-youtube"></span></a> 
                </li>   
            </ul>
        </div>   
        <p class="footer-data-tittle"><b style="color:white;">Bagian Dari Alodokter</b></p>   
        <span>
          <a href="https://www.alomedika.com" target="_blank" class="footer-data-link">alomedika.com</a>  
        </span>
        <span>
          <a href="https://www.alomedika.com" target="_blank" class="footer-data-link">pobpad.com</a>
        </span>
      </div>
      <!--end of sosmed-->
    </div>
    <!--end of footer top-->
    <br>
    <hr>
    <!--footer bottom-->
    <div class="footer-copyright">
        <p>Hak Cipta © 2018 Alodokter</p>
    </div>

  </div> 
  <!--end of footer inner-->

</footer>
</body>
</html>
