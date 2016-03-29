<?php
include_once("config.php");
include_once("includes/languages/".$language.".php");

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
		<meta http-equiv= "content-type" content= "text/html; charset=iso-8859-1" >
		<meta charset="UTF-8">
		<meta name="Content-Language" content="<? echo $language; ?>" /> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><? echo $display_name; ?> | <? echo $lang_title; ?></title>
		<meta name="description" content="<? if ($_id) { echo $status; } ?>">
		<meta name="keywords" content="streamer,twitch,live,<? echo $display_name; ?>">
		<meta name="author" content="PixelReveur">
		<link href="css/style.php" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="favicon.ico">
	</head>
	<body onload="show_data()">

		<iframe class="Twitch_Frame" frameborder="0" width="1980px" height="1024px" title="Vidéo Twitch" src="https://player.twitch.tv/?channel=<? echo $channel; ?>&auto_play=true&start_volume=0&muted=1"></iframe>
		
		<div class="Black_Background"></div>
		
		<div class="page">
			
			<div class="reseaux">
				&nbsp;
<?
if ($network_twitter) {
	echo "<li><a href=\"".$network_twitter."\" target=\"_blank\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
if ($network_youtube) {
	echo "<li><a href=\"".$network_youtube."\" target=\"_blank\" title=\"YouTube\"><i class=\"fa fa-youtube-play\"></i></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
if ($network_facebook) {
	echo "<li><a href=\"".$network_facebook."\" target=\"_blank\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
if ($network_mail) {
	echo "<li><a href=\"".$network_mail."\" target=\"_blank\" title=\"Mail\"><i class=\"fa fa-envelope\"></i></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
if ($network_donnate) {
	echo "<li><a href=\"".$network_donnate."\" target=\"_blank\" title=\"".$lang_donate."\"><i class=\"fa fa-money\"></i></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
?>
			</div>
			
			<div class="Twitch_Avatar"><img class="Twitch_Avatar<? if ($round_avatar == 1) { echo "_Round"; } ?>" src="<? echo $logo; ?>"></div>
			
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
<? if ($_id) { echo $status; } ?>
			</div>

			<a href="https://www.twitch.tv/<? echo $channel; ?>">
				<div class="Twitch_Lien"><? echo $lang_viewchannel; ?></div>
			</a>
		
		</div>	
		<script type="text/javascript" src="scripts/jquery.js"></script>
		<script type="text/javascript" src="scripts/loads.js"></script>
	</body>
</html>
