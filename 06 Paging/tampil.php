<?php
error_reporting(0);

$con = mysqli_connect("localhost","root","","upb");


include "fungsi_paging.php";
echo "<h2>Daftar Kelas</h2>
<table border='1'>
<tr><th>No</th><th>Nama</th><th>JK</th><th>Alamat</th></tr>";
$p = new Paging;
$batas = 2;
$posisi = $p->cariPosisi($batas);
$tampil=mysqli_query($con, "SELECT * FROM mahasiswa LIMIT
$posisi, $batas");
$no=$posisi+1;
while ($r=mysqli_fetch_array($tampil)){
echo "<tr><td>$no</td>
<td>$r[NPM]</td>
<td>$r[Alamat]</td>
<td>$r[Hp]</td>
</tr>";
$no++;
}
echo "</table>";
$jmldata = mysqli_num_rows(mysqli_query("SELECT * FROM mahasiswa"));
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
echo "$linkHalaman";
?>