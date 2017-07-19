<?php
error_reporting(0);
$valid_url = "|^[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i";
if (!preg_match($valid_url, $_POST [url])){
	echo "Alamat URL yang dimasukkan tidak valid";
}
else{
	echo "Alamat URL benar";
}
?>