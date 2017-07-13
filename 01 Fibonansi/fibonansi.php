<?php
function fibonansi($n){
	$a = 0;
	$b = 1;
	for($i=0;$i<$n;$i++){
		echo $a." ";
		$jumlah = $a + $b;
		$a = $b;
		$b = $jumlah;
	}
}
echo fibonansi(10);
?>