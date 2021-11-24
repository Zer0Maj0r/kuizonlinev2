<?php
require 'sambung.php';
require 'keselamatan.php';
require 'css.php';
$topik_pilihan = $_GET['idtopik'];
$jenis = $_GET['jenis'];
//SESI
$_SESSION['pilih_topik'] = $topik_pilihan;
$_SESSION['jenis_soalan'] = $jenis;
//TABLE TOPIK
$dataTopik=mysqli_query($hubung,"SELECT * FROM topik WHERE idtopik=$topik_pilihan");
$getTopik=mysqli_fetch_array($dataTopik);
//TABLE soalan
$dataSoalan=mysqli_query($hubung,"SELECT * FROM soalan WHERE idtopik=$getTopik[idtopik]");
$getSoalan=mysqli_fetch_array($dataSoalan);
$total=mysqli_num_rows($dataSoalan);
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <style>

 .button {
   font-family: 'Action Man', sans-serif;
   background-color: #5A5954;
   color: white;
   padding: 7px 45px;
   font-size: 30px;
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
  margin: 0;
  height: -220px;
  left: 10px;
  width: 100%;
  border: 0px;
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
       <center class="font1"><table class="outter-table" width="60%">
         <tr><td>
         <table class="inner-table">
           <tr><td><font class="title1" style="font-size: 62px;">TOPIK: (<?php echo $getTopik['topik'];?>)</font></td></tr>
         </table>
         </td></tr>
         <tr><td class="hidden">hidden</td></tr>
         <tr><td style="font-size: 40px;"><font class="hidden">- - - -</font>Arahan kepada pelajar:</td></tr>
         <tr><td>
           <table class="inner-table">
         <tr><td style="font-size: 40px;">Jawapan semua soalan. Pilih jawapan yang terbaik.</td></tr>
         <tr><td>
           <table style="font-size: 30px;">
             <tr>
               <td width="10%" class="hidden">hidden</td>
               <td>
             <ul>
             <li>Jumlah soalan: <strong><?php echo $total; ?>
             </strong></li>
             <li>Jenis Soalan: <strong><?php
             if($getSoalan['jenis']==1){
             echo "Berbilang Jawapan dan Benar/Palsu";
             }else{
             echo "Isikan Tempat Kosong";
             }
             ?></strong></li>
             <li>Peruntukan Masa: <strong><?php echo $total*0.5; ?> minit</strong></li>
             </ul>
             </td></tr>
           </table>
         </td></tr>
       </table>
       </td></tr>
       <tr class="hidden"><td>hidden</td></tr>
       <tr><td align="center">
         <a href="soalan_papar.php?n=1&idtopik=<?php echo $topik_pilihan;?>&total=<?php echo $total;?>">
           <button class="button">MULAKAN</button></a>
         <a href="pilihan_topik.php">
           <button class="button">BATALKAN</button></a>
       </td></tr>

       </center></table>
 </div>
 <div style="width: 100%; height: 150px;"></div>
</body>
<footer>

  <div style='position: absolute; bottom: fixed; left: 0px; width: 100%; height: 150px; background: #262626;'>
    <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?></p>
  </div>
</footer>

 </html>