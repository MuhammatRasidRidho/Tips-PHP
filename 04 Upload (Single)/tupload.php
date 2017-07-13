<?php
// ubah ke dalam bentuk variabel
$judul = $_POST['judul'];
$F1 = $_FILES['F1']['tmp_name'];
$F1_name = $_FILES['F1']['name'];
$F1_type = $_FILES['F1']['type'];
$F1_size = $_FILES['F1']['size'];

// Pindahkan file ke folder File
$move = move_uploaded_file ($F1, 'file/'.$F1_name);
if ($move) {
	// Tampilkan file yang telah di upload
	echo " <h4><b> Berhasil disimpan </b> </h4>";
	echo " Judul : <b> $judul </b><br>";
	echo " Name : <b> $F1_name </b><br>";
	echo " Type : <b> $F1_type </b><br>";
	echo " Size : <b> $F1_size </b><br>";
}
// jika upload gagal
else {
	echo "Gagal di Upload";
}
?>