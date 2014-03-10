<article class="displayPets">
<?php

	include('findPetsForm.php');
	include('family.php');
	include('goodAgainst.php');

	for ($i = 0; $i < $myPets['pets']['numCollected']/*12*/; $i++) {

            
			$petIcon = $myPets['pets']['collected'][$i]['icon'];
			$petName = $myPets['pets']['collected'][$i]['creatureName'];
            $petQualityId = $myPets['pets']['collected'][$i]['qualityId'];
			$petcanbattle = $myPets['pets']['collected'][$i]['canBattle'];
			$petLevel = $myPets['pets']['collected'][$i]['stats']['level'] ;
			$petHealth = $myPets['pets']['collected'][$i]['stats']['health'] ;
			$petQualityId = $myPets['pets']['collected'][$i]['stats']['petQualityId'] ;
			$petPower = $myPets['pets']['collected'][$i]['stats']['power'] ;
			$petSpeciesID = $myPets['pets']['collected'][$i]['stats']['speciesId'] ;
			$petSpeed = $myPets['pets']['collected'][$i]['stats']['speed'] ;
			$petcreatureId = $myPets['pets']['collected'][$i]['creatureId'];
			$petIsFavorite =  $myPets['pets']['collected'][$i]['isFavorite'];
			$petitemId = $myPets['pets']['collected'][$i]['itemId'];
			$petspellId = $myPets['pets']['collected'][$i]['spellId'];
			$petBreedId = $myPets['pets']['collected'][$i]['stats']['breedId'] ;
				
        	if ($petSpeciesID > 0 ) {
				$petFamily = family($petSpeciesID);
				foreach ($petFamily as $showPetFamily){
					$family = $showPetFamily['speciesPetTypeID'];
				}
			} else {
				$family = 100;
				$status = 'noncombat';
			}

		
		?>

<div class="window <?php echo (($family < 100) ?  $families['petTypes'][$family]['name'] :  $status); ?>" >

    	<?php switch ($family) { //Puts the Faded Picture of the Pets Family in The Box
			case 0: //Humanoid
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/humanoid_faded.png">';
				break;
			case 1: //Dragonkin
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/dragonkin_faded.png">';
				break;
			case 2: //Flying
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/flying_faded.png">';
				break;
			case 3: //Undead
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/undead_faded.png">';
				break;
			case 4:  //Critter
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/critter_faded.png">';
				break;
			case 5: //Magic
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/magic_faded.png">';
				break;
			case 6:  //Elemental
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/elemental_faded.png">';
				break;
			case 7: //Beast
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/beast_faded.png">';
				break;
			case 8: //Aquatic
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/aquatic_faded.png">';
				break;
			case 9: //Mechanical
				echo '<img id="fadedFamily" src="images/Icons/PetFamiliesFaded/PetsFaded/mechanical_faded.png">';
				break;
			case 100:
			   break;
		} ?>

			<p id="petImage"><img src="http://wow.zamimg.com/images/wow/icons/large/<?php echo $petIcon; ?>.jpg" ></p>
			<?php switch ($petQualityId) { //Picks the color of the Name based on the Pets Quality
				case 0:
					echo '<h3 id="petNameGrey">';
					break;
				case 1:
					echo '<h3 id="petNameWhite">';
					break;
				case 2:
					echo '<h3 id="petNameGreen">';
					break;
				case 3:
					echo '<h3 id="petNameBlue">';
					break;
				default:
					echo '<h3 id="petNameWhite">';         	
			} ?>
            
            	<?php echo $petName; ?> <?php /*?>- <?php echo $petSpeciesID; ?><?php */?></h3>
			<?php if ($petcanbattle == 1) { ?>
				<div id="petLevel"><img src="images/Icons/PetInterface/WowUI_Circular_Frame.png">
                <p	<?php if ($petLevel > 9) { //Centers the Pets Level based on a 1-9 or >9
                        echo 'id="levelHigh"';
                    } else {
                        echo 'id="levelLow"';
                    } ?>
                    ><?php echo $petLevel; ?></p></div>
				<?php  if ($petIsFavorite == 1) { //Adds the Star for the Pets Marked as Favorite
					echo '<div id="petFavorite"><img  src="images/favorite.png"></div>';
				} ?>
				<div <?php if ($petIsFavorite == 1) { // Changing the Location of the Pet Health Bar Based on Favorite or Not
						echo 'id="petHealthFav"';	
					} else {
						echo 'id="petHealthNotFav"';
					} ?>><img src="images/heart.png"><p><?php echo $petHealth; ?></p></div>
				
                <p id="petPower"><img src="images/power.png"><?php echo $petPower; ?></p>
				<p id="petSpeed"><img src="images/trackPet.png"><?php echo $petSpeed; ?></p>   

			<?php } else { //If the Pet is NOT a Combat Pet, this is what is displayed?>
				<ul id="clearFloat">
					<li id="notBattlePet"><p>Not a Battle Pet</p></li>
                   	<?php  if ($petIsFavorite == 1) { 
						echo '<div id="petFavoriteNC"><img  src="images/favorite.png"></div>';
					} ?>
				</ul>    					
			<?php } ?>
</div>

<?php } ?>

</article>

</div> <!-- Closes the .mainContent Div -->
