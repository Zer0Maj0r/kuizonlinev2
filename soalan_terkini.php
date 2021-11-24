<?php require 'sambung.php'; ?>
<table width="100%" border="0" align="center">
<tr style='font-size:14px'>
<td width="3%"><b>Bil.</b></td>
<td width="70%"><b>Topik</b></td>
<td width="27%"><b>Jenis Soalan</b></td>
</tr>
<?php
$no=1;
$data1=mysqli_query($hubung,"SELECT * FROM soalan AS q
INNER JOIN topik AS t ON t.idtopik=q.idtopik
GROUP BY jenis ORDER BY t.idtopik desc limit 0,10");
while ($info1=mysqli_fetch_array($data1))
{
?>
<tr style='font-size:14px'>
<td><?php echo $no; ?></td>
<td><?php echo $info1['topik']; ?></td>
<td><?php
if ($info1['jenis']==1){
echo "MCQ/TF";
}else{
echo "FIB";
}?>
</td>
</tr>
<?php $no++; } ?>
</table><br>
<center><font style='font-size:14px'>
* Rekod yang dipaparkan adalah 10 yang terkini sahaja *<br />Jumlah Rekod:<?php echo $no-1; ?>
</font></center>