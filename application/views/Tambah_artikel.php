<?php $this->load->view('page_header.php')?>
<div style="margin-top: 80px">
<h1 class="container">Tambah Artikel</h1>
<form class="container" method="post" action="<?= base_url('index.php/TambahArtikel_controller/entryArtikel')?>"> 
  <div class="form-group">
    <label>Judul Artikel</label>
    <input type="text" class="form-control" name="judulartikel" placeholder="Tulis judul artikel">
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea name="deskripsi"></textarea>
		<script>
                CKEDITOR.replace( 'deskripsi' );
        </script>
  </div>
    <div class="form-group">
    <label>Tambah Foto</label>
    <input type="file" class="form-control-file" name="photo">
  </div>
  <button type="submit" name="submit" class="btn btn-primary float-right col-2">Upload</button>
</form>
</div>