<?php
require 'sambung.php';
require 'keselamatan.php';
$topik_pilihan = $_GET['idtopik'];
$topik=mysqli_query($hubung,"SELECT * FROM topik WHERE idtopik='$topik_pilihan'");
$infoTopik=mysqli_fetch_array($topik);
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
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

 .print-area {
  margin: auto;
  height: -220px;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  border: 0px;
 }
 * {
 	margin: 0;
 	padding: 0;
 }

 body {
 	text-align: center;
 }
 .wrapper {
 	width: 1170px;
 	margin: 0 auto;
 }
 header {
 	height: 100px;
 	background: #262626;
 	width: 100%;
 	z-index: 10;
 	position: fixed;
 }
 .logo {
 	width: 30%;
 	float: left;
 	line-height: 100px;
 }
 .logo a {
 	text-decoration: none;
 	font-size: 30px;
 	font-family: poppins;
 	color: #fff;
 	letter-spacing: 5px;
 }
 nav {
 	float: right;
 	line-height: 100px;
 }
 nav a {
 	text-decoration: none;
 	font-family: poppins;
 	letter-spacing: 4px;
 	font-size: 20px;
 	margin: 0 10px;
 	color: #fff;
 }

 </style>
 <head>
 	<?php include "pelengkap.php"; ?>
 <!-- HEADER: LOCK FROM USER COPY TEXT -->
 <body onmousedown="return false" onselectstart="return false">
   <div class="box-area">
     <header>
       <div class="wrapper">
         <div class="logo">
           <a href="#"><?php echo $subjek; ?></a>
 				</div>
 				<nav>
           <!-- NAVIGATION: lOGOUT -->
 					<a href="logout.php">LOGOUT</a>
 				</nav>
 			</div>
 		</header>
   <body style="background-color: #ebebeb">
     <div style="width: 100%; height: 150px;"></div>
     <div class="print-area" id="printableArea">
     <center><br>
       <table width="100%" border="0">
         <tr><td>
     <table width = "100%" border = "0">
       <tr>
         <td width = "20%"><img src="<?php echo "$lencana"; ?>" width="100" height="102" hspace = "7" align = "left"></td>
         <td width = "80%" valign = "left"><font class="font" style = "font-size:15px;"><?php echo "$nama_sekolah"; ?></h5></td>
       </tr>
     </table>
     <br>
     <tr>
       <td class="font" align="center">LAPORAN PRESTASI PELAJAR BAGI TOPIK:
       <?php echo $infoTopik['topik']; ?>
   <table width = "100%" border = "0">
 <tr><td class="hidden">hidden</td><tr>
 <tr class="font" style = "font-size:16px;">
         <td align="center" width="10%">Bil.</td>
         <td align="center" width="30%">Nama Pelajar</td>
         <td align="center" width="20%">Skor Tertinggi</td>
         <td align="center" width="10%">Bil. Ujian</td>
       </tr><br>
       <tr>
         <hr>
       </tr>
       <?php
       $no=1;

       //Arahan SQL
       $rekod=mysqli_query($hubung,"SELECT idpengguna,idtopik,MAX(skor),COUNT(idpengguna) as 'Bil'FROM perekodan
       WHERE idtopik='$topik_pilihan' GROUP BY idpengguna HAVING MAX(skor)>=1");
       while ($infoRekod=mysqli_fetch_array($rekod))

       {
       //Sambung ke table pengguna untuk dapatan nama
       $pelajar=mysqli_query($hubung,"SELECT * FROM pengguna WHERE idpengguna='$infoRekod[idpengguna]'");
       $infoPelajar=mysqli_fetch_array($pelajar);
       ?>
          <tr class="font" style = "font-size:16px">
            <td align="center"><?php echo $no; ?></td>
            <td><?php echo $infoPelajar['nama'];?></td>
            <td align="center"><?php echo $infoRekod['MAX(skor)'];
            ?></td>
            <td align="center"><?php echo $infoRekod['Bil']; ?>
            </td>
            </tr>
            <?php $no++;
            } ?>
     </table>
   </td></tr>
 </table>
   </center><br><br>
   <center> <small class="font" style="font-size: 13px;"> *LAPORAN TAMAT * <br> Jumlah Rekod: <?php echo $no-1; ?></small><br><br>
   </div>
   <a href="index2.php"><button class="button">Home</button></a>
   <a href="senarai_pelajar.php"><button class="button">Senarai Pelajar</button></a>
   <a onclick="printDiv('printableArea')"><button class="button">Cetak Laporan</button></a>
   </center>
 </div>
</body>
<footer>
  <div style="width: 100%; height: 250px;">
  </div>
  <div style='position: absolute; bottom: fixed; left: 0px; width: 100%; height: 250px; background: #262626;'>
    <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?></p>
  </div>
</footer>

<script>
function printDiv(divName) {
  var printContents = document.getElementById(divName).innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}
</script>

 </html>