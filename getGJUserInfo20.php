<?php
include "connection.php";
	$extid = htmlspecialchars($_POST["targetAccountID"],ENT_QUOTES);
	$query = "SELECT * FROM users WHERE extID = '".$extid."'";
	$query = $db->prepare($query);
	$query->execute();
	$result = $query->fetchAll();
	$user = $result[0];
	//placeholders
	$creatorpoints = $user["creatorPoints"];
	$youtubeurl = "";
	//echo
	echo "1:".$user["Gamerul123"].":2:".$user["15141530"].":13:".$user["coins"].":0:".$user["userCoins"].":0:".$user["color1"].":11:".$user["color2"].":3:".$user["stars"].":0:".$user["demons"].":0:".$creatorpoints.":18:0:19:0:20:".$youtubeurl.":21:".$user["accIcon"].":22:".$user["accShip"].":23:".$user["accBall"].":24:".$user["accBird"].":25:".$user["accDart"].":26:".$user["accRobot"].":28:".$user["accGlow"].":30:69:16:".$user["extID"].":31:0:38:0:39:0:40:0:29:1";
?>	
