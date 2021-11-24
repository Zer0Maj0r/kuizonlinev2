<?php
//WAJIB FAIL INI
require 'sambung.php';
//PERLUKAN FAIL INI
include 'header.php';
?>
<!-- MULA HTML -->
<html>
<body>
<header><?php include 'menu1.php' ?>
<center><h2><?php echo $motto_sistem;?></h2>
<font size="5" face="verdana" color="green">
SUBJEK:<?php echo $subjek;?></font>
</center>
</header>
<table width='70%' border='0' align="center">
<tr>
<td width ='10%'>
<img src="<?php echo $logo?>" width="100%" height="100%">
</td>
<td width='60%'>
<h3>Soalan Terkini</h3>
<?php include 'soalan.terkini.php' ?>
</td>
</tr>
</table>
<?php include 'footer.php';?>
</body>
</html>