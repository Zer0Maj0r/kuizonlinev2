<?php
require 'sambung.php';
require 'keselamatan.php';
?>

<style>
.button {
  font-family: poppins;
  background-color: #5A5954;
  color: white;
  padding: 5px 13px;
  font-size: 16px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.5s;
  float: center;
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
<body onmousedown="return false" onselectstart="return false">
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
						<?php include 'menu.php'; ?>
						<center><p style="font-family: poppins; font-size: 60px;">SENARAI TOPIK</p></center>
<main>
	<center>
<table width="70%" border="0" align="center" style="background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px; width: fixed; align-content: center;">
<tr>
<td width="2%"><b style="font-family: poppins; font-size: 15px;">Bil.</b></td>
<td width="30%"><b style="font-family: poppins; font-size: 15px;">Topik</b></td>
<td width="10%"><b style="font-family: poppins; font-size: 15px;">Jenis</b></td>
<td width="10%"><b style="font-family: poppins; font-size: 15px;">Bilangan Soalan</b></td>
<td width="5%"><b style="font-family: poppins; font-size: 15px;">Tindakan</b></td>
                </tr>
                <?php
                $no=1;
                $data1=mysqli_query($hubung,"SELECT * FROM topik");
                while ($info1=mysqli_fetch_array($data1))
                {
                    $topik=mysqli_query($hubung,"SELECT * FROM topik WHERE
                    idtopik='$info1[idtopik]'");
                    $infoTopik=mysqli_fetch_array($topik);
                    ?>
                    <tr>
                        <td style="font-family: poppins; font-size: 15px; text-align: center;"><?php echo $no; ?></td>
                        <td style="font-family: poppins; font-size: 15px;"><?php echo $infoTopik['topik']; ?></td>
                        <td style="font-family: poppins; font-size: 15px;"><?php echo $info1['jenis']; ?></td>
                        <!-- <td style="font-family: poppins; font-size: 15px; text-align: center;"></td> -->
                    <td><?php echo $info1['idtopik'] ?></td>
                    <td>
                        <a class="button" style="text-decoration: none;" href="soalan_mula.php?idtopik=<?php echo $infoTopik['idtopik'];?>&jenis=<?php echo $info1['jenis'];?>">Buka</a>
</td>
</tr>
<?php $no++; } ?>
</table>
</center>
</main>
<center>
<font style='font-size:14px'>
* Senaraikan Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font>
</center>
</div>

				</div>
				<div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
					<p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?><p>
			</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>