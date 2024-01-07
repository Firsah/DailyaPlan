<?php
    require_once('header.php');
?>

<!--CSS Style alert  -->
<link rel="stylesheet" href="assets/css/style_alert.css">

<!-- CSS DataTables Responsive -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

<div class="containerr">
    <div class="judul">Hak Akses</div>
        <div class="contentt">
        <table id="table-hakAkses" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>Detail</th>
                <th>Hak Akses</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align="center">1.</td>
                <td>Rizal Salpatura</td>
                <td align="center"><a href="detailAnggota.php"><button class="btn btn-sm" id="btn-detail"><i class="fa-solid fa-magnifying-glass fa-sm" style="color: #9C9C9A;margin-right : 5px;"></i>Lihat</button></a></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center">2.</td>
                <td>Zainal  Amanah</td>
                <td align="center"><a href="detailAnngota.php"><button class="btn btn-sm" id="btn-detail"><i class="fa-solid fa-magnifying-glass fa-sm" style="color: #9C9C9A;margin-right : 5px;"></i>Lihat</button></a></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                </div>
                </td>
            </tr>
            <tr>
                <td align="center">3. </td>
                <td>Dina Jum'at</td>
                <td align="center"><a href="detailAnngota.php"><button class="btn btn-sm" id="btn-detail"><i class="fa-solid fa-magnifying-glass fa-sm" style="color: #9C9C9A;margin-right : 5px;"></i>Lihat</button></a></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center">4.</td>
                <td>Gendhis Desa</td>
                <td align="center"><a href="detailAnngota.php"><button class="btn btn-sm" id="btn-detail"><i class="fa-solid fa-magnifying-glass fa-sm" style="color: #9C9C9A;margin-right : 5px;"></i>Lihat</button></a></td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>


<!-- modal konfirmasi pemberian hak akses -->
<div class="bg-modal-alert-konfirmasi-pemberian-hakAkses"></div> 
    <div class="modal-alert-konfirmasi-pemberian-hakAkses">
        <div class="content-alert">
            <div class="icon-checklish">
                    <i class="fa-solid fa-question fa-2xl" style="color: #FFD43B;"></i>
                </div>
            <div class="isi-alert">Apakah anda ingin memberikan  hak akses kepada <span><b>Rizal Salpatura</b></span>?</div>
        <div class="btn-alert">
            <a href="#" class="btn-oke">Oke</a>
            <a href="#" class="btn-batal">Batal</a>
        </div>
    </div>        
</div>


<!-- modal konfirmasi pemutusan hak akses -->
<div class="bg-modal-alert-konfirmasi-pemutusan-hakAkses"></div> 
    <div class="modal-alert-konfirmasi-pemutusan-hakAkses">
        <div class="content-alert">
            <div class="icon-checklish">
                    <i class="fa-solid fa-question fa-2xl" style="color: #fe3f40;"></i>
                </div>
            <div class="isi-alert">Apakah anda ingin memutuskan hak akses atas <span><b>Rizal Salpatura</b></span>?</div>
        <div class="btn-alert">
            <a href="#" class="btn-oke">Oke</a>
            <a href="#" class="btn-batal">Batal</a>
        </div>
    </div>        
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<script>
    new DataTable('#table-hakAkses', {
    responsive: true,
    rowReorder: {
        selector: 'td:nth-child(2)'
    }
});
</script>

<!-- 
<script>
    $(document).ready(function(){
        $('#table-hakAkses').DataTable();
    });    
</script>  -->

<?php include('footer.php') ?>
