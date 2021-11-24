<?php
//WAJIB FAIL INI
require 'sambung.php';
require 'keselamatan.php';
if(isset($_POST['submit'])){
//PROSES FAIL GAMBAR
if ($_FILES['gambar']['name']==NULL){
$newnamepic="";
}else{
$gambar=$_FILES['gambar']['name'];
$imageArr=explode('.',$gambar);
$random=rand(10000,99999);
$newnamepic=$imageArr[0].$random.'.'.$imageArr[1];
$uploadPath="gambar/".$newnamepic;
$isUploaded=move_uploaded_file($_FILES["gambar"]["tmp_name"],$uploadPath);
}
//VARIABLE YANG DI POST
$nom_soalan = $_POST['nom_soalan'];
$idtopik = $_POST['idtopik'];
$soalan = $_POST['paparan_soalan'];
//TAMBAH REKOD SOALAN
$query="INSERT INTO soalan (nom_soalan,soalan,gambarajah,idtopik)
values('$nom_soalan','$soalan','$newnamepic','$idtopik')";
$insert_row=mysqli_query($hubung,$query);
$last_id = mysqli_insert_id($hubung);
//MESEJ POP UP
echo "<script>alert('Soalan baru telah berjaya ditambah');
window.location='soalan_baru2.php?idtopik=$idtopik'</script>";
//VARIABLE
$jawaban=$_POST['idJAWAPAN1'];
$topikal=$_POST['idTOPIK'];

for($i=0;$i<count($jawaban);$i++){
if($jawaban[$i]!="" && $topikal[$i]!=""){
$jawapan2=$jawaban[$i];
$idtopikal=$topikal[$i];

// TAMBAH REKOD KE DALAM JADUAL PILIHAN
$query="INSERT INTO pilihan (nom_soalan,pilihan_jawapan,idsoalan)
values('$nom_soalan','$jawapan2','$last_id')";
$insert_row=mysqli_query($hubung,$query);
}
}
}
?>