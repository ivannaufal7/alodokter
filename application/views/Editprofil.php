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
       <div class="main-container2" style="position:relative;margin-left:270px;margin-top:-570px;margin-bottom:350px;"> 
            <div class="search-tab-menu-container"> 
                <div class="search-tab-menu"> 
                    <ul class="nav">
                    <li class="nav-item" style="width: 180px; text-align: center;">
                        <a class="nav-link" href="<?= base_url('index.php/Profile_controller')?>">Diskusi</a>
                    </li>
                    <li class="nav-item activ" style="width: 180px; text-align: center;">
                        <a class="nav-link active" href="<?= base_url('index.php/Editprofil_controller')?>">Edit Profil</a>
                    </li>
                    </ul>
                </div> 
            </div>
         
            <form class="form-profil" style="position:relative;margin-left:230px;margin-top:90px;">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label"><b>Nama Lengkap</b></label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Bio" class="col-sm-2 col-form-label"><b>Bio</b></label>
                    <div class="col-sm-7">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Bio"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label"><b>Ganti Kata Sandi</b></label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" id="password" placeholder="Masukkan kata sandi baru">
                    <br>
                    <input type="text" class="form-control" id="repassword" placeholder="Ulangi kata sandi">
                    </div>
                </div>
                <button class="btn btn-primary btn-download" style="margin-left:505px;">Perbarui Profil</button>
                
            </form>
        </div>
</div>
        
<?php $this->load->view('Page_footer')?>