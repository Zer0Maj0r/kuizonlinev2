<?php
//WAJIB FAIL INI
require 'sambung.php';
//PERLUKAN FAIL INI
include 'header.php';
//POST VALUE
if (isset($_POST['idpengguna'])) {
//pembolehubah untuk memegang data yang dihantar
$idpengguna = $_POST['idpengguna'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$jantina = $_POST ['jantina'];
$daftar = "INSERT INTO pengguna (idpengguna, password, nama, jantina, aras)
VALUES ( '$idpengguna','$password','$nama','$jantina','PELAJAR')";
$hasil = mysqlli_query($hubung, $daftar);
if ($hasil) {
echo "<script>alert('Pendaftaran berjaya');
window.location ='login.php'</script>";
}else{
    echo "<script>alert('Pendaftaran gagal');
    window.location ='daftar_baru.php'</script>";
}
}

?>

<html>
<head>
<body>
<center></center>
<table width ="70%" border ="0" align="center">
<tr>
<td>
<!-- Papar Borang Pendaftaran -->
<form method="POST">
<label>Nombor Kad Pengenal</label><br>
<input onblur ="checkLength(this)" type="text" name="idpengguna"
placeholder="Tanpa tanda -" maxlength='12' size="25"
onkeypress ='return event.charCode >= 48 && event.charCode <= 57'
required autofocus />
<script>
function checkLength(el) {
if (el.value.length != 12) {
alert("Nombor KP mesti 12 digit")
}
}
</script>
<br>
<label>Katalaluan</label><br>
<input type="password" name="password" id="password"
placeholder="4 digit sahaja"
maxlength='4' onkeypress='return event.charCode >= 48 && event.charCode <= 57'required>
<br>
<label>Nama Pelajar</label><br>
<input type="text" size="50" name="nama" placeholder="Nama Penuh Anda" required>
<br>
<label>Jantina</label><br>
<select name="jantina">
<option value="">---Pilih---</option>    
<option value="LELAKI">LELAKI</option>    
<option value="PEREMPUAN">PEREMPUAN</option>    
</select>
<br>
<br><input type="reset" value="Reset">
<button type ="submit">Daftar</button><br><br>
</form>
</td>    
</tr>    
</table>
<?php include 'footer.php';?>
<font color='blue'>*Pastikan makluamt anda betul sebelum membuat pendaftaran.</font>
</body>    
</head>    
</html>