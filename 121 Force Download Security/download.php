<?php
error_reporting(0);
if($_POST['submit']){
	session_start();
	if(md5($_POST['pin']) == $_SESSION['image_random_value']){
		$direktori = "gambar/";
		$filename = $_GET['id'];
		
		$file_extension = strtolower(substr(strrchr($filename,"."),1));
		
		// cek ekstensi file (apakah jpeg, pdf, doc, dll)
		switch($file_extension){
			case "pdf": $ctype="application/pdf"; break;
			case "exe": $ctype="application/octet-stream"; break;
			case "zip": $ctype="application/zip"; break;
			case "rar": $ctype="application/rar"; break;
			case "doc": $ctype="application/msword"; break;
			case "xls": $ctype="application/vnd.ms-excel"; break;
			case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
			case "gif": $ctype="image/gif"; break;
			case "png": $ctype="image/png"; break;
			case "jpeg":
			case "jpg": $ctype="image/jpg"; break;
			default: $ctype="application/proses";
		}

		// Perintah untuk Force file
		header("Pragma: private"); 
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("Cache-Control: private",false); 
		header("Content-Type: $ctype");
		header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
		header("Content-Transfer-Encoding: binary");
		header("Content-Length: ".filesize($direktori.$filename));
		readfile("$direktori$filename");
		exit();   
	}
	else{
		echo '<p>Kode Salah</pa>';
	}
}
?>

<form name="form1" method="post" action="">
<img src="captcha.php">
<div>
Masukkan Kode Security diatas : <br><input type="text" name="pin">
<input type="submit" name="submit" value="Submit">
</div>
</form>