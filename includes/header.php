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
    
    <link rel="shortcut icon" href="./favicon.png">

    <script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>

</head>

<body>
<?php /*include_once("analyticstracking.php")*/ ?>

<header>
    
	<img class="logo" src="./images/BattlePetsLogo/PetBattleLogo.png">

	<hr />

	<?php include('findPetsForm.php'); ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
	<script type="text/javascript" src="js/chained.js"></script>
	<script type="text/javascript" src="js/select.js"></script>


</header>
 	