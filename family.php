<article class="form">
<?php
	
	$families = get_petsTypes();
?>


	<h2>By Family</h2>

    <form>
 		<?php for ($i = 0; $i < count($families['petTypes']); $i++)  {  ?>   
        	<input name="family" type="checkbox" value="<?php echo $families['petTypes'][$i]['name']; ?>"><?php echo $families['petTypes'][$i]['name']; ?></input>
		<?php } ?>
        <input name="reset" type="button" value="Reset">
    
    </form>

<hr />
</article>
