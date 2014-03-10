<?php
	include('includes/header.php');
	include('includes/includes.php');
	$totalPets = $_SESSION['allPets']['numCollected']
?>
   
<?php for ($i = 0; $i < $totalPets; $i++) { ?>
	
	<p><?php echo $_SESSION['allPets']['pets']['collected'][$i]['creatureName'];?></p>	

<?php
	if ($_SESSION['allPets']['pets']['collected'][$i]['stats']['speciesId'] > 0) { 

		$speciesInfo = getPetSpecies($_SESSION['allPets']['pets']['collected'][$i]['stats']['speciesId']);
			$speciesId = $speciesInfo['speciesId'];
		
		for ($q = 0; $q < 6; $q++) { // Loop to set the Abilities in the right order
			switch ($speciesInfo['abilities'][$q]['order']) {
				case 0:
					$ability1 = $speciesInfo['abilities'][$q]['id'];
					$name1 = $speciesInfo['abilities'][$q]['name'];
					break;
				case 1:
					$ability2 = $speciesInfo['abilities'][$q]['id'];
					$name2 = $speciesInfo['abilities'][$q]['name'];
					break;
				case 2:
					$ability3 = $speciesInfo['abilities'][$q]['id'];
					$name3 = $speciesInfo['abilities'][$q]['name'];
					break;
				case 3:
					$ability4 = $speciesInfo['abilities'][$q]['id'];
					$name4 = $speciesInfo['abilities'][$q]['name'];
					break;
				case 4:
					$ability5 = $speciesInfo['abilities'][$q]['id'];
					$name5 = $speciesInfo['abilities'][$q]['name'];
					break;
				case 5:
					$ability6 = $speciesInfo['abilities'][$q]['id'];
					$name6 = $speciesInfo['abilities'][$q]['name'];
					break;

			} // Ends the Switch 
		}  // Ends the Abilities Loop
				
		$inDB = searchSpecies($speciesId);
			$update = '';
			foreach ($inDB as $showinDB){
				$status = $showinDB['COUNT(speciesid)'];
			}
		
		if ($status == 1){
				updateSpecies($speciesId, $ability1, $ability2, $ability3, $ability4, $ability5, $ability6 );
			} elseif ($status == 0) {
				insertSpecies($canBattle, $creatureId, $description, $icon, $petTypeId, $source, $speciesId, $ability1, $ability2, $ability3, $ability4, $ability5, $ability6);
			}
	?>
<?php } // Ends the If ?>

        <p>Status: <?php echo $status;?> </p>
        <p>Ability 1: <?php echo $ability1;?> - <?php echo $name1;?></p>
        <p>Ability 2: <?php echo $ability2;?> - <?php echo $name2;?></p>
        <p>Ability 3: <?php echo $ability3;?> - <?php echo $name3;?></p>
        <p>Ability 4: <?php echo $ability4;?> - <?php echo $name4;?></p>
        <p>Ability 5: <?php echo $ability5;?> - <?php echo $name5;?></p>
        <p>Ability 6: <?php echo $ability6;?> - <?php echo $name6;?></p>
        <br />

	

<?php } //Closes the for Loop?>