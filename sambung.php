<?php
//SETUP PANGKALAN DATA
//TIDAK PERLU UBAH
$host="localhost";
$user="root";
//BIARKAN KOSONG JIKA GUNA XAMPP
$password="";
//NAMA P.DATA-BOLEH UBAH
$database="kuiz_style3";
//////////////////////
$hubung=mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
echo "Proses sambung ke pangkalan data gagal";
exit();
}
//////////////////////
//PENETAPAN SISTEM ANDA
$lencana="lencana.png";
$subjek="SEJARAH TINGKATAN 4";
$nama_sekolah="SMK CHERAS <BR>
JALAN TENTERAM, CHERAS, <BR>
56000 KUALA LUMPUR, <BR>
WILAYAH PERSEKUTUAN KUALA LUMPUR.";
$nama_sistem="SISTEM PENILAIAN KENDIRI";
$motto_sistem="SOALAN: MCQ/TRUE|FALSE/FILL IN THE BLANK";
$footer="Self Monitoring Learning System ";
$logo="logo.png";
?>