<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Servers Status</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
  <div class="background">
  <div class="padding-top"></div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left-color"><b>SERVER NAME</b></th>
<th class="text-left-color"><b>IP:PORT</b></th>
<th class="text-left-color"><b>PLAYERS</b></th>
<th class="text-left-color"><b>STATUS</b></th>
<th class="text-left-color"><b>CONNECT</b></th>
</tr>
</thead>
<tbody class="table-hover">
            <?php 
                            include("inc/config.php");
                                        // Get contents of the lspd table
                                        $reponse = $bdd->query('SELECT * FROM servers');
                                    
                                        // Display each entry one by one
                                        while ($data = $reponse->fetch()) {
            

$settings['title'] = "";
$settings['ip'] = $data['ip']; // Sunucu Ip'si
$settings['port'] = $data['port']; // Standart port 30120 olmalı (eğer değiştirilmediyse)
$settings['max_slots'] = $data['max_players']; // Kullanıcı slotu (Varsayılan 32)

@$content = json_decode(file_get_contents("http://".$settings['ip'].":".$settings['port']."/info.json"), true);
@$img_d64 = $content['icon'];
if($content) {
$gta5_players = file_get_contents("http://".$settings['ip'].":".$settings['port']."/players.json");
$content = json_decode($gta5_players, true);
$pl_count = count($content);
                                    ?>
<tr>
<td class="text-left"><b><?php echo $data['nom']; ?></b></td>
<td class="text-left"><b><?php echo $data['ip']; ?>:<?php echo $data['port']; ?></b></td>
<td class="text-left"><b><?= $pl_count ?>/<?= $settings['max_slots'] ?></b></td>
<td class="text-left"><b><font style='color: #4acf90;'>ONLINE</font></b></td>
<td class="text-left"><a href="fivem://connect/<?php echo $data['ip']; ?>:<?php echo $data['port']; ?>" class="join-btn"><b>JOIN SERVEUR</b></a></td>
</tr>

<?php } else { ?>
<tr>
<td class="text-left"><b><?php echo $data['nom']; ?></b></td>
<td class="text-left"><b><?php echo $data['ip']; ?>:<?php echo $data['port']; ?></b></td>
<td class="text-left"><b>0 / 0</b></td>
<td class="text-left"><b><font style='color: #e74c3c;'>OFFLINE</font></b></td>
<td class="text-left"><a href="" class="join-btn-unavailable"><b>UNAVAILABLE</b></a></td>
</tr>
  <?php
             
            } 
          } 
            $reponse->closeCursor(); // Complete query ?>
</tbody>
</table>
</div>
  </body>
</body>
</html>
