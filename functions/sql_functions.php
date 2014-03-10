<?php

// Inserts new realms
	function insertRealm($realm_name, $realm_battlegroup, $realm_locale, $realm_slug, $realm_timezone){ 
		global $db;
		$query = "INSERT INTO realms(`realm_name`, realm_region, `realm_battlegroup`, `realm_locale`, `realm_slug`, `realm_timezone`, `realm_created`, `realm_updated`) 
					VALUES ('$realm_name', 4, '$realm_battlegroup', '$realm_locale', '$realm_slug', '$realm_timezone', now(), now())";
		$db->exec($query);
	}

// Update information from the Realms when pulled from Blizzard
	function updateRealm($realm_auto){ 
		global $db;
		$query = "UPDATE realms
					SET realm_region = 2,
					 realm_updated = NOW()
					WHERE realm_name = '$realm_auto'";
		$db->exec($query);
	}

// Pulls the Realm List
	function listRealm(){ 
		global $db;
		$query = "SELECT DISTINCT realm_name, realm_region, realm_slug
					FROM realms
					ORDER BY realm_region, realm_name";
		$results = $db->query($query);
		return $results;
	}
	
// Search for a specific Realm in the List
	function searchForRealm($region, $realm){ 
		$username = 'root';
		$password = '';
		$db = mysql_connect("localhost", $username, $password);
		mysql_select_db("pet_battles", $db);
		$result = mysql_query("SELECT COUNT(*)
						FROM realms
						WHERE realm_region = $region
							AND realm_name = '".mysql_real_escape_string($realm)."'
							LIMIT 1");
	}

	function insertSpecies($canBattle, $creatureId, $description, $icon, $petTypeId, $source, $speciesId, $ability1, $ability2, $ability3, $ability4, $ability5, $ability6){ 
		global $db;
		$query = "INSERT INTO petspecies(speciesid, speciesSource, speciesPetTypeID, speciesIcon, speciesDescription, speciesCreatureID, speciesCanBattle, ability1, ability2, ability3, ability4, ability5, ability6, speciesCreated, speciesUpdated) 
					VALUES ($speciesId,  '$source', $petTypeId, '$icon', '$description', $creatureId, $canBattle, $ability1, $ability2, $ability3, $ability4, $ability5, $ability6, now(), now())";
		$db->exec($query);
	}

	function searchSpecies($speciesid){
		global $db;
		$query = "SELECT COUNT(speciesid)
					FROM petspecies
					WHERE speciesid = $speciesid"; 
		$results = $db->query($query);
		return $results;
	}

// Update the Species DB, with the current information
	function updateSpecies($speciesid, $ability1, $ability2, $ability3, $ability4, $ability5, $ability6 ){ 
		global $db;
		$query = "UPDATE petspecies
					SET speciesUpdated = NOW(),
						ability1 = $ability1,
						ability2 = $ability2,
						ability3 = $ability3,
						ability4 = $ability4,
						ability5 = $ability5,
						ability6 = $ability6
					WHERE speciesid = $speciesid";
		$db->exec($query);
	}

// Get Pet Family
	function family($speciesID){
		global $db;
		$query = "SELECT speciesPetTypeID
					FROM petspecies
					WHERE speciesid = $speciesID"; 
		$results = $db->query($query);
		return $results;	
	}
	
// Get a pets Spells
	function abilities($abilityCount, $speciesID){
		global $db;
		$query = "SELECT ability_id, ability_icon
					FROM pet_abilites
					WHERE ability_id IN (SELECT $abilityCount
               								FROM petspecies 
              								 WHERE speciesid = $speciesID)"; 
		$results = $db->query($query);
		return $results;	
	}
?>