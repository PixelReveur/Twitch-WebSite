<?php 
function sans_accents($str) {
	$str = str_replace("�", "e", $str);
	$str = str_replace("�", "e", $str);
	$str = str_replace("�", "e", $str);
	$str = str_replace("�", "c", $str);
	$str = str_replace("�", "a", $str);
	return $str;
}
?>