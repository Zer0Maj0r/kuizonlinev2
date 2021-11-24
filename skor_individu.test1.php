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
						<center><p style="font-family: poppins; font-size: 60px;">REKOD MARKAH YANG DICAPAI</p></center>

<table width="80%" border="0.1" align="center" style="background-color: #DCD9CD; border: 25px solid #DCD9CD; border-radius: 25px; width: fixed; align: center;">
<tr>
<td width="2%"><b style="font-family: poppins; font-size: 15px;">Bil.</b></td>
<td width="45%"><b style="font-family: poppins; font-size: 15px;">Topik</b></td>
<td width="8%"><b style="font-family: poppins; font-size: 15px;">Jenis Soalan</b></td>
<td width="12%"><b style="font-family: poppins; font-size: 15px;">Tarikh/Masa</b></td>
<td width="4%"><b style="font-family: poppins; font-size: 15px;">Skor</b></td>
<td width="4%"><b style="font-family: poppins; font-size: 15px;">Markah</b></td>
</tr>
    <tr style="font-family: poppins; font-size: 15px;">
    <td>1</td>
    <td>SOALAN: MCQ & TRUE/FALSE</td>
    <td style="font-family: poppins; font-size: 15px;">MCQ/TF</td>
    <td style="font-family: poppins; font-size: 15px;" >15-10-21:03 PM</td>
    <td style="font-family: poppins; font-size: 15px;">1</td>
    <td style="font-family: poppins; font-size: 15px;">3%</td>
    </tr>
        <tr style="font-family: poppins; font-size: 15px;">
    <td>2</td>
    <td>SOALAN: MCQ & TRUE/FALSE</td>
    <td style="font-family: poppins; font-size: 15px;">MCQ/TF</td>
    <td style="font-family: poppins; font-size: 15px;" >15-10-21:03 PM</td>
    <td style="font-family: poppins; font-size: 15px;">1</td>
    <td style="font-family: poppins; font-size: 15px;">3%</td>
    </tr>
        </table>
	</center>
    </main>
    <center>
    <font style='font-size:14px'>
    * Rekod yang dipaparkan adalah 10 yang terkini *
    <br />Jumlah Rekod:2</font></center>
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