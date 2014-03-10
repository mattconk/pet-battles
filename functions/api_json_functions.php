<?php

// Pulls the All Pets on an Account from Blizzard
	function get_pets($region, $realm, $name){
		$character_pet_request = file_get_contents("http://$region.battle.net/api/wow/character/$realm/$name?fields=pets");
		$allPets = json_decode($character_pet_request, true);
		return $allPets;
	}

// Pulls the Pet Types, Strong, and Weak Data
	function get_petsTypes(){
		$pet_types = file_get_contents("http://us.battle.net/api/wow/data/pet/types");
		$results = json_decode($pet_types, true);
		return $results;
	}

// Pulls the Spieces information from the Blizzard API
	function getSpecies($speciesID) {
		$speciesAPI = file_get_contents("http://us.battle.net/api/wow/battlePet/species/$speciesID");
		$speciesInfo = json_decode($speciesAPI, true);
		return $speciesInfo;
	}

// Pulls the Realm Status from Blizzard
	function getRealms() {
		$realms = file_get_contents("http://us.battle.net/api/wow/realm/status");
		$allRealms = json_decode($realms, true);
		return $allRealms;
	}

// Pulls the Pets Family from Blizzard
	function getPetSpecies($speciesID) {
		$species_request = file_get_contents("http://us.battle.net/api/wow/battlePet/species/$speciesID");
		$species = json_decode($species_request, true);
		return $species;		
	}






























?>