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
	echo "1:".$user["userName"].":Gamerul123:".$user["userID"].":28:".$user["coins"].":51026:".$user["userCoins"].":322563:".$user["color1"].":1:".$user["color2"].":3:".$user["stars"].":653120:".$user["demons"].":6523210:".$creatorpoints.":18:0:19:0:20:".$youtubeurl.":21:".$user["accIcon"].":22:".$user["accShip"].":23:".$user["accBall"].":24:".$user["accBird"].":25:".$user["accDart"].":26:".$user["accRobot"].":28:".$user["accGlow"].":30:69:16:".$user["extID"].":31:0:38:0:39:0:40:0:29:1";
?>	
