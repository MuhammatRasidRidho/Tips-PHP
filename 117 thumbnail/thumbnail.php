<?php
function Upload($uploadName){
	// File gambar diupload
	$direktori = "gambar/";
	$direktoriThumb = "gambar/thumbs/";
	$file = $direktori . $uploadName;
	
	// Simpan gambar dalam ukuran sebenarnya
	$realImagesName = $_FILES['F1']['tmp_name'];
	move_uploaded_file($realImagesName, $file);
	
	// Identitas file gambar
	$realImages = imagecreatefromjpeg($file);
	$width = imageSX($realImages);
	$height = imageSY($realImages);
	
	// Simpan dalam ukuran file yang diinginkan (thumb)
	$thumbWidth = 150;
	$thumbHeight = ($thumbWidth / $width) * $height;
	
	// Fungsi untuk mengubah ukuran gambar
	$thumbImage = imagecreatetruecolor($thumbWidth, $thumbHeight);
	imagecopyresampled($thumbImage, $realImages, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $width, $height);
	
	// Simpan gambar thumbnail
	imagejpeg($thumbImage, $direktoriThumb . "thumb_" . $uploadName);
	
	// Hapus objek gambar dalam memori
	imagedestroy($realImages);
	imagedestroy($thumbImage);
}
?>