<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
?>
<?php
//DAPATKAN ID SOALAN
$soalan_terpilih = $_GET['idsoalan'];
//PILIH DATA BERDASARKAN ID REKOD
$pilihSoalan = mysqli_query($hubung, "SELECT *FROM soalan
WHERE idsoalan=$soalan_terpilih");
while($dataSoalan = mysqli_fetch_array($pilihSoalan))
{
//Paparkan nilai asal
$nom_soalan = $dataSoalan['nom_soalan'];
$soalan= $dataSoalan['soalan'];
$gambarajah = $dataSoalan['gambarajah'];
}
?>
<html>
<head><?php include 'menu.php'; ?></head>
<body><center><h2>KEMASKINI SOALAN</h2></center>
<main>
<table width="70%" border="0" align="center">
<tr>
<td>
<p>
<label>Soalan ke-<?php echo $nom_soalan; ?></label>
<input type="text" name="idsoalan" value="<?php echo $soalan_terpilih; ?>"
readonly hidden>
</p>
<fieldset><legend>Soalan</legend>
<p>
<?php echo $soalan; ?>
</p>
<p>
<label>Gambar<br>
<?php
if($gambarrajah==NULL){
echo "-TIADA-";
}else{
echo "<img src='gambar/".$gambarrajah."' width='30%' height='30%'/>";
}
?>
</p>
<a href="edit_soalan1.php?idsoalan=<?php echo $soalan_terpilih;?>">
<button>EDIT</button></a>
<input type="button" value="BATAL" onclick="history.back()"/>
</td>
</tr>
</fieldset>

<tr><td>
<fieldset><legend>Jawapan</legend>

<?php
$terpilih = $_GET['idsoalan'];
$no-1;
$pilihan = mysqli_query($hubung,
"SELECT * FROM pilihan AS a
INNER JOIN soalan AS q
ON q.idsoalan = a.idsoalan
WHERE q.idsoalan=$terpilih")
while($dataPilihan = mysqli_fetch_array($pilihan))
{
//TENTUKAN JENIS SOALAN
if($dataPilihan['jenis']==1){
?>
<p>
Pilihan <?php echo $no;?> :
<?php echo $dataPilihan['pilihan_jawapan'];?>
</p>

<?php
if($dataPilihan['jawapan']==1){
echo "*Jawapan";
}
$no++;

}else{
?>
<p>
Cadangan Jawapan <?php echo $no;?> :
<?php echo $dataPilihan['pilihan_jawapan'];?>
</p>
<?php
$no++; }

}
?>

</td></tr>
</table>    
</html>