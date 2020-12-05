<?php
// Calls for the config file
include( "../inc/config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO servers (nom, ip, port, max_players) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['ip'], $_POST['port'], $_POST['max_players']));

// Redirect user back to the add criminal page
header('Location: index.php');

?>
