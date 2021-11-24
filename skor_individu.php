<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
$idpengguna=$_SESSION['idpengguna'];
?>

<html>
<body>
<head><?php include 'menu.php'; ?></head>
<center><h2>REKOD MARKAH YANG DICAPAI</h2></center>
<main>
<table width="70%" border="0" align="center"
style="font-size:16px">
<tr>
<td width="2%"><b>Bil.</b></td>
<td width="45%"><b>Topik</b></td>
<td width="8%"><b>Jenis Soalan</b></td>
<td width="12%"><b>Tarikh/Masa</b></td>
<td width="4%"><b>Skor</b></td>
<td width="4%"><b>Markah</b></td>
</tr>
<?php
$no=1;
$data1=mysqli_query($hubung,"SELECT * FROM perekodan
WHERE idpengguna='$idpengguna' ORDER BY catatan_masa DESC LIMIT 0,10");
while ($info1=mysqli_fetch_array($data1))
{
//TABLE TOPIK
$dataTopik=mysqli_query($hubung,"SELECT * FROM topik WHERE idtopik='$info1[idtopik]'");
$getTopik=mysqli_fetch_array($dataTopik);
//TABLE SOALAN, NAK DAPATKAN BILANGAN SOALAN
$dataTopik=mysqli_query($hubung,"SELECT jenis,COUNT(idtopik) as 'bil' FROM soalan WHERE idtopik='$info1[idtopik]'");
$infoSoalan=mysqli_fetch_array($dataSoalan);
//VARIABLE VALUE
$jenisSoalan=$info1['jenis'];
$bilSoalan=$infoSoalan['bil'];
$markah_Topik=$getTopik['markah'];
?>
<tr style='font-size:14px'>
<td><?php echo $no; ?></td>
<td><?php echo $getTopik['topik']; ?></td>
<td align="center"><?php
if($jenisSoalan==1){
echo "MCQ/TF";    
}else{
echo "FIB";
}
?></td>
<td align="center"><?php echo date('d-m-Y g:i A',
strtotime($info1['catatan_masa'])); ?></td>
<td align="center"><?php echo $info1['skor']; ?></td>
<td align="center"><?php echo number_format(($info1['skor']/$bilSoalan)*$markah_Topik); ?>%</td>
</tr>
<?php $no++; } ?>
</table>
</main>
<center>
<font style='font-size:14px'>
* Rekod yang dipaparkan adalah 10 yang terkini *
<br />Jumlah Rekod:<?php echo $no-1; ?></font></center>
</body>
</html>