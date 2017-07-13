<?php
// Panggil (Include) class ezPdf
include "class.ezpdf.php";
  
// buat objek PDF
$pdf = new Cezpdf();

// Tampilkan teks 
$pdf->ezText("\nTrik Dahsyat Web Master PHP Plus HTML5 & CSS3");

// Tampilkan dokumen PDF di browser
$pdf->ezStream();
?>
