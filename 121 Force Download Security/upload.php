<?php
// panggil file thumbnail
include "thumbnail.php";

// deklarasi parameter POST ke dalam variabel
$F1 = $_FILES['F1']['tmp_name'];
$F1Name = $_FILES['F1']['name'];
$F1Type = $_FILES['F1']['type'];
$F1Size = $_FILES['F1']['size'];

// Menggunakan fungsi Upload dengan mengirimkan variabel $F1Name
Upload($F1Name);

// Tampilkan ke halaman web
echo "Nama Gambar : <b>$F1Name</b><br>";
echo "Type Gambar : <b>$F1Type</b><br>";
echo "Size Gambar : <b>$F1Size</b><br>";
echo "Gambar Asli : <br><img src='gambar/$F1Name'> <br><br>Gambar Thumbnail : <br><img src='gambar/thumbs/thumb_$F1Name'>";

echo " <br><br><a href='download.php?id=$F1Name'><b>Download File</b></a>";
?>