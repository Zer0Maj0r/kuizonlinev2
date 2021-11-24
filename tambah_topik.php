<?php
require 'sambung.php';
require 'keselamatan.php';
//sambung ke fail header
include 'header.php';
?>
<?php
if (isset($_POST['submit'])){
//dapatkan nilai variable yang di POST
$nom_soalan = $_POST['nom_soalan'];
$topik = $_POST['paparan_topik'];
$jenis_soalan = $_POST['jenis'];
$markah = $_POST['markah'];

//query topik
$query="INSERT INTO topik (idtopik,topik,markah)
values(NULL,'$topik','$markah')";
$insert_row=$hubung->query($query);
$last_id = mysqli_insert_id($hubung);
if($jenis_soalan=="mcq"){
echo "<script>alert('Topik baru telah ditambah');
window.location='soalan_baru1.php?idtopik=$last_id'
</script>";
}else{
echo "<script>alert('Topik baru telah ditambah');
window.location='soalan_baru2.php?idtopik=$last_id'
</script>";
}
}
//JUMLAH TOPIK
$query = "SELECT * FROM topik";
$topik = mysqli_query($hubung,$query);
$total=mysqli_num_rows($topik);
$next=$total+1;
?>

<html>
<head><?php include 'menu.php'; ?></head>
<body><center><h2>TAMBAH TOPIK</h2></center>
<main>
<table width="70%" border="0" align="center">
<tr>
<td>
<form method="post" action="tambah_topik.php">
<p><label>Topik ke-</label>
<?php echo $next; ?>
<input type="text" value="<?php echo $next; ?>" name="nom_soalan" hidden /></p>
<p><label>Topik :</label><br>
<input type="text" name="paparan_topik" size="60" placeholder="TAIP DI SINI" required /></p>
<p><label>Jenis Soalan :</label><br>
<select name="jenis" required>
<option hidden selected>PILIH</option>
<option value='mcq'>Pelbagai Jawapan / Benar-Palsu
</option>
<option value='fib'>Isi Tempat Kosong</option>
</select></p>
<p><label>Markah :</label><br><input type="text" name="markah" placeholder="1-100" maxlength='3'size="7"
onkeypress='return event.charCode >= 48 && event.charCode <= 57' required /></p>
<p><input type="submit" name="submit" value="TAMBAH" />
</p></form>
</td>
</tr>
</table>
</main>
<?php include 'footer.php';?>
</body>