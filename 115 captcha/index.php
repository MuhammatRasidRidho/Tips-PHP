<?php
error_reporting(0);
if($_POST['submit']){
	session_start();
	if(md5($_POST['pin']) == $_SESSION['image_random_value']){
		echo '<p>Kode Benar</p>';
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