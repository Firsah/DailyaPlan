<?php
    include('header.php'); 
?>

<!--CSS Style profile -->
<link rel="stylesheet" href="assets/css/style_profile.css">

<div class="container-profile">
        <div class="judul-index">Profile</div>
    <div id="content-profile">
        <div class="foto-profile">
            <img src="assets/img/foto profile/default  profile.png" alt="Foto Profile">
        </div>
           <div class="card-profile">
                <div class="kolom"><label class="jdl-kolom">Nama</label><span class="isi-kolom">Danu Yasa</span></div>
                <div class="kolom"><label class="jdl-kolom">Posisi</label><span class="isi-kolom">ADV </span></div>
                <div class="kolom"><label class="jdl-kolom">Email</label><span class="isi-kolom">Danu562@gmail.com</span></div>
                <div class="kolom"><label class="jdl-kolom">Team</label><span class="isi-kolom">Digital  Insight</span></div>
                <div class="kolom"><label class="jdl-kolom">Lokasi</label><span class="isi-kolom">Bobosan</span></div>
                <div class="kolom"><label class="jdl-kolom">No HP</label><span class="isi-kolom">087899703404</span></div>
                <div class="btn-profile">
                <div class="btn-editProfiles"> 
                    <a href="#" class="btn-editProfile">Edit Profile</a>
                </div>
                <div class="btn-editPasswords">
                    <a href="#" class="btn-editPassword">Edit Password</a>
                </div>
                </div>
            </div> 
    </div>                   
</div>

<!--------------   Modal Edit Profile  ----------------->
        <div class="bg-modal-edit-profile"></div>
        <div class="modal-edit-profile">
            <div class="header-ep">
                <div class="jud">Edit Profile</div>
                <div><i class="fa-regular fa-x fa-sm close-btn-ep"></i></div>
            </div>
            <div class="content-ep">
                <form action="" method="post">
                <div class="cont">
                    <label for="nama" class="label" >Nama<span style="color: #CB2027;">*</span></label>
                    <input type="text" name="#" id="nama" placeholder="Input Nama Lengkap">
                </div>

                <div class="cont">
                    <label for="posisi" class="label" >Posisi<span style="color: #CB2027;">*</span></label>
                    <input type="text" name="#" id="posisi" placeholder="Input Posisi">
                </div>

                <div class="cont">
                    <label for="email"class="label" >Email<span style="color: #CB2027;">*</span></label>
                    <input type="email" name="#" id="email" placeholder="Input Email">
                </div>

                <div class="cont">
                    <label for="noHp"class="label" >No HP<span style="color: #CB2027;">*</span></label>
                    <input type="number" name="#" id="noHP" placeholder="Input No HP">
                </div>

                <div class="cont">
                    <label for="lokasi" class="label">Lokasi<span style="color: #CB2027;">*</span></label>
				    <textarea name="#" id="goa" rows="2" placeholder="Input Lokasi"></textarea>
                </div>
                <div class="cont">
                    <label for="foto-profile" class="label">Foto Profile</label>
                        <input type="file" name="#" id="foto-profile">
                    <div class="ket-sampul">
                        <span style="color: #CB2027">*</span>File Maksimal 2mb(jpg,PNG,JPEG)
                    </div>
                </div>
                <div class="cont">
                    <input type="submit" value="Simpan">
                </div>
                </form>
            </div>
        </div>

<!--------------   Modal Edit Password  ----------------->
<div class="bg-modal-edit-password"></div>
        <div class="modal-edit-password">
            <div class="header-epswd">
                <div class="jud">Edit Password</div>
                <div><i class="fa-regular fa-x fa-sm close-btn-epswd"></i></div>
            </div>
            <div class="content-epswd">
                <form action="" method="post">
                <div class="cont">
                    <label for="email"class="label" >Email<span style="color: #CB2027;">*</span></label>
                    <input type="email" name="#" id="email" placeholder="Input Email" readonly>
                </div>

                <div class="cont">
                    <label for="password"class="label" >Password<span style="color: #CB2027;">*</span></label>
                    <input type="password" name="#" id="password" placeholder="Input Password">
                </div>

                <div class="cont">
                    <input type="submit" value="Simpan">
                </div>
               </form>
            </div>
        </div>


<?php
    include('footer.php');
?>