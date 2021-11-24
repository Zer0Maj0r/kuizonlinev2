<?php
require 'sambung.php';
require 'keselamatan.php';
include 'header.php';
?>

<?phpif(isset($_POST['update'])){
$idtopik = $_POST['idtopik'];
$topikBaru = $_POST['paparan_topik'];
$markahBaru = $_POST['markah'];
//KEMASKINI DENGAN REKOD BARU
$result = mysqli_query($hubung,"UPDATE topik SET topik='$topikBaru',markah='$markahBaru'
WHERE idtopik='$idtopik'");
//MESEJ POP UP
echo "<script>alert('Kemaskini rekod telah berjaya;);
window.location='papar_topik.php'</script>";
}
?>

<?php
//DAPATKAN DATA LAMA
$topikEdit = $_GET ['idtopik'];
$pilihTopik = mysqli_query($hubung, "SELECT * FROM topik WHERE idtopik = $topikEdit");
while($dataTopik = mysqli_fetch_array($pilihTopik))
{
$idTOPIK = $topikEdit;
$editTOPIK = $dataTopik['topik'];
$editMARKAH = $dataTopik['markah'];
}
?>
<html>
<head><?php include 'menu.php';?></head>
<body>
<center><h2>KEMASKINI TOPIK</h2></center>
<main>
<table width="70%" border="0" align="center"
style='font-size:18px'>
<tr>
<td>
<form method="post" action="edit_topik.php">
<p>
<label>Topik :</label>
<input type="text" name="markah" size="5%"
value="<?php echo $editMARKAH; ?>" />
</p>
<p>
<input type="button" value="BATAL" onclick="history.back()"/>
</p>
</form>
</td>
</tr>
</table>
</main>
<?php include 'footer.php';?>
</body>
</html>