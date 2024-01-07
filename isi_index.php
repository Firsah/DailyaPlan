<?php
    include('header.php');
?>
<!--CSS Style isi-indeks-->
<link rel="stylesheet" href="assets/css/style_isiIndex.css">

<!--CSS Style dragula -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bevacqua/dragula@3.7.3/dist/dragula.min.css">



<div class="container-isi-index">
    <div class="sampul">
        <img src="assets/img/sampul/sampul1.png" alt="Sampul">
    </div>
    <div class="header">
        <div class="judul-isi-index">
            Analisa Produk Baru
        </div>
        <div class="goal">
            Luangkanlah 80% waktumu untuk fokus pada peluang  hari esok, daripada tetap
            fokus pada masalah kemarin
        </div>
        <div class="partisipan">
            <div class="host">
                <b>Host :</b> Danu Yasa
            </div>
            <div class="anggota" id="anggota">
                <b>Anggota :</b> 3 Orang
            </div>
            <div class="daf-anggota" id="daf-anggota">
                <p></p>
                <p><span class="sts-online sts">Online</span>Rizal Salpatura</p>		
                <p><span class="sts-online sts">Online</span>Zainal Amanah</p>
                <p><span class="sts-ofline sts">Offline</span>Dina Jum'at</p>
                <p><span class="sts-ofline sts">Offline</span>Gendhis Desa </p>
            </div>
        </div>
    </div>

    <div class="cont-perencanaan">
        <div class="jdul-data-perencanaan">
            <i class="fa-solid fa-list-check fa-sm" style="color: #050505;"></i>Data Perencanaan 
        </div>
        <div class="status-perencanaan">
            <div class="not-drag belum-dimulai" onmousedown="return  false">
                <div class="jdl-status blum-dimulai">Belum Dimulai (0)</div>
                <div class="rencana" draggable="true">
                    <div class="header-rencana">
                        <div class="judul-rencana">Analisis content Iklan Berbentuk Video</div>
                        <div class="menu-perencanaan">
                            <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #050505;"></i>
                        </div>
                        <div class="isi-menu-perencanaan">
                            <ul>
                                <li><i class="fa-regular fa-pen-to-square fa-sm" style="color: #9c9c9a;" id="icon-menu-perencanaan"></i><a href="#">Ubah</a></li>
                                <li><i class="fa-regular fa-trash-can fa-sm" style="color: #9C9C9A;" id="icon-menu-perencanaan"></i><a href="#">Hapus</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="body-rencana">
                        <div class="tgl-mulai">
                            07 November 2023 09:00 WIB 
                        </div>
                        <div class="deadline">
                            <b class="jdl-deadline">Deadline :</b>
                            <div>09 November  2023 12:00 WIB</div> 
                        </div>
                        <div class="author">
                            <b>Author :</b> Alyna Tyas   
                        </div>
                    </div>
                </div>
            </div>
            <div class="swim-lane" id="proses">
                <div class="jdl-status proses-pjn">Proses Pengerjaan(0)</div>
                    <div class="rencana" draggable="true">
                        <div class="header-rencana">
                            <div class="judul-rencana">Revisi Content Dari Agensi Luar</div>
                            <div class="menu-perencanaan">
                                <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #050505;"></i>
                            </div>
                            <div class="isi-menu-perencanaan">
                                <ul>
                                    <li><i class="fa-regular fa-pen-to-square fa-sm" style="color: #9c9c9a;" id="icon-menu-perencanaan"></i><a href="#">Ubah</a></li>
                                    <li><i class="fa-regular fa-trash-can fa-sm" style="color: #9C9C9A;" id="icon-menu-perencanaan"></i><a href="#">Hapus</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="body-rencana">
                            <div class="tgl-mulai">
                                07 November 2023 09:00 WIB 
                            </div>
                            <div class="deadline">
                                <b class="jdl-deadline">Deadline :</b>
                                <div>09 November  2023 12:00 WIB</div> 
                            </div>
                            <div class="author">
                                <b>Author :</b> Alyna Tyas   
                            </div>
                        </div>
                    </div>
            </div> 
            <div class="swim-lane" id="selesai">
                <div class="jdl-status sli">Selesai(0)</div>
                    <div class="rencana" draggable="true">
                        <div class="header-rencana">
                            <div class="judul-rencana">Analisis Kompetitior</div>
                            <div class="menu-perencanaan">
                                <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #050505;"></i>
                            </div>
                            <div class="isi-menu-perencanaan">
                                <ul>
                                    <li><i class="fa-regular fa-pen-to-square fa-sm" style="color: #9c9c9a;" id="icon-menu-perencanaan"></i><a href="#">Ubah</a></li>
                                    <li><i class="fa-regular fa-trash-can fa-sm" style="color: #9C9C9A;" id="icon-menu-perencanaan"></i><a href="#">Hapus</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="body-rencana">
                            <div class="tgl-mulai">
                                07 November 2023 09:00 WIB 
                            </div>
                            <div class="deadline">
                                <b class="jdl-deadline">Deadline :</b>
                                <div>09 November  2023 12:00 WIB</div> 
                            </div>
                            <div class="author">
                                <b>Author :</b> Alyna Tyas   
                            </div>
                        </div> 
                </div>
            </div>
            <div class="swim-lane" id="batal">
                <div class="jdl-status btlkan">Dibatalkan(0)</div>
                    <div class="rencana" draggable="true">
                            <div class="header-rencana">
                                <div class="judul-rencana">Analisis Kompetitior</div>
                                <div class="menu-perencanaan">
                                    <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #050505;"></i>
                                </div>
                                <div class="isi-menu-perencanaan">
                                    <ul>
                                        <li><i class="fa-regular fa-pen-to-square fa-sm" style="color: #9c9c9a;" id="icon-menu-perencanaan"></i><a href="#">Ubah</a></li>
                                        <li><i class="fa-regular fa-trash-can fa-sm" style="color: #9C9C9A;" id="icon-menu-perencanaan"></i><a href="#">Hapus</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="body-rencana">
                                <div class="tgl-mulai">
                                    07 November 2023 09:00 WIB 
                                </div>
                                <div class="deadline">
                                    <b class="jdl-deadline">Deadline :</b>
                                    <div>09 November  2023 12:00 WIB</div> 
                                </div>
                                <div class="author">
                                    <b>Author :</b> Alyna Tyas   
                                </div>
                        </div>
                    </div>
            </div>
            <div class="not-drag waktu-habis" onmousedown="return  false">
                <div class="jdl-status wktu-hbs">Waktu Habis(0)</div>
                <div class="rencana" draggable="true">
                        <div class="header-rencana">
                            <div class="judul-rencana">Membuat Laporan Bulanan</div>
                            <div class="menu-perencanaan">
                                <i class="fa-solid fa-ellipsis-vertical fa-lg" style="color: #050505;"></i>
                            </div>
                            <div class="isi-menu-perencanaan">
                                <ul>
                                    <li><i class="fa-regular fa-pen-to-square fa-sm" style="color: #9c9c9a;" id="icon-menu-perencanaan"></i><a href="#">Ubah</a></li>
                                    <li><i class="fa-regular fa-trash-can fa-sm" style="color: #9C9C9A;" id="icon-menu-perencanaan"></i><a href="#">Hapus</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="body-rencana">
                            <div class="tgl-mulai">
                                07 November 2023 09:00 WIB 
                            </div>
                            <div class="deadline">
                                <b class="jdl-deadline">Deadline :</b>
                                <div>09 November  2023 12:00 WIB</div> 
                            </div>
                            <div class="author">
                                <b>Author :</b> Alyna Tyas   
                        </div>
                    </div>  
                </div>
            </div>     
        </div>
    </div>
</div>

 <!-------------- Modal Tambah Perencanaan ---------->
 <div class="btn-tambah-perencanaan">
    <i class="fa-solid fa-plus fa-xl" style="color: #FFF;"></i>
</div>

<div class="bg-modal-tambah-perencanaan"></div>
        <div class="modal-tambah-perencanaan">
            <div class="header-prcn">
                <div class="jud">Tambah Perencanaan</div>
                <div><i class="fa-regular fa-x fa-sm close-btn-prcn"></i></div>
            </div>
            <div class="content-prcn">
               <form action="" method="post">
                <div class="cont">
                    <label for="judul" class="label" >Judul Rencana<span style="color: #CB2027;">*</span></label>
                    <input type="text" name="#" id="judul" placeholder="Input Judul">
                </div>
                <div class="cont-date">
                    <div class="date">
                        <label for="tanggalMulai" class="label">Tanggal Mulai<span style="color: #CB2027;">*</span></label>
				        <input type="datetime-local" name="#" id="Tanggal Mulai">
                    </div>
                    <div class="date">
                        <label for="deadline" class="label">Deadline<span style="color: #CB2027;">*</span></label>
				        <input type="datetime-local" name="#" id="deadline">
                    </div>
                </div>

                <div class="cont">
                    <label for="dtlRencana" class="label">Detail Rencana<span style="color: #CB2027;">*</span></label>
                    <div class="btn-showTolbar"><i class="fa-solid fa-arrow-down-wide-short fa-sm" style="color: #050505;"></i>Toolsbar</div>
                    <textarea class="ckeditor" name="#" id="dtlRencana"></textarea>
                </div>

                <div class="cont">
                    <input type="submit" value="Simpan">
                </div>
               </form>
            </div>
        </div>
 <!-------------- /Batas Modal Tambah Perencanaan ---------->


 <!-------------- Modal Detail Rencana ---------->
<div class="bg-modal-detail-rencana"></div>
        <div class="modal-detail-rencana">
            <div class="header-rcna">
                <div class="jud">Detail Rencana</div>
                <div><i class="fa-regular fa-x fa-sm close-btn-rcna"></i></div>
            </div>
            <div class="content-rcna">
                <div class="jdl-rencana">
                    Revisi Content Dari Agensi Luar 
                </div>
                <div class="date-rencana">
                    <div class="date-mulai">
                        <p><b>Mulai :  </b></p>
                        7 November 2023, 09:00 WIB
                    </div>
                    <div class="date-deadline">
                        <p><b style=" color : rgba(255, 77, 109, 1);">Deadline : </b></p>
                        9 November 2023, 12:00 WIB
                    </div>
                </div>
                <div class="author-detail">
                    <p><b>Author : </b></p>
                        Alyna Tyas <a href="#"><i class="fa-solid fa-up-right-from-square fa-xs" style="color: #9C9C9A;"></i></a>
                </div>    
                <div class="cont">
                <div class="btn-showTolbar"><i class="fa-solid fa-arrow-down-wide-short fa-sm" style="color: #050505;"></i>Toolsbar</div>
                    <textarea class="ckeditor" name="#" id="dtlRencana"></textarea>
                </div>

                <div class="cont">
                    <input type="submit" value="Ubah Rencana">
                </div>
            </div>
        </div>
 <!-------------- /Batas Modal Detail Rencana ---------->


<!-- Script  Drop and Drag Hal data Perencanaan -->
<script src="https://cdn.jsdelivr.net/gh/bevacqua/dragula@3.7.3/dist/dragula.min.js"></script>
<script>
    var drake = dragula([document.getElementById('proses'), document.getElementById('selesai'), document.getElementById('batal')], {
        accepts: function(el, target, source, sibling) {
            return target.classList.contains('swim-lane');
        },
        mirrorContainer: document.body,
    });

    drake.on('drag', function(el, source) {
        el.classList.add('is-dragging');
    });

    drake.on('dragend', function(el) {
        el.classList.remove('is-dragging');
    });
</script>

<?php include('footer.php') ?>



