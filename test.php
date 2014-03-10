<?php
	include('includes/header.php');
	
	function get_pets($region, $realm, $name){
		$character_pet_request = file_get_contents("http://$region.battle.net/api/wow/character/$realm/$name?fields=pets");
		$allPets = json_decode($character_pet_request, true);
		return $allPets;
	}
	
	$myPets = get_pets("us", "moknathal", "dalthalion");

	$_SESSION['allPets'] = array();
	
	$_SESSION['allPets']['level'] = $myPets['level'];	
	$_SESSION['allPets']['name'] = $myPets['name'];	
	$_SESSION['allPets']['numCollected'] = $myPets['pets']['numCollected'];	
	
	for ($i = 0; $i < $_SESSION['allPets']['numCollected']; $i++) { 
/*		$_SESSION['allPets']['pets']['collected'][$i]['battlePetId'] = $myPets['pets']['collected'][$i]['battlePetId'];*/
		$_SESSION['allPets']['pets']['collected'][$i]['creatureName'] = $myPets['pets']['collected'][$i]['creatureName'];
		$_SESSION['allPets']['pets']['collected'][$i]['canBattle'] = $myPets['pets']['collected'][$i]['canBattle'];
		$_SESSION['allPets']['pets']['collected'][$i]['creatureId'] = $myPets['pets']['collected'][$i]['creatureId'];
		$_SESSION['allPets']['pets']['collected'][$i]['icon'] = $myPets['pets']['collected'][$i]['icon'];
		$_SESSION['allPets']['pets']['collected'][$i]['isFavorite'] = $myPets['pets']['collected'][$i]['isFavorite'];
		$_SESSION['allPets']['pets']['collected'][$i]['itemId'] = $myPets['pets']['collected'][$i]['itemId'];
		$_SESSION['allPets']['pets']['collected'][$i]['qualityId'] = $myPets['pets']['collected'][$i]['qualityId'];
		$_SESSION['allPets']['pets']['collected'][$i]['spellId'] = $myPets['pets']['collected'][$i]['spellId'];
		$_SESSION['allPets']['pets']['collected'][$i]['stats']['breedId'] = $myPets['pets']['collected'][$i]['stats']['breedId'] ;
		$_SESSION['allPets']['pets']['collected'][$i]['stats']['health'] = $myPets['pets']['collected'][$i]['stats']['health'] ;
		$_SESSION['allPets']['pets']['collected'][$i]['stats']['level'] = $myPets['pets']['collected'][$i]['stats']['level'] ;
		$_SESSION['allPets']['pets']['collected'][$i]['stats']['petQualityId'] = $myPets['pets']['collected'][$i]['stats']['petQualityId'] ;
		$_SESSION['allPets']['pets']['collected'][$i]['stats']['power'] = $myPets['pets']['collected'][$i]['stats']['power'] ;
		$_SESSION['allPets']['pets']['collected'][$i]['stats']['speciesId'] = $myPets['pets']['collected'][$i]['stats']['speciesId'] ;
/*		$_SESSION['allPets']['pets']['collected'][$i]['stats']['speed'] = $myPets['pets']['collected'][$i]['stats']['speed'] ;*/
	}



?>
<article>  

   <h2>Test</h2>
   
   <h3><?php echo $_SESSION['allPets']['name']; ?>, Level <?php echo $_SESSION['allPets']['level']; ?> has <?php echo $_SESSION['allPets']['numCollected']; ?> Pets</h3>
   
   <h4>Battle Pet ID: <?php echo $myPets['pets']['collected'][0]['battlePetId']; ?></h4>
   
   <h4>Battle Pet Name: <?php echo $myPets['pets']['collected'][0]['creatureName']; ?></h4>
   
















<?php /*?><?php for ($i = 0; $i < 10; $i++) { ?>
	
	<p><?php echo $_SESSION['allPets']['pets']['collected'][$i]['creatureName'];?></p>

<?php } ?><?php */?>

</article>
<?php

	include('includes/footer.php');

?>