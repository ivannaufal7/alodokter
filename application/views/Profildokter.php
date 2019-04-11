<?php $this->load->view('Page_headerdokter')?>

<div class="d-flex flex-row flex-wrap container contain-profildokter">
    <div class="container" id="container">

        <div class="main-container">
            <div class="p-4">

            </div>
            <div class="doctor-scroll-menu-view" style="margin-left: -50px; margin-top:-15px;width: 670px;">
           
                
            </div>
        </div>
        <div class="side-container">
            <div class="d-flex flex-row flex-wrap container side-container">
                <div class="doctor-button" id="button" style="margin-bottom:10px;">
                    <a href="#" class="btn btn-warning btn-doctor" style="background-color:  #f96d01;color: #FFFFFF;width:300px; height:50px;">Buat Janji Konsultasi</a>
                </div>
                <div class="p-2 box-filter box-doctor" style="height:558px;">
                    <div class="profil" style="margin:20px; margin-top:15px;">

                        <div class="card-doctor-profil">
                            <img src="<?= base_url('assets/dr.3.jpg')?>" alt="" style="border-radius: 100%; margin-top: 0px; margin-left:45px;" width="150px">
                            <p class="doctor-name" style="font-weight: 500;width: 170px;margin-left:50px;  margin-top: 10px;">dr. Ni Putu Titien Sri Kusumayanti, Sp.OG</p>
                            <a href="#" style="text-decoration: none;color: #3570d2;font-weight: 700;margin-left:50px;">Dokter Kandungan</a>
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
                </div>
            </div>
        </div>
        

    <!-- end of container -->
    </div>

</div>
<!-- end of contain-profildokter -->

<?php $this->load->view('Page_footer')?>
