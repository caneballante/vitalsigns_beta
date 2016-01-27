$(document).ready(function(){
		$(".showMoreLink").click(function(){
			var whoClicked = $(this).attr("data-attr");
			$('#morePara'+whoClicked).show();
			$('#showMore'+whoClicked).hide();	
			$('#showLess'+whoClicked).show();	
			console.log(whoClicked)
		});		

});
$(document).ready(function(){
		$(".showLessLink").click(function(){
			var whoClicked = $(this).attr("data-attr");
			$('#morePara'+whoClicked).hide();
			$('#showMore'+whoClicked).show();	
			$('#showLess'+whoClicked).hide();		
			console.log(whoClicked)	
		});		
    
});

// JQuery to set the appropriate left nav item to "active". navSelected is set in the html head and matches the order with that page appears in the nav	
$( document ).ready(function() {
	$("#nav"+navSelected).addClass("indicator_active_"+color);
});
	