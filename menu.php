<?php
if ($_SESSION['level']=="ADMIN")
{
?>
<!-- MENU ADMIN -->
<center>
<a href="index2.php">Home</a> |
<a href="papar_topik.php">Kuiz</a> |
<a href="prestasi_topik.php">Prestasi Pelajar</a> |
<a href="senarai_pelajar.php">Senarai Pelajar</a> |
<a href="import_daftar.php">Import Pelajar</a> |
<a href="logout.php">Log Keluar</a>
</br>
<?php $pengguna="DASHBOARD GURU";?>
</center>
<?php
}else{
?>
<!-- MENU PELAJAR -->
<center></br>
<a href="index2.php">Home</a> |
<a href="pilihan_topik.php">Mula Kuiz</a> |
<a href="skor_individu.php">Prestasi</a> |
<a href="logout.php">Log Keluar</a>
</br>
<?php $pengguna="DASHBOARD PELAJAR";?>
</center>
<?php
}
?>