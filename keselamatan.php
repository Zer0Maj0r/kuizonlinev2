<?php
session_start();
//MULAKAN SESI LOGIN
if(isset($_SESSION['idpengguna'])){
//JIKA BELUM LOGIN, LENCONGKAN KE FAIL INI
header('Location: index.php');
exit();  }
?>