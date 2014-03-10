
<article class="form">
	
	<form  id="piedata" action="index.php" method="get">

    <h2>Please Choose your Region, Realm, and Character</h2>
    

    <input type="hidden" name="action"  value="allPets">
	
    <label >Region</label>
    <select id="region" name="region" class="formBoxSizeRegion" required>
        <option value="">---</option>
        <option value="us">US</option>
        <option value="eu">Europe</option>
    </select>
    
    <label >Realm</label>
    <select id="realm" name="realm" class="formBoxSizeRealm">
	
        <option value="">---</option>
		<?php foreach ($realms as $showRealms) : ?>
        <option  value="<?php echo $showRealms['realm_slug']; ?>" class="<?php echo ($showRealms['realm_region'] == 2) ? "us" : "eu" ; ?>"><?php echo $showRealms['realm_name'];?></option>
		<?php endforeach; ?>    
     </select>
    
    <label>Character Name</label>
	<input name="name" type="text" class="formBoxSizeText" required>
    
	<button name="find" class="button" type="submit">Find</button>

    </form>
<hr />
</article>
