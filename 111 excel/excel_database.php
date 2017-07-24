<?php

error_reporting(0);

 
// Nama File Excel
$date = date('Ymd-his');
$namaFile = "report".$date.".xls";
 
// Fungsi penanda awal
function xlsBOF() {
	echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
	return;
}
 
// Fungsi penanda akhir
function xlsEOF() {
	echo pack("ss", 0x0A, 0x00);
	return;
}
 
// Fungsi untuk menulis data angka ke cell excel
function xlsWriteNumber($Row, $Col, $Value) {
	echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
	echo pack("d", $Value);
	return;
}
 
// Fungsi untuk menulis data teks ke cell excel
function xlsWriteLabel($Row, $Col, $Value ) {
	$L = strlen($Value);
	echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
	echo $Value;
	return;
}
 
// header file excel 
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
 
// header untuk nama file
header("Content-Disposition: attachment; filename=".$namaFile."");
 header("Content-Transfer-Encoding: binary ");
 
// memanggil fungsi penanda awal
xlsBOF();
 
// mengisi cell A1 (baris ke-0, kolom ke-0)
xlsWriteLabel(0,0,"No");
 
// mengisi cell A2 (baris ke-0, kolom ke-1)
xlsWriteLabel(0,1,"NPM");              
 
// mengisi cell A3 (baris ke-0, kolom ke-2)
xlsWriteLabel(0,2,"Nama");
 
// mengisi cell A4 (baris ke-0, kolom ke-3)
xlsWriteLabel(0,3,"Alamat"); 

// mengisi cell A4 (baris ke-0, kolom ke-3)
xlsWriteLabel(0,4,"HP");   
 
// koneksi ke mysql 
mysql_connect("localhost", "root", "");
mysql_select_db("upb");
 
// Menampilkan semua data 
$hasil = mysql_query("SELECT * FROM mahasiswa");
 
// nilai awal untuk baris cell
$noBarisCell = 1;
 
// nilai awal untuk nomor urut data
$noData = 1;
 
while ($data = mysql_fetch_array($hasil))
{
   // menampilkan no. urut data
   xlsWriteNumber($noBarisCell,0,$noData);
 
   // menampilkan data nim
   xlsWriteLabel($noBarisCell,1,$data['NPM']);
 
   // menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,2,$data['Nama']);
 
   // menampilkan data nilai
   xlsWriteLabel($noBarisCell,3,$data['Alamat']);
 
   // menampilkan data nilai
   xlsWriteLabel($noBarisCell,4,$data['Hp']);
 
   // increment untuk no. baris cell dan no. urut data
   $noBarisCell++;
   $noData++;
}
 
// memanggil fungsi penanda akhir file excel
xlsEOF();
exit(); 
?>