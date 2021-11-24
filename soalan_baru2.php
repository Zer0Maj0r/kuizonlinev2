<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';
//ID DARI URL
$idTopik = $_GET['idtopik'];
//DAPATKAN JUMLAH SOALAN
$query = "SELECT * FROM soalan WHERE idtopik='$idTopik' AND jenis='2'";
$soalan = mysqli_query($hubung,$query);
$total=mysqli_num_rows($soalan);
$next=$total+1;
?>

<style>
.button {
  font-family: poppins;
  width: 80%;
  background-color: #5A5954;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.5s;
  float: center;
}

input[type=text ], select {
  font-family: poppins;
  width: 80%;
  padding: 7px 13px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 25px;
  box-sizing: border-box;
}

input[type=submit] {
  font-family: poppins;
  width: 80%;
  background-color: #5A5954;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.5s;
  float: center;
}

input[type=submit]:hover {
  background-color: #252522;
}

.button:hover {
  background-color: #252522;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "pelengkap.php"; ?>
</head>
<body>
	<div class="box-area">
		<header>
			<div class="wrapper">
				<div class="logo">
					<a href="#"><?php echo $subjek; ?></a>
				</div>
				<nav>
					<a href="logout.php">LOGOUT</a>
				</nav>
			</div>
		</header>
		<div class="banner-area">
			<h2><?php echo $nama_sistem; ?></h2>
		</div>
		<div class="content-area">
			<div class="wrapper">
				<h4><?php echo $motto_sistem; ?></h4>
				<div><br><br>
					<div style="position: absolute; left: 0px; align-content: center; width: 100%; height: 1300px; border: 0px;">
						<center><p style='font-size: 42px; font-family: poppins;'>Tambah Soalan Baru</p></center>
            <main>
              <center>
<table width="70%" border="0" align="center" style='width: 70%; background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px;'>
<tr>
<td>
<table width="100%" style="border: 25px solid #F1F0EA; border-radius: 25px; background-color: #F1F0EA;">
<tr>
<td>
<form method="post" enctype="multipart/form-data" action="soalan_baru2_proses.php">
  <input style="visibility: hidden; position: absolute;" size='2%' type="text" value="<?php echo $next; ?>" name="nom_soalan" readonly />
  <input style="visibility: hidden; position: absolute;" type="text" value="<?php echo $idTopik; ?>" name="idtopik" hidden />
<label style="font-size: 25px; font-family: poppins; ">Bilangan Soalan: <?php echo $next; ?></label>

<p><label>Soalan :<br></label><textarea style="max-width: 80%; max-height: 250px;" id="paparan_soalan" name="paparan_soalan" rows="7" cols="105" required>
</textarea><br>

<label>Gambar :<br></label><input type="file" name="gambar"/><br><small style="color:red;">*Jika perlu </small>
</p>
</td>
</tr>
</table>
</td>
</tr>
<tr width="100%">
<td width="100%">
<p>
  <table style="border: 25px solid #F1F0EA; border-radius: 25px; background-color: #F1F0EA;" id="jawapan" align=left width='70%' border="0">
  <tr >
  <td>
    <label style="font-family: poppins;">Cadangan Jawapan:</label><BR>
    <small style="font-family: poppins;">*Klik butang  <b>TAMBAH JAWAPAN</b> untuk tambah jawapan</small></span><br>
  </td>
  </tr>
  <tr id="row1">
  <td><input style="width: 100%" type="text" name="idJAWAPAN1[]" placeholder="Taip Cadangan Jawapan" size='100%'></td>
  <td><input style="visibility: hidden; position: absolute;" type="text" name="idTOPIK[]" value="<?php echo $idTopik; ?>" hidden></td>
  </tr>
</table>
</p>
<tr style="visibility: hidden;"><td>
  Hidden
</tr>/<td>
</td>
</tr>
<tr width="100%">
<td>
<center>
<table width="60%" border="0">
<tr>
<CENTER>
<td width="33%"><input style="width: 100%;" class="button" type="button" onclick="add_row();" value="TAMBAH JAWAPAN"></td>
<td width="33%"><input style="width: 100%;" class="button" type="submit" name="submit"value="SIMPAN SOALAN"></td>
<td width="33%"><button style="width: 100%;" class="button" onclick="window.location.href='papar_topik.php'">KEMBALI</button></td>
</CENTER>
</tr>
</table>
</center>
</form>
</td>
</tr>
</table>
</center>
</main>
          </div>
				</div>
				<div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
					<p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?><p>
			</div>
			</div>
			</div>
		</div>
	</div>
<!-- SAMBUNG KE JQUERY EXTERNAL -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function add_row()
{
$rowno=$("#jawapan tr").length;
$rowno=$rowno+1;
$("#jawapan tr:last").after("<tr id='row"+$rowno+"'><td><input style='width: 100%;' type='text' name='idJAWAPAN1[]' placeholder='Taip Cadangan Jawapan' size='70%'></td><td><input style='visibility: hidden; position: absolute;' type='text' name='idTOPIK[]' value='<?php echo $idTopik; ?>' size='60%' hidden></td><td><input style='width: 100%; padding: 7px 12px;' class='button' type='button' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno)
{
$('#'+rowno).remove();
}
</script>
</body>
</html>