<?php
    require_once('header.php');
?>

<div class="containerr">
    <div class="judul">Hak Akses</div>
        <div class="contentt">
        <table id="table-hakAkses" class="table   table-bordered table-responsive" style="width:100%">
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
                <td align="center"><a href="detailAnngota.php"><button class="btn btn-sm" id="btn-detail"><i class="fa-solid fa-magnifying-glass fa-sm" style="color: #9C9C9A;margin-right : 5px;"></i>Lihat</button></a></td>
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

<script>
    $(document).ready(function(){
        $('#table-hakAkses').DataTable();
    });    
</script>

<?php require_once('footer.php') ?>
