<?php
require 'sambung.php';
require 'keselamatan.php';
?>

<?php
//DAPATKAN ID SAOALN
$soalan_terpilih = $_GET['idsoalan'];
//PILIH DATA BERDASARKAN PADA ID REKOD
$pilihSoalan = mysqli_query($hubung, "SELECT * FROM soalan
WHERE idsoalan=$soalan_terpilih");
while($dataSoalan = mysqli_fetch_array($pilihSoalan))
{
//Paparkan nilai asal
$nom_soalan = $dataSoalan['nom_soalan'];
$soalan= $dataSoalan['soalan'];
$gambarajah = $dataSoalan['gambarajah'];
}
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
						<center><p style='font-size: 42px; font-family: poppins;'>Kemaskini Soalan</p></center>
            <main>
              <center style='font-family: poppins;'>
                <table width="70%" border="0" align="center"  style="border: 25px solid #DCD9CD; border-radius: 25px; width: fixed; align: center; background-color: #DCD9CD;">
                <tr>
                <td>
                <form action="edit_soalan1_save.php" method="POST" enctype="multipart/form-data">
                <p>
                <label>Soalan ke-<?php echo $nom_soalan; ?></label><br><br>
                <input style="position: absolute; visibility: hidden;" type="text" name="idsoalan" value="<?php echo $soalan_terpilih; ?>"
                readonly hidden>
                <input style="position: absolute; visibility: hidden;" type="text" value="<?php echo $topik_pilihan; ?>" name="idtopik" hidden/>
                <label>Soalan:</label><br>
                <textarea style="max-width: 80%; max-height: 250px;" id="paparan_soalan" name="paparan_soalan" rows="7" cols="105"
                autofocus ><?php echo $soalan; ?></textarea>
                </p>
                <p>
                <label>Gambar<br>
                <?php
                if ($gambarajah==NULL){
                echo "-TIADA-";
                }else{
                echo "<img src='gambar/".$gambarajah."' width='30%' height='30%'/>";
                }
                ?>
                <input type="text" name="gambarAsal" value="<?php echo $gambarajah; ?>"
                readonly hidden>
                <br><br>
                <input type="file" name="gambar"/><br>
                <small style="color:red">*Jika perlu</small>
                </label>
                </p>
                <p>
                <input class="button" type="submit" name="submit" value="KEMASKINI"/>
                <input class="button" type="button" value="BATAL" onclick="history.back()"/>
                </p>
                </form></td></tr>
                </table>
                  </center>
                </main>
                <center>
                  <font style='font-size: 14px; font-family: poppins;'>* Kemaskini Soalan *<br />ID Soalan :<?php echo $soalan_terpilih; ?></font>
                </center>
              </div>
            </div>
            <div style='position: absolute; bottom: -250px; left: 0px; width: 100%; height: 250px; background: #262626;'>
              <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?><p>
              </div>
            </div>
          </div>
        </div>
      </body>
</html>