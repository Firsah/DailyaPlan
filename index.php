<?php
    require_once('header.php');
?>

<!--CSS Style alert  -->
<link rel="stylesheet" href="assets/css/style_alert.css">

    <div class="container-index">
    <div class="judul-index">Ruang Perencanaan</div>
      <div id="content">
        <?php 
            $ulangi =  0;
            
            while ($ulangi < 7 ) { $ulangi++ ?>
                
             <div class="card">
                <div class="sampul-awal">
                    <img src="assets/img/sampul/sampul1.png" alt="Sampul">
                </div>
                <div class="sampul-foto-profile">
                    <img src="assets/img/foto profile/default  profile.png" alt="Sampul foto profile">
                </div>
                <div class="menu-card">
                    <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #050505;"></i>
                </div>
                <div class="isi-menu-card">
                    <ul>
                        <li><i class="fa-regular fa-pen-to-square fa-sm" style="color: #9c9c9a;" id="icon-menu-card"></i><a href="#">Ubah</a></li>
                        <li><i class="fa-regular fa-user fa-sm" style="color: #9C9C9A;"  id="icon-menu-card"></i><a href="hak_akses.php">Detail Anggota</a></li>
                        <li><i class="fa-regular fa-trash-can fa-sm" style="color: #9C9C9A;" id="icon-menu-card"></i><a href="#">Hapus</a></li>
                    </ul>
                </div>
                <a id="isi-card-click" href="isi_index.php">
                <div class="isi-card">
                    <div class="nama-host">Danu yasa</div>
                    <div class="posisi-host">ADV</div>
                    <div class="judul-card">Analisa Produk Baru</div>
                    <div class="status">
                        <div class="isi-status">Belum Dimulai(1)</div>
                        <div class="isi-status">Pengerjaan(0)</div>
                        <div class="isi-status">Selesai(1)</div>
                        <div class="isi-status">Revisi(1)</div>
                        <div class="isi-status">Hasil Revisi(0)</div>
                        <div class="isi-status">Waktu Habis(0)</div>
                        <div class="isi-status">Dibatalkan(0)</div>
                    </div>
                    <div class="tot-anggota">Total Anggota : 10 </div>
                </div>
                </a>
            </div>
            <?php } ?>
      </div> 
    </div>

    <!-- modal tambah ruang perencanaan  Berhasil -->
    <div class="bg-modal-alert-berhasil"></div> 
        <div class="modal-alert-tr-berhasil">
            <div class="content-alert">
            <div class="icon-checklish">
                    <i class="fa-solid fa-check fa-2xl" style="color: #4ecb71;"></i>
                </div>
                <div class="jud">HOREE!!</div>
                    <div class="isi-alert">Tambah Ruang Perencanaan Berhasil &#128522</div>
                <div class="btn-alert">
                    <a href="index.php">Oke</a>
                </div>
            </div>        
        </div>

    <!-- modal tambah ruang perencanaan  Gagal -->
    <div class="bg-modal-alert-gagal"></div> 
        <div class="modal-alert-tr-gagal">
            <div class="content-alert">
            <div class="icon-checklish">
                    <i class="fa-solid fa-exclamation fa-2xl" style="color: #fe3f40;"></i>
                </div>
                <div class="jud">Maaf!!</div>
                    <div class="isi-alert">Tambah Ruang Perencanaan Gagal &#128522</div>
                <div class="btn-alert">
                    <a href="index.php">Oke</a>
                </div>
            </div>        
        </div>


    <!-- modal edit ruangan  Berhasil -->
    <div class="bg-modal-alert-berhasil"></div> 
        <div class="modal-alert-tr-berhasil">
            <div class="content-alert">
            <div class="icon-checklish">
                    <i class="fa-solid fa-check fa-2xl" style="color: #4ecb71;"></i>
                </div>
                <div class="jud">HOREE!!</div>
                    <div class="isi-alert">Tambah Ruang Perencanaan Berhasil &#128522</div>
                <div class="btn-alert">
                    <a href="index.php">Oke</a>
                </div>
            </div>        
        </div>


    <!-- modal edit ruang  perencanaan  Gagal -->
    <div class="bg-modal-alert-edit-berhasil"></div> 
        <div class="modal-alert-edit-berhasil">
            <div class="content-alert">
            <div class="icon-checklish">
                    <i class="fa-solid fa-check fa-2xl" style="color: #4ecb71;"></i>
                </div>
                <div class="jud">HOREE!!</div>
                    <div class="isi-alert">Edit Ruang Perencanaan Berhasil &#128522</div>
                <div class="btn-alert">
                    <a href="index.php">Oke</a>
                </div>
            </div>        
        </div>


        <!-------------- Modal Tambah Ruangan  ---------->
    <div class="btn-tambah-ruangan">
        <i class="fa-solid fa-plus fa-xl" style="color: #ffffff;"></i>
    </div> 
    <div class="bg-modal-tambah-ruangan"></div>
        <div class="modal-tambah-ruangan">
            <div class="header-mtr">
                <div class="jud">Tambah Ruang Perencanaan</div>
                <div><i class="fa-regular fa-x fa-sm close-btn-mtr"></i></div>
            </div>
            <div class="content-mtr">
               <form action="" method="post">
                <div class="cont">
                    <label for="judul"class="label" >Judul<span style="color: #CB2027;">*</span></label>
                    <input type="text" name="#" id="judul" placeholder="Input Judul">
                </div>

                <div class="cont">
                    <label for="goal" class="label">Goal<span style="color: #CB2027;">*</span></label>
				    <textarea name="" id="goal" rows="2" placeholder="Input Goal"></textarea>
                </div>

                <div class="cont">
                    <label for="anggota" class="label">Anggota</label>
                        <select id="multipleSelect" multiple name="native-select" placeholder="Pilih Anggota" data-search="true" data-silent-initial-value-set="true">
                            <option value="1">Apri Sala</option>
                            <option value="2">Jaenab</option>
                            <option value="3">Jaenul</option>
                            <option value="4">Zana</option>
                            <option value="5">Rika</option>
                        </select>
                </div>
				
                <div class="cont">
                    <label for="sampul" class="label">Sampul</label>
                     <input type="file" name="#" id="sampul">
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
        
    <script>
        VirtualSelect.init({ 
            ele: '#multipleSelect'
        });
    </script>

<?php include('footer.php') ?>
