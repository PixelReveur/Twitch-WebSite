<?php
   header('content-type: text/css');
   
   include_once("../config.php");
?>

@font-face {
    font-family: "GeoSans_Light";
    src: url('fonts/GeosansLight.ttf');
}

html {
  margin:0;
  padding:0;
  background: #000000 url(<?php echo $replacement_background; ?>) no-repeat center center fixed; 
  background-size: cover; 
}


body {
	background-color: #000000;
	font-family: "GeoSans_Light";
	font-size:11px;
	color:#FFFFFF;
    -webkit-font-smoothing: antialiased;

}

a{
	text-decoration:none;
	color:#FFFFFF;
	transition-duration: 0.5s;
}

li {
    display: inline-block;
    list-style: none;
	font-size:20px;
}
li a:hover {
color: <?php echo $color; ?>;
transition-duration: 0.5s;
}


.Twitch_Frame {
	position: fixed;
	z-index: -10;
	width: 500%;
	height: 130%;
	left: -200%;
	top: -15%;
}

.Offline_Background {
	position: fixed;
	z-index: -10;
	min-width: 110%;
	min-height: 110%;
	top: 0;
}


.Black_Background {
	position: fixed;
	z-index: -5;
	background: rgba(0, 0, 0, 0.6);
	width: 130%;
	height: 130%;
	left: -15%;
	top: -15%;
}

.page {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0px;
	top: 0px;
}

.reseaux {
	position: relative;
	width: 100%;
    height: calc(35% - 75px);
    min-height: 30px;
	left: 0;
	top: 0;
	line-height: 30px;
}

.Twitch_Avatar {
	position: relative;
	width:150px;
    height:150px;
	left: calc(50% - 75px);
	top: 0;
}
.Twitch_Avatar_Round {
	position: relative;
	width:150px;
    height:150px;
	border-radius:80px;
	left: calc(50% - 75px);
	top: 0;
}
 
.Twitch_Statut {
	margin-top: 15px;
	position: relative;
	width:100%;
    height:auto;
	left: 0px;
	top: 0px;
	text-align: center;
	font-size:20px;
	text-transform: uppercase;
	letter-spacing: 3px;
}

.Twitch_Titre {
	margin-top: 15px;
	position: relative;
	width:100%;
    height:auto;
	left: 0px;
	top: 0px;
	text-align: center;
	font-size:40px;
	line-height: 1;
}

.Twitch_Lien {
	margin-top: 20px;
	margin-bottom: 15px;
	position: relative;
	width:250px;
    height:50px;
	border-radius:80px;
	left: calc(50% - 125px);
	top: 0px;
	text-align: center;
	font-size:20px;
	text-transform: uppercase;
	letter-spacing: 3px;
	border:1px #ffffff solid;
	line-height: 50px;
	font-weight: normal;
	text-shadow: 1px 1px 10px #000000;
	background: rgba(0, 0, 0, 0.2);
	transition-duration: 0.5s;
}
.Twitch_Lien:hover {
	background: <?php echo $color; ?>;
	font-weight: bold;	
}
