<?php
require 'sambung.php';
require 'keselamatan.php';
?>

<style>
.button {
  background-color: #8D8B83; /* Green */
  border: none;
  color: white;
  padding: 5px 13px;
	border-radius: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
}

.button:hover {
  background-color: #B0AEA4;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "pelengkap.php"; ?>
  <script>
  setTimeout(function()
  {
   window.location.href = "index.php";
  },5000);
  </script>
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

						<center><p style='font-size: 42px; font-family: poppins;'>Page not Available</p>
              <p style='font-size: 22px; font-family: poppins; padding: 1px 30px'>Return to home page? <a href="index.php" style="text-style: none;">Click me</a></p></center>
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