<?php
	include('includes/includes.php');
	$realms = listRealm();


	if (isset($_POST['action'])) { //Determins if the action is Set, assigns to a variable if it is set, otherwise assigns 'list_categories'
		$action = $_POST['action'];
	} else if (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = 'blankForm';
	}

	if ($action == 'blankForm') { // Provides the Blank Form for users to Choose Realm and Character
		include('includes/header.php');
	} else if ($action == 'allPets') { // Displays all of the Users Pets
		$region = $_GET['region'];
		$realm = $_GET['realm'];
		$name = $_GET['name'];
		$myPets = get_pets($region, $realm, $name);
		include('includes/header2.php');
		include('includes/rightside.php');   
		include('allPets.php');
		include('includes/footer.php');
	} 



?>

<?php
/*	include('includes/footer.php');*/
?>