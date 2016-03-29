<?
include_once("../config.php");
include_once("../includes/languages/".$language.".php");

$channels_ = file_get_contents('https://api.twitch.tv/kraken/channels/'.$channel.'');
$channels = json_decode($channels_, true);

$streams_ = file_get_contents('https://api.twitch.tv/kraken/streams/'.$channel.'');
$streams = json_decode($streams_, true);

$viewers = $streams['stream']['viewers'];
$_id = $streams['stream']['_id'];

$game = $channels['game'];
$display_name = $channels['display_name'];
$status = $channels['status'];
$logo = $channels['logo'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv= "content-type" content= "text/html; charset=uft-8" >
		<meta charset="UTF-8">
	</head>
	<body>

( <? echo $_id; ?> ) ( <? echo $viewers; ?> ) 
<div class="Twitch_Statut" id="Twitch_Statut">
<?
if ($_id) {
	echo $display_name." ".$lang_playing1." ".$game." ".$lang_playing2." ".$viewers." ".$lang_playing3;
} else {
	echo $display_name." ".$lang_isoffline;
}
?>
</div>

<div class="Twitch_Titre" id="Twitch_Titre">
<?
if ($_id) {
	echo $status;
}
?>
</div>
	</body>
</html>
