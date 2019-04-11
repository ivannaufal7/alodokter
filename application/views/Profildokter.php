<?php $this->load->view('Page_headerdokter')?>

<div class="d-flex flex-row flex-wrap container contain-profildokter">
    <div class="container" id="container">

        <div class="main-container">
            <div class="doctor-scroll-menu-view">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Info Kesehatan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('index.php/caridokter')?>">Cari Dokter <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('index.php/cariRS')?>">Cari Rumah Sakit <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('index.php/tanya')?>">Tanya Dokter <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <button class="btn btn-outline-info btn-primary btn-masuk" style="margin-right: 8px; margin-left: 8px;">Masuk</button>
                    <button class="btn btn-primary btn-download">Download Aplikasi</button>
                </li>
            </ul>
                <hr>
            </div>
        </div>
        
        <div class="side-container">

        </div>

    <!-- end of container -->
    </div>

</div>
<!-- end of contain-profildokter -->