<?php
include_once("../config.php");
include_once("../includes/languages/".$language.".php");

$channels_ = file_get_contents('https://api.twitch.tv/kraken/channels/'.$channel.'?client_id='.$client_id);
$channels = json_decode($channels_, true);

$streams_ = file_get_contents('https://api.twitch.tv/kraken/streams/'.$channel.'?client_id='.$client_id);
$streams = json_decode($streams_, true);

$viewers = $streams['stream']['viewers'];
$_id = $streams['stream']['_id'];

$mature = $channels['mature'];
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

( <?php echo $_id; ?> ) ( <?php echo $viewers; ?> ) 
<div class="Twitch_Statut" id="Twitch_Statut">
<?php
if ($_id) {
	echo $display_name;
	if ($display_game == 1){
		if ($game == "Creative" OR $game == "IRL") {
			echo " ".$lang_isonline;
		} else if ($game == "Poker") {
			echo " ".$lang_playing1B." ".$game;
		} else {
			echo " ".$lang_playing1." ".$game;
		}
	} else {
		echo " ".$lang_isonline;
	}
	if ($display_viewers == 1){
		echo " ".$lang_playing2." ".$viewers." ".$lang_playing3;
	}	
} else {
	echo $display_name." ".$lang_isoffline;
}
?>
</div>

<div class="Twitch_Titre" id="Twitch_Titre">
<?php
if ($_id) {
	echo $status;
}
?>
</div>
	</body>
</html>
