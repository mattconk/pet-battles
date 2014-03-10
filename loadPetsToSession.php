<?php

// Takes the Data pulled from the API and loads it into Session Variables 

		$_SESSION['allPets'] = array();
	
		$_SESSION['allPets']['achievementPoints'] = $myPets['achievementPoints'];  
		$_SESSION['allPets']['battlegroup'] = $myPets['battlegroup'];	
		$_SESSION['allPets']['calcClass'] = $myPets['calcClass'];	
		$_SESSION['allPets']['class'] = $myPets['class'];	
		$_SESSION['allPets']['gender'] = $myPets['gender'];	
		$_SESSION['allPets']['lastModified'] = $myPets['lastModified'];	
		$_SESSION['allPets']['level'] = $myPets['level'];	
		$_SESSION['allPets']['name'] = $myPets['name'];	
		$_SESSION['allPets']['race'] = $myPets['race'];	
		$_SESSION['allPets']['realm'] = $myPets['realm'];	
		$_SESSION['allPets']['thumbnail'] = $myPets['thumbnail'];	
		$_SESSION['allPets']['numCollected'] = $myPets['pets']['numCollected'];	

		for ($i = 0; $i < $_SESSION['allPets']['numCollected']; $i++) { 
/*			$_SESSION['allPets']['pets']['collected'][$i]['battlePetId'] = $myPets['pets']['collected'][$i]['battlePetId'];
*/			$_SESSION['allPets']['pets']['collected'][$i]['creatureName'] = $myPets['pets']['collected'][$i]['creatureName'];
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
			$_SESSION['allPets']['pets']['collected'][$i]['stats']['speed'] = $myPets['pets']['collected'][$i]['stats']['speed'] ;
			
		}
		

?>