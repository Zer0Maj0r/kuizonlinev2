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
html {
  scroll-behavior: smooth;
}

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
 <meta charset="UTF-8">
<link href="style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<title><?php echo $nama_sistem; ?></title>
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
	  <!-- PRINTABLE AREA TARGET -->
     <div class="print-area" id="printableArea">
     <center><br>
     <table width = "100%" border = "0">
       <tr>
         <td width = "20%"><img src="<?php echo "$lencana"; ?>" width="100" height="102" hspace = "7" align = "left"></td>
         <td width = "80%" valign = "left"><font class="font" style = "font-size:15px;"><?php echo "$nama_sekolah"; ?></h5></td>
       </tr>
     </table>
     <br>
     <table width = "100%" border = "0">
       <tr><td class="hidden">hidden</td></tr>
       <tr class="font" style = "font-size:16px;">
         <td align="center" width="10%">Bil.</td>
         <td width="40%">Nama Pelajar</td>
         <td align="center" width="15%">Jenis Soalan</td>
         <td align="center" width="15%">Skor Tertinggi</td>
         <td align="center" width="9%">Bil. Ujian</td>
       </tr>
       <br>
       <tr>
         <hr>
       </tr>
       <?php
       $no=1;

       //Arahan SQL
       $rekod=mysqli_query($hubung,"SELECT idpengguna,idtopik,MAX(skor),jenis,COUNT(idpengguna) as 'Bil'FROM perekodan
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
            <td align="center"><?php if ($infoRekod['jenis']==1){
            echo "MCQ / TF";
            }else{
            echo "FIB";
            }?></td>
            <td align="center"><?php echo $infoRekod['MAX(skor)'];
            ?></td>
            <td align="center"><?php echo $infoRekod['Bil']; ?>
            </td>
            </tr>
            <?php $no++;
            } ?>
     </table>
   </center>

   <br>
   <br>
     <center> <small class="font" style="font-size: 13px;"> *LAPORAN TAMAT * <br> Jumlah Rekod: <?php echo $no-1; ?></small><br><br>
       </div>
	    <!-- BUTTON FUNCTION: Tekan untuk print atau kembali -->
       <a href="index2.php"><button class="button" >Home</button></a>
	    <!-- PRINT DIV <DISPLAY TARGET ONLY> -->
     <a onclick="printDiv('printableArea')"><button class="button">Cetak Laporan</button></a>
     </center>
 </div>
   </body>
<footer>
 <!-- Position: absolute so bila nilai rekod bertambah kita punya footer aku ikut jugak tak ada lah bug -->
  <div style='position: absolute; bottom: -140px; left: 0px; width: 100%; height: 250px; background: #262626;'>
    <p style="padding: 10px; margin: 20px;"><?php include 'footer.php'; ?></p>
  </div>
</footer>

 <!-- JAVASCRIPT // YANG NI CUMA DISPLAY PRINTABLE AREA SAHAJA DAN TERUS PAPARKAN PRINT P/S Hanya print tempat sepatutnya -->
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