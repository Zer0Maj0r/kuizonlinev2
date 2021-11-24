<?php
require 'sambung.php';
require 'keselamatan.php';
?>

<style>


.button {
  font-family: poppins;
  background-color: #5A5954;
  color: white;
  padding: 1px 13px;
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
						<?php include 'menu.php'; ?>
            <main>
              <center>
                <table class='outter-table' width="70%" border="0" align="center">
                  <tr><td><center><p class='title'>SENARAI TOPIK</p></center></tr></td>
                  <tr>
                    <td colspan="4" valign="middle" align="right"><b>
                      <a href="tambah_topik.php"><button class="button" style="float: right; padding: 5px 20px;">TAMBAH TOPIK</button></a></b></td>
                    </tr>
                    <tr><td class="hidden">Hidden</td></tr>
                    <tr><td>
                      <table class="inner-table" width="100%">
                        <tr class='font'>
                          <td width="5%"><b>Bil.</b></td>
                          <td width="15%"><b>Topik</b></td>
                          <td width="10%" align="center"><b>Urus Topik</b></td>
                          <td width="10%" align="center"><b>Urus Soalan</b></td>
                        </tr>
                        <?php
                        $no=1;
                        $data1=mysqli_query($hubung,"SELECT * FROM topik");
                        while ($info1=mysqli_fetch_array($data1))
                        {
                          ?>
                          <tr class='font'>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $info1['topik']; ?></td>
                            <td>
                              <center>
                                <a href="edit_topik.php?idtopik=<?php echo $info1['idtopik']; ?>"><button class="button">EDIT</button></a>
                                <a href="hapus_topik.php?idtopik=<?php echo $info1['idtopik']; ?>" onclick="return confirm('AWAS!, Semua anda pasti?')">
                                  <button class="button">HAPUS</button>
                                </a>
                              </center>
                            </td>
                            <td><center>
                              <a href="papar_soalan.php?idtopik=<?php echo $info1['idtopik'];?>"><button class="button">PAPAR</button></a>
                              <a href="soalan_baru1.php?idtopik=<?php echo $info1['idtopik'];?>"><button class="button">MCQ/TF</button></a>
                            </center></td>
                          </tr>
                          <?php $no++;
                        }
                        ?>
                      </table>
                    </td></tr>
                    <tr><td>
                      <center>
                        <font style='font-size: 14px; font-family: poppins;'>* Senaraikan Tamat *<br />Jumlah Rekod:<?php echo $no-1; ?></font>
                      </center>
                    </td></tr>
                  </table>
                </center>
              </main>
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