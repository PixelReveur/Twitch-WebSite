function show_data() {
 $('#Twitch_Statut').load('includes/load.php #Twitch_Statut');
 $('#Twitch_Titre').load('includes/load.php #Twitch_Titre');
}
setInterval('show_data()', 30000);