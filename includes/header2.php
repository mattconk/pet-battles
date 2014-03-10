<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8">
    <title>Pets Battles</title>
    <meta name="keywords" content="World of Warcraft, Wow, Battle Pets, mini-game, Pet Battles, companions, minipets, non-combat pets, Battle Pet Training">
    <meta name="description" content="An interactive site which uses the Blizzard API to list Battle Pets.">
    <meta name="author" content="Matt Conk"> 
    <link href="css/cssreset.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>

</head>

<body>
<?php include_once("analyticstracking.php") ?>

<header>
   
	<img class="logo" src="./images/BattlePetsLogo/PetBattleLogo.png">

    <h3><?php echo $myPets['name']; ?> of <?php echo $myPets['realm']; ?>s Pets</h3>
	<img class="pic" src="http://us.battle.net/static-render/us/<?php echo $myPets['thumbnail']; ?>" >

	<hr />

</header>
 	