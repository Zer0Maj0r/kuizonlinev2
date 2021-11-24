<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';

if (isset($_POST['submit'])){
$picAsal = $_POST['gambarAsal'];
if ($_FILES['gambar']['nama']==NULL){
$newnamepic=$picAsal;
}else{
$gambar=$_FILES['gambar']['nama'];
//READ INDEX FILE NAME THEN INDEX FILE TYPE
$imageArr=explode('.',$gambar);
$random=rand(10000,99999);
$newnamepic=$imageArr[0].$random.'.'.$imageArr[1];
$uploadPath="gambar/".$newnamepic;
$isUploaded=move_uploaded_file($_FILES["gambar"]["nama_sem"],$uploadPath);
}
//dapatkan nilai variable yang di POST
$idsoalan = $_POST['idsoalan'];
$soalan = $_POST['paparan_soalan'];


//kemaskini dengan rekod baru
//
$result = mysqli_query($hubung,
"UPDATE soalan SET nom_soalan=nom_soalan,soalan='$soalan',gambarajah='$newnamepic',idtopik=idtopik
WHERE idsoalan ='$idsoalan'");


echo "<script>alert('Soalan berjaya dikemaskini');
window.location='papar_topik.php'</script>";



}
?>