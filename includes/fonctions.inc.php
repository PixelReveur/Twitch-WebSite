<?php 
function sans_accents($str) {
	$str = str_replace("ê", "e", $str);
	$str = str_replace("é", "e", $str);
	$str = str_replace("è", "e", $str);
	$str = str_replace("ç", "c", $str);
	$str = str_replace("à", "a", $str);
	return $str;
}
?>