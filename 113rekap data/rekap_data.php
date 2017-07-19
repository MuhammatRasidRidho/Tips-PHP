<?php
mysql_connect("localhost","root","");
mysql_select_db("upb");
$ambil = mysql_query("SELECT DISTINCT NPM, Nama, Alamat, Hp, count(NPM) AS jumlah FROM mahasiswa GROUP BY Alamat");

echo "<table width='500' border='1'>
		<tr>
			<td colspan='5'><p align='center'>REKAP DATA MAHASISWA BERDASARKAN ALAMAT</td>
		</tr>
		<tr>
			<th width='5%'>NO</th>
			<th width='53%'>NPM</th>
			<th width='53%'>Nama</th>
			<th width='53%'>Alamat</th>
			<th width='24%'>Jumlah</th>
		</tr>";
$k = 1;
while($data = mysql_fetch_array($ambil)){
echo "<tr>
		<td>$k</td>
		<td>$data[NPM]</td>
		<td>$data[Nama]</td>
		<td align='center'>$data[Alamat]</td>
		<td align='center'><b>$data[jumlah]</b></td>
		</tr>
	";
	$k++;
}
echo "</table>";
?>