<article class="form">

	<h2>I Want To Fight A</h2>
    <form>
 		<?php for ($i = 0; $i < count($families['petTypes']); $i++)  {  ?>   
        	<input name="goodAgainst" type="checkbox" value="<?php echo $families['petTypes'][$i]['name']; ?>"><?php echo $families['petTypes'][$families['petTypes'][$i]['strongAgainstId']]['name']; ?></input>
		<?php } ?>
        <input name="reset" type="button" value="Reset">
    
    </form>

<hr />
</article>
