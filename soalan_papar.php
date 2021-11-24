<?php
require 'sambung.php';
include 'header.php';
?>
<?php session_start(); ?>
<?php
$topik_pilihan=$_SESSION['pilih_topik'];
$jenis=$_SESSION['jenis_soalan'];

$dataTopik=mysqli_query($hubung,"SELECT * FROM topik WHERE idtopik=$topik_pilihan");
$getTopik=mysqli_fetch_array($dataTopik);

//JUMLAH SOALAN
$query = "SELECT * FROM soalan WHERE idtopik=$topik_pilihan AND jenis=$jenis";
$results = mysqli_query($hubung,$query);
$total=mysqli_num_rows($results);
//NOM SOALAN
$number = (int) $_GET['n'];
// SOALAN
$query = "SELECT * FROM soalan WHERE nom_soalan = $number AND idtopik=$topik_pilihan
AND jenis=$jenis";
//JAWAPAN
$result = mysqli_query($hubung,$query);
$question = mysqli_fetch_assoc($result);
//PILIHAN
$query = "SELECT * FROM pilihan WHERE nom_soalan = $number
AND idsoalan='$question[idsoalan]'";
//DAPAT JAWAPAN
$choices = mysqli_query($hubung,$query);
?>

<!DOCTYPE html>
<html>
<body>
<center><h2>TOPIK: <?php echo $getTopik['topik'];?></h2>
</center>
<main>
<table width="70%" border="0" align="center">
<tr>
<td>
<?php
//RESPON JAWAPAN BETUL ATAU TIDAK
if($number == 1){
echo"Sila baca soalan dengan teliti";
}else{
$jawapan=$_GET['semakan'];
if($jawapan=="TEPAT"){
echo "*Tahniah, jawapan bagi soalan ";
echo $number-1;
echo " adalah <font color='blue'>TEPAT</font>";
}else{
echo "*Maaf, jawapan bagi soalan ";
echo $number-1;
echo " adalah <font color='red'>SALAH</font>";
}
}
?>
</td>
</tr>
<tr>
<td>
Soalan <?php echo $number; ?> dari <?php echo $total; ?>
<br><br>
<?php echo $question['soalan'] ?><br>
<?php
if ($question['gambarajah']==NULL){
}else{
echo "<img src='gambar/".$question['gambarajah']."' width='30%' height='30%'/>";
}
?>
</p>
<form method="post" action="soalan_semak.php">
<?php
if ($question['jenis']==1){
?>
<ul>
<?php
while($row=mysqli_fetch_assoc($choices)):
?>
<li><input name="choice" type="radio"
value="<?php echo $row['idpilihan']; ?>" required />
<?php echo $row['pilihan_jawapan'];?>
</li>
<?php
endwhile;
?>
</ul>
<?php
}else{
?>
<input type="text" name="idJAWAPAN"
placeholder="Taip Jawapan Di Sini" size='70%'>
<?php
}
?>
<input type="submit" value="HANTAR" />
<input type="hidden" name="number" value="<?php echo
$number; ?>" />
<input type="hidden" name="jenis_soalan" value="<?php echo $question['jenis']; ?>" />
<input type="hidden" name="idsoalan" value="<?php echo $question['idsoalan']; ?>" />
</form>
</td>
</tr>
</table>
<?php include 'footer.php';?>
</body>
</html>