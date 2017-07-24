<?php
// panggil file excel_reader
include "excel_reader2.php";
 
// koneksi ke mysql
mysql_connect("localhost", "root", "");
mysql_select_db("trikphp");
 
// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
 
// membaca jumlah baris (excel)
$baris = $data->rowcount($sheet_index=0);
 
// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++) {
	// membaca data nama (kolom ke-1)
	$nama = $data->val($i, 2);
	// membaca data jk (kolom ke-2)
	$jk = $data->val($i, 3);
	// membaca data alamat (kolom ke-3)
	$alamat = $data->val($i, 4);
	
	$cari = mysql_num_rows(mysql_query("SELECT nama FROM mahasiswa WHERE nama = '$nama'"));
	
	if (empty($nama)){
		$hasil = mysql_query("INSERT INTO tgagal(keterangan,nama,jk,alamat) VALUES('Tidak ada nama mahasiswa','$nama','$jk','$alamat')");
	}
	elseif ($cari > 0){
		$hasil = mysql_query("INSERT INTO tgagal(keterangan,nama,jk,alamat) VALUES('Duplikat nama mahasiswa','$nama','$jk','$alamat')");
	}
	else{

		// setelah data dibaca, simpan ke dalam tabel mahasiswa
		$hasil = mysql_query("INSERT INTO mahasiswa(nama,jk,alamat) VALUES ('$nama', '$jk', '$alamat')");
	}
}
 
// tampilan teks import selesai
echo "<h3>Proses import data selesai.</h3>";
?>