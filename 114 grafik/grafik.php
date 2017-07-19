<?php
mysql_connect("localhost","root","");
mysql_select_db("upb");;	

echo "<h3>DATA STATISTIK PERBANDINGAN ALAMAT</h3>";
echo "<table border='0' cellpading='5' cellspacing='5' bgcolor='greey'>
	<tr height='250' valign='bottom'>";
	$no = 1;
	$sql = mysql_query("SELECT Nama,Hp,Alamat, count(NPM) as jml from mahasiswa group by Alamat");
	while ($data = mysql_fetch_array($sql)){
		echo "
		<th width='50' align='center'>
			$data[jml]<br>($data[Alamat])
		<img src='bar$no.png' height='$data[jml]0' width='50'>
		</th>";
		$no++;
	}
echo "</tr></table>";
?>