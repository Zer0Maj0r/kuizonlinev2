<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';
//Dapatkan ID dari URL
$pelajar_hapus = $_GET['idpengguna'];
//LAKSANA DELETE
$hapuskan1 = mysqli_query($hubung,"DELETE FROM pengguna WHERE idsoalan='$pelajar_hapus'");
$hapuskan2 = mysqli_query($hubung,"DELETE FROM perekodan WHERE idsoalan='$pelajar_hapus'");
//MESEJ POP UP
echo "<script>alert('Hapus pelajar berjaya');
window.location='senarai_pelajar.php'</script>";
?>