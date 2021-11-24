<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';
//PERLUKAN FAIL INI
include 'header.php';
//SESI DATA
$nokp=$_SESSION['idpengguna'];
?>

<html>
<head><?php include 'menu.php'; ?></head>
<body>
<center><h2><?php echo $pengguna;?></h2></center>
<table width="70%  border ="0" align = "center" >
<tr><td>
<h2><b>SELAMAT DATANG:</b> <br></h2>
<?php
//Papar maklumat lengkap pengguna login
$dataA=mysqli_query($hubung,"SELECT * FROM pengguna WHERE idpengguna='$nokp'");
$infoA=mysqli_fetch_array($dataA);
?>
Nama Anda:<?php echo $infoA['nama'];?><br>
Nombor KP:<?php echo $infoA['idpengguna'];?></br>
</td></tr>
</table>
<?php include 'footer.php';?>
</body>
</html>