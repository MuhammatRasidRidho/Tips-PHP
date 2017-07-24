<?php
mysql_connect("localhost","root","");
mysql_select_db("trikphp");

$sql = mysql_query("select * from kategori");
while($query = mysql_fetch_array($sql)) {
	$id = $query['id_kategori'];
	echo "<b>$query[kategori]</b><br>";
$hasil = mysql_query("select * from berita, kategori where berita.id_kategori='$id' and kategori.id_kategori=berita.id_kategori order by berita.id DESC limit 2");
while ($data = mysql_fetch_array($hasil)) {
	echo "$data[judul] <br>";
}
echo "<br>";
}
?>