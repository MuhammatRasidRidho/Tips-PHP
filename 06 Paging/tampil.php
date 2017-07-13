<?php
mysql_connect("localhost","root","");
mysql_select_db("upb");
include "fungsi_paging.php";
echo "<h2>Daftar Kelas</h2>
<table border='1'>
<tr><th>No</th><th>Nama</th><th>JK</th><th>Alamat</th></tr>";
$p = new Paging;
$batas = 2;
$posisi = $p->cariPosisi($batas);
$tampil=mysql_query("SELECT * FROM mahasiswa LIMIT
$posisi, $batas");
$no=$posisi+1;
while ($r=mysql_fetch_array($tampil)){
echo "<tr><td>$no</td>
<td>$r[NPM]</td>
<td>$r[Alamat]</td>
<td>$r[Hp]</td>
</tr>";
$no++;
}
echo "</table>";
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM mahasiswa"));
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
echo "$linkHalaman";
?>