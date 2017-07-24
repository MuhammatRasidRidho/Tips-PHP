<?php
// Koneksi database
mysql_connect("localhost","root","");
mysql_select_db("trikphp");

// hilangkan spasi kiri dan kanan
$keyword = trim($_POST['keyword']);

// pisahkan dan hitung jumlah keyword
$pisah_kata = explode(" ", $keyword);
$jumlah_kata = (integer)count($pisah_kata);
$jml_kata = $jumlah_kata - 1;

// query untuk pencarian multiple keyword
$sql = "SELECT * FROM berita WHERE ";
for ($i=0; $i<=$jml_kata; $i++){
	$sql .= "judul LIKE '%$pisah_kata[$i]%'";
	if($i < $jml_kata){
		$sql .= " OR ";
	}
}
$sql .= " ORDER BY id DESC LIMIT 5";
$hasil = mysql_query($sql);

// Tampilkan ke dalam halaman web
echo "<h4>Keyword: $keyword </h4>";
while ($data = mysql_fetch_array($hasil)){
	echo "$data[judul]<br>";
}
?>