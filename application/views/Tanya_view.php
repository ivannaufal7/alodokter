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
			<form class="form-group" action="<?= base_url('index.php/Tanya_controller/tanya')?>" method="post">
				<input type="text" class="form-control" style="margin-bottom: 12px;" name="topik" placeholder="Contoh: Dari umur berapa bayi boleh diberi makan pada ?">
				<textarea name="textTanya"></textarea>
				<script>
                        CKEDITOR.replace( 'textTanya' );
                </script>
                <div class="form-check" style="margin-top: 12px;">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Saya bersedia menerima notifikasi untuk pertanyaan ini
				  </label>
				</div>
				<div class="text-right">
				<button type="button" class="btn btn-outline-info btn-lg btn-tanya">Batal</button>
				<input type="submit" class="btn btn-primary btn-lg btn-tanya" value="Kirim" />				
			</div>
			</form>
			
			<?php 
			          }
			 ?>
		</div>
		<?php     
			  error_reporting(0);
			  foreach ($tanya as $val) {    	
		?>
			<div class="question d-flex flex-row flex-wrap">
				<img src="<?= base_url('assets/default_ava.png')?>" class="p-2 author" width="80px">
				<div class="d-flex flex-column">
					<h6 class="p-1"><?= $val->topik?></h6>	
					<p class="p-1">Oleh: <?= $val->username?></p>
				</div>
				<div class="d-flex flex-column col-8 float-right">
					<a href="#" class="p-1 text-right">0 Balasan</a>
					<p class="p-1 text-right"><?= $val->tanggal_tanya?></p>
				</div>
				<div class="p-3">Hallo dok</div>
				<?php
					if($this->session->userdata('id') == $val->id_pasien){
				?>
				<div class="float-right">
					<a data-toggle="modal" data-target="#modal-edit<?=$val->id_pertanyaan;?>" class="btn btn-warning" data-popup="tooltip" data-placement="top" title="Edit Data">Edit</a>
					<?php echo anchor('Tanya_controller/deletePertanyaan/'.$val->id_pertanyaan, 'Delete', array('class'=>'delete btn btn-danger', 'onclick'=>"return confirmDialog();")); ?>
				</div>
				<?php
					}
				?>
				<script>
					function confirmDialog() {
					    return confirm("Are you sure you want to delete this record?")
					}
				</script>
		</div>
		<?php
			          }
	     ?>
		
		
	</div>
		<div class="col-5 p-2 float-right iklan" style="position: absolute; bottom: 0px; left:70%; top: 20px; width: 120px;">
		<img src="<?= base_url('assets/iklan.gif')?>" width="300px" style="padding-bottom: 24px">
		<img src="<?= base_url('assets/iklan2.jpg')?>" width="300px">
	</div>
	<div class="col-7" style="margin-left: 65px;">
				<button class="btn btn-primary text-white float-right">Selanjutnya >></button>		
	</div>

	<!-- Modal Ubah Pertanyaan-->
	<?php $no=0; foreach($tanya as $val): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$val->id_pertanyaan;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Tanya_controller/editPertanyaan/').$val->id_pertanyaan; ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
 
          <input type="hidden" readonly value="<?=$val->id_pertanyaan;?>" name="mod_id" class="form-control" >
 
          <div class="form-group">
            <label class='col-md-3'>Topik</label>
            <div class='col-md-12'><input type="text" name="topik" autocomplete="off" value="<?=$val->topik;?>" required placeholder="Masukkan Modal" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Pertanyaan</label>
            <div class='col-md-12'>
            	<textarea name="textQuestion<?= $val->id_pertanyaan?>"><?= $val->pertanyaan?></textarea>
				<script>
                        CKEDITOR.replace('textQuestion<?= $val->id_pertanyaan?>');
                </script>
            </div>
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
<?php endforeach; ?>

</div>