<?php
error_reporting(0);
$valid_mail = "^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,5}))$";
if (!eregi($valid_mail, $_POST[email])){
	echo "Penulisan alamat E-mail salah!";
}
else{
	echo "Penulisan alamat E-mail <b>$_POST[email]</b> benar";
}
?>