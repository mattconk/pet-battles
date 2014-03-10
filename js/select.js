// JavaScript Document
/*
	Humanoid
	Dragonkin
	Flying
	Undead
	Critter
	Magical
	Elemental
	Beast
	Aquatic
	Mechanical
*/


function clearAllHide() {
	$(".Humanoid").removeClass("hide"); 
	$(".Dragonkin").removeClass("hide");
	$(".Flying").removeClass("hide");
	$(".Undead").removeClass("hide");
	$(".Critter").removeClass("hide");
	$(".Magical").removeClass("hide"); 
	$(".Elemental").removeClass("hide");
	$(".Beast").removeClass("hide");
	$(".Aquatic").removeClass("hide");
	$(".Mechanical").removeClass("hide");
	$(".noncombat").removeClass("hide");

}

function addHideClass() {
	if ( 	$("input[value=Humanoid]").is(":checked") ||
			$("input[value=Dragonkin]").is(":checked") ||
			$("input[value=Flying]").is(":checked") ||
			$("input[value=Undead]").is(":checked") ||
			$("input[value=Critter]").is(":checked")  ||
			$("input[value=Magic]").is(":checked") ||
			$("input[value=Elemental]").is(":checked") ||
			$("input[value=Beast]").is(":checked") ||
			$("input[value=Aquatic]").is(":checked") ||
			$("input[value=Mechanical]").is(":checked") )
			{
		$("input[value=Humanoid]").is(":checked") ? $(".Humanoid").removeClass("hide") : $(".Humanoid").addClass("hide");
		$("input[value=Dragonkin]").is(":checked") ? $(".Dragonkin").removeClass("hide") : $(".Dragonkin").addClass("hide");
		$("input[value=Flying]").is(":checked") ? $(".Flying").removeClass("hide") : $(".Flying").addClass("hide");
		$("input[value=Undead]").is(":checked") ? $(".Undead").removeClass("hide") : $(".Undead").addClass("hide");
		$("input[value=Critter]").is(":checked") ? $(".Critter").removeClass("hide") : $(".Critter").addClass("hide");
		$("input[value=Magic]").is(":checked") ? $(".Magic").removeClass("hide") : $(".Magic").addClass("hide");
		$("input[value=Elemental]").is(":checked") ? $(".Elemental").removeClass("hide") : $(".Elemental").addClass("hide");
		$("input[value=Beast]").is(":checked") ? $(".Beast").removeClass("hide") : $(".Beast").addClass("hide");
		$("input[value=Aquatic]").is(":checked") ? $(".Aquatic").removeClass("hide") : $(".Aquatic").addClass("hide");
		$("input[value=Mechanical]").is(":checked") ? $(".Mechanical").removeClass("hide") : $(".Mechanical").addClass("hide");
		$(".noncombat").addClass("hide")
	} else {
		clearAllHide();
	}
}



$("input[name=family]").click(function(){
	$("input[name=goodAgainst]").removeAttr('checked');
	clearAllHide();
	addHideClass();
});

$("input[name=goodAgainst]").click(function(){
	$("input[name=family]").removeAttr('checked');
	clearAllHide();
	addHideClass();
});

$("input[name=reset]").click(function(){
	$("input[name=family]").removeAttr('checked');
	$("input[name=goodAgainst]").removeAttr('checked');
	clearAllHide();
});

$("#realm").chained("#region");




