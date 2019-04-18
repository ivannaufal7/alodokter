<?php $this->load->view('page_header.php')?>
<div style="margin-top: 80px">
<h1 class="container">Tambah Artikel</h1>
<div class="container">
<?php foreach ($artikel as $row) {?>
  <?php echo form_open_multipart('TambahArtikel_controller/editArtikel').$row->id_artikel;?>
<?php error_reporting(0); echo $error?>
  <div class="form-group">
    <label>Judul Artikel</label>
    <input type="text" class="form-control" name="judulartikel" placeholder="Tulis judul artikel" value="<?= $row->judul_artikel?>">
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi" value="<?= $row->deskripsi?>"></textarea>
    <script>
                CKEDITOR.replace( 'deskripsi' );
        </script>
  </div>
    <div class="form-group">
    <label>Tambah Foto</label>
    <input type="file" class="form-control-file" name="userfile">
  </div>
  <button type="submit" name="submit" class="btn btn-primary float-right col-2">Upload</button>
</div>

<?php } ?>
	
</div>