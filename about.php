<?php require 'sambung.php'; ?>
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
					<?php include 'menu1.php'; ?>
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
					<div style="position: absolute; left: 0px; width: 100%; height: 1300px; border: 0px;"><br><br>
						<center>
							<table width='70%' border="0" align="center">
								<tr>
									<td width="10%">
										<img style="width: 250px; height: 250px;" src="<?php echo $lencana; ?>">
									</td>
									<td width="60%">
										<p style='text-align: left; font-size: 25px; font-family: verdana; color: black;'>
								SOALAN BERKAITAN SEJARAH TINGKATAN 4 </p>
										</center>
									</p>
										<p>
											<center>
											<a style='text-decoration: none; font-size: 50px; font-family: poppins; color: black;' href="#">SEKOLAH:</a>
											<p style='font-size: 25px; font-family: poppins; color: black; background-color: #DCD9CD;'>
												<?php echo $nama_sekolah; ?></p>
											</center>
										</p>
									</td>
								</tr>
							</table>
						</center><br><br><br><br>
						<div style="width: 100%; height: 500px; background-color: #DCD9CD; border: 3px ;">
							<center>
								<table width='70%' border="0" align="center" style="padding: 50px; margin: 20px;">
									<tr>
										<td width="60%">
											<p>
												<center>
												<a style='text-decoration: none; font-size: 50px; font-family: poppins; color: black;' href="#">OBJEKTIF:</a><br>

												<p style='text-align: left; font-size: 25px; font-family: poppins; color: black;'>
											1. Merekod dan memaparkan maklumat pelajar secara atas talian.<br>
										  2. Mengira jumlah markah pelajar dalam bentuk peratus dengan cepat.<br>
									    3. Memaparkan Prestasi Pelajar selepas menjawab soalan dengan lebih mudah.</p>
												</center>
											</p>
										<td width="10%">
											<img style="width: 250px; height: 250px;" src="https://image.flaticon.com/icons/png/512/3655/3655586.png">
										</td>
									</tr>
								</table>
							</center>
						</div>
						<div><br><br><br><br>
							<center>
								<table width='70%' border="0" align="center">
									<tr>
										<td width="10%">
											<img style="width: 250px; height: 250px;" src="https://icon-library.com/images/scope-of-work-icon/scope-of-work-icon-19.jpg">
										</td>
										<td width="60%">
											<p>
												<center>
												<a style='text-decoration: none; font-size: 50px; font-family: poppins; color: black;' href="#">SKOP</a>
												<p style='font-size: 25px; font-family: poppins; color: black; background-color: #DCD9CD; text-align: left;'>
													1. Sistem ini hanya boleh diubah oleh guru.<br>
												  2. Sistem ini hanya memaparkan prestasi pelajar dalam bentuk peratus sahaja.<br>
												  3. Seorang Guru Penilaian satu subjek yang mempunyai banyak topik didalam<br>
												     pelbagai bentuk soalan.</p>
												</center>
											</p>
										</td>
									</tr>
								</table>
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