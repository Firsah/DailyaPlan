<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dailyThos</title>
    <!--CSS Style indeks-->
    <link rel="stylesheet" href="assets/css/style_index.css">
    <!--CSS Style Hak Akses -->
    <link rel="stylesheet" href="assets/css/style_hakAkses.css">
    <!--CSS Style Footer -->
    <link rel="stylesheet" href="assets/css/style_footer.css">
    <!--Font Awesome-->
	<link rel="stylesheet" href="assets/fontawesome-free-6.5.0-web/css/all.css">
    <!--Box Icon-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/bootstrap-5.3.2/dist/css/bootstrap.min.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="assets/DataTables/DataTables-1.13.8/css/dataTables.bootstrap5.min.css"> 
    <!-- Virtual Select -->
    <link rel="stylesheet" href="assets/css/virtual-select.min.css">
    <!--JQUERY-->
    <script src="assets/js/jquery.js"></script>
<body>
    <div class="navbar-containerr">
        <a href="index.php" class="logo"><img src="assets/img/logo dailytos.png" width="48" height="30" alt="Logo Dailythos"></a>
        
        <ul class="navbar">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>

        <div class="main">
            <div class="marker"></div>
            <a href="#"> <i class="fa-regular fa-bell fa-xl" id="bell"></i></a>
            <div class="bx bx-menu-alt-right" id="menu-icon"></div>
        </div>
    </div>

    <div class="notif-modal">
        <div class="notif-modal-judul">
            <p>Notifikasi Baru</p>
            <hr>
        </div>
        <div class="container-modal">
            <div class="notif-modal-content add">
                <div class="isi">
                    <a href="#">Anda  telah <span style="color: darkgreen; font-weight: bold;">ditambahkan</span> oleh <span>Danu yasa</span> ke ruang perencanaan : <span>Rencana Harian Ke-1</span> </a>
                </div>
                <div class="date">
                    07 Desember 2023 10:30 WIB
                    <hr>
                </div>
            </div>

            <div class="notif-modal-content remove">
                <div class="isi">
                    <a href="#">Anda telah <span style="color: #CB2027; font-weight: bold;" >dikeluarkan</span> oleh <span>Danu yasa</span> pada ruang perencanaan : <span>Rencana Harian Ke-1</span></a>
                </div>
                <div class="date">
                    07 Desember 2023 10:30 WIB
                    <hr>
                </div>
            </div>

            <div class="notif-modal-content add">
                <div class="isi">
                    <a href="#">Anda telah <span style="color: darkgreen; font-weight: bold;">ditambahkan</span> oleh <span>Danu yasa</span> ke ruang perencanaan : <span>Rencana Harian Ke-1</span></a>
                </div>
                <div class="date">
                    07 Desember 2023 10:30 WIB
                    <hr>
                </div>
            </div>

            <div class="notif-modal-content add">
            <div class="isi">
                <a href="#">Anda telah <span style="color: darkgreen; font-weight: bold;">ditambahkan</span> oleh <span>Danu yasa</span> ke ruang perencanaan : <span>Rencana Harian Ke-1</span></a>
            </div>
            <div class="date">
                07 Desember 2023 10:30 WIB
                <hr>
            </div>
         </div>
        </div>
    </div>
    <!------- Batas  Header -------->

<?php require_once('footer.php'); ?> 