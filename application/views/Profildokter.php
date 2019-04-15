<?php $this->load->view('Page_headerdokter')?>

<div class="d-flex flex-row flex-wrap container contain-profildokter">
    <div class="container" id="container">
        <div class="container" style="margin-top:-65px; margin-left:-40px; width:1700px;">
            <div data-spy="scroll" data-target=".menu-scrl" data-offset="50">
                <div class="menu-scrl doctor-scroll-menu-view">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" href="#section1" style=" margin-inline-start: 25px; font-weight:500; font-size:17px;">Profil Dokter</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#section2" style="margin-inline-start:150px;margin-top:-41px; font-weight:500; font-size:17px;">Jadwal Praktek</a>
                        </li>
                    </ul>
                </div>

                <div id="section1" class="container-fluid" style="padding-bottom:70px">
                    <h2 style="margin-inline-start:auto; margin-bottom:5px;">dr. Ni Putu Titien Sri Kusumayanti, Sp.OG</h2>
                    <a href="#" style="text-decoration: none;color: #3570d2;font-weight: 700;font-size:18px;margin-bottom:30px;">Dokter Kandungan</a>
                    <br><br>
                    <h6>Profil Dokter</h6>
                    <br>
                    <p>dr. Ni Putu Titien Sri Kusumayanti, Sp.OG merupakan seorang Dokter Spesialis Obstetri dan Ginekologi (Kebidanan dan Kandungan) yang saat ini berpraktek di Rumah Sakit Mitra Keluarga Cikarang. Adapaun layanan yang dapat diberikan beliau diantaranya Konsultasi Kehamilan, Tes Kehamilan, Melahirkan Normal, Operasi Caesar, USG Kehamilan, Suntik KB.</p>
                    <br>
                    <p>dr. Ni Putu Titien Sri Kusumayanti telah menamatkan pendidikan Kedokteran Spesialis Obstetri dan Ginekologi di Universitas Gadjah Mada, Yogyakarta. Beliau terhimpun dalam Perhimpunan Obstetri dan Ginekologi Indonesia.</p>
                    <br>
                    <h6>Pendidikan</h6>
                    <p>Sp.OG - Spesialis Obstetri dan Ginekologi - Universitas Gadjah Mada, Yogyakarta</p>
                
                </div>
                <div id="section2" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
                    <h6>Jadwal Praktek</h6>
                    <a href="#" style="text-decoration: none;color: #3570d2;font-weight: 500;font-size:16px;margin-bottom:30px;">Mitra Keluarga Cikarang</a>
                    <p style="text-decoration: none;color: #3570d2;font-weight: 500;font-size:16px;margin-bottom:30px;">Mulai dari Rp 135.000</p>

                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutup Jadwal</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>


                    <a href="#" style="text-decoration: none;color: #3570d2;font-weight: 500;font-size:16px;margin-bottom:30px;"></a>
                    
               
                </div>

                
            </div>
        <!-- end of main-container -->
        </div>
        <div class="side-container">
            <div class="d-flex flex-row flex-wrap container">
                <div class="doctor-button" id="button" style="margin-bottom:10px;">
                    <a href="#" class="btn btn-warning btn-doctor" style="background-color:  #f96d01;color: #FFFFFF;width:300px; height:50px;">Buat Janji Konsultasi</a>
                </div>
                <div class="p-2 box-filter box-doctor" style="height:558px;">
                    <div class="profil" style="margin:20px; margin-top:15px;">

                        <div class="card-doctor-profil">
                            <img src="<?= base_url('assets/dr.3.jpg')?>" alt="" style="border-radius: 100%; margin-top: 0px; text-align:center;" width="150px">
                            <p class="doctor-name" style="font-weight: 500;width: 170px;margin-left:40px;  margin-top: 10px;">dr. Ni Putu Titien Sri Kusumayanti, Sp.OG</p>
                            <a href="#" style="text-decoration: none;color: #3570d2;font-weight: 700;margin-left:10px;">Dokter Kandungan</a>
                        </div>
                        <div class="card-doctor-detail">
                            <p style="font-weight: 500;width: 170px;margin-left:0px;  margin-top: 25px;">Tindakan Medis: </p>
                            <ul style="font-size:14px; margin-left:-20px;">
                                <li style=" padding-bottom:5px;">Konsultasi Kehamilan</li>
                                <li style=" padding-bottom:5px;">Melahirkan Normal</li>
                                <li style=" padding-bottom:5px;">Operasi Caesar</li>
                                <li style=" padding-bottom:5px;">Suntik KB</li>
                                <li style=" padding-bottom:5px;">Tes Kehamilan</li>
                                <li style=" padding-bottom:5px;">USG Kehamilan</li>
                                <li style=" padding-bottom:5px;">Pemasangan dan Pelepasan IUD</li>
                            </ul>
                        </div>
                        
                    </div> 
                <!-- end of box-doctor -->
                </div>
            </div>
            <!-- end of side container -->
        </div>
        

    <!-- end of container -->
    </div>

</div>
<!-- end of contain-profildokter -->

<?php $this->load->view('Page_footer')?>
