<?php $this->load->view('page_header');?>
<div class="container" style="margin-top: 86px;">
	<h1 style="width: 860px;"><?= $judul_artikel?></h1>
	<img src="<?= base_url('assets/').$foto?>" style="margin-top: 24px; width: 800px;">
	<div style="width: 70%; margin-top: 16px;"><?= $deskripsi?></div>
</div>
<div class="col-5 p-2 float-right iklan" style="position: absolute; bottom: 0px; left:70%; top: -40px; width: 120px;">
		<img src="<?= base_url('assets/iklan.gif')?>" width="300px" style="padding-bottom: 24px">
		<img src="<?= base_url('assets/iklan2.jpg')?>" width="300px">
	</div>
