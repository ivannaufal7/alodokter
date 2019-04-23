<?php $this->load->view('Page_header')?>
<div class="side-container" style="margin-top: 60px;">
            <div class="d-flex flex-row flex-wrap container ">
                <div class="p-2 box-filter box-profile bg-white" style="height:558px;">
                    <div class="text-center" style="margin-top:15px;">

                        <div class="text-center">
                            <img src="<?= base_url('assets/dr.3.jpg')?>" alt="" style="border-radius: 100%; margin-top: 0px; margin-bottom: :0px;" width="150px">
                            <p class="text-center text-primary" style="margin-top: 8px; font-weight: bold;"><?= $this->session->userdata('username')?></p> 
                        </div>
                        <div class="">
                            <p class="text-center" style="font-weight: bold;">Bio </p>
                            <p class="text-center">-</p>
                        </div>
                        <div class="">
                            <p class="text-center" style="font-weight: bold;">Email </p>
                            <p class="text-center">-</p>
                        </div>
                        <div class="">
                            <p class="text-center" style="font-weight: bold;">Diskusi </p>
                            <p class="text-center">-</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
       <div class="main-container"> 
       	<div class="search-tab-menu-container"> 
       		<div class="search-tab-menu"> 
       			<ul class="nav">
				  <li class="nav-item activ" style="width: 180px; text-align: center;">
				    <a class="nav-link active" href="<?= base_url('index.php/Profile_controller')?>">Diskusi</a>
				  </li>
				  <li class="nav-item" style="width: 180px; text-align: center;">
				    <a class="nav-link" href="<?= base_url('index.php/Editprofil_controller')?>">Edit Profil</a>
				  </li>
				</ul>
       		</div> 
         </div>
         

		<?php 
			  error_reporting(0);    
			  foreach ($tanya as $val) {    	
		?>
		 <!--1-->
                <div class="card p-2" style="width: 780px; height: 130px; margin-top: 16px; margin-left: 0px;">
                  <div class="d-flex flex-row flex-wrap"> 
                  <div class="p-1">
                      <img src="<?= base_url('assets/default_ava.png')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title"><?= $val->topik?></h6>
                      <p class="card-text" style="font-size: 14px; margin-bottom: 4px; margin-top:-5px;">Oleh: <?= $val->username?></p>
                      <p class="card-text" style="font-size: 16px; margin-bottom: 4px; margin-left:0px;"><?= $val->pertanyaan?></p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary text-right" style="margin: 10px; position: relative; left: 8px; font-size: 16px;">0 Balasan</p>
                      <p class="text-right" style="margin-left: 24px; font-size: 16px; margin-top:-10px;"><?= $val->tanggal_tanya?></p>
                      <?php
							if($this->session->userdata('id_pasien') == $val->id_pasien){
						?>
                      <div>
                        <?php echo anchor('Tanya_controller/deletePertanyaanProfil/'.$val->id_pertanyaan, 'Delete', array('class'=>'delete btn btn-danger float-right', 'onclick'=>"return confirmDialog();")); ?>
                        <a data-toggle="modal" data-target="#modal-edit<?=$val->id_pertanyaan;?>" class="btn btn-warning float-right text-white" data-popup="tooltip" data-placement="top" title="Edit Data" style="margin-right: 8px;">Edit</a>
              
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
                  </div>  
                </div>
                <?php
					   }
			     ?>   


       </div>

       <!-- Modal Ubah Pertanyaan-->
	<?php $no=0; foreach($tanya as $val): $no++; ?>
<div class="row">
  <div id="modal-edit<?=$val->id_pertanyaan;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('Tanya_controller/editPertanyaanProfil/').$val->id_pertanyaan; ?>" method="post">
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

<?php $this->load->view('Page_footer')?>