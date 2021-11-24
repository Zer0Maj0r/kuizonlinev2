<?php
require 'keselamatan.php';
require 'sambung.php';
include 'header.php';
?>

<html>
<head><?php include 'menu.php'; ?></head>
<body>
<center><h2>PRESTASI PELAJAR BERDASARKAN TOPIK</h2>
</center>
<main>
<table width="70%" border="0" align="center"
style='font-size:16px'>
<tr>
<td width="2%"><b>Bil.</b></td>
<td width="50%"><b>Topik</b></td>
<td width="10%"><b>Bil. Menjawab</b></td>
<td width="8%"><b>Laporan</b></td>
</tr>
<?php
$no=1;
$topik=mysqli_query($hubung,"SELECT * FROM topik");
while ($infoTopik=mysqli_fetch_array($topik))
{
$rekod=mysqli_query($hubung,"SELECT idtopik,COUNT(idtopik) as 'bil'FROM perekodan WHERE idtopik='$infoTopik");
$infoJawab=mysqli_fetch_array($rekod);
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $infoTopik['topik']; ?></td>
<td><?php echo $infoJawab['bil']; ?></td>
<td><a href="laporan_guru.php?idtopik=
<?php echo $infoTopik['idtopik'];?>"><button>BUKA
</button></a></td>
</tr>
<?php $no++; } ?>
</table>
</main>
<center><font style='font-size:14px'>
* Senarai Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font>
</center>
</body>
</html>