<?php
mysql_connect("localhost","root","");
mysql_select_db("tlatihan");

$ip = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); // 

// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
$s = mysql_query("SELECT * FROM tstatistik WHERE ip='$ip' AND tanggal='$tanggal'");
// Kalau belum ada, simpan data user tersebut ke database
if(mysql_num_rows($s) == 0){
	mysql_query("INSERT INTO tstatistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
} 
else{
	mysql_query("UPDATE tstatistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}

$pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM tstatistik WHERE tanggal='$tanggal' GROUP BY ip"));
$totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM tstatistik"), 0); 
$tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM tstatistik"), 0); 
$bataswaktu       = time() - 300;
$pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM tstatistik WHERE online > '$bataswaktu'"));

echo "Hits : $tothitsgbr <br>
	 Pengunjung hari ini : $pengunjung <br>
	 Total Pengunjung : $totalpengunjung <br>
	  Pengunjung Online : $pengunjungonline<br>";
?>