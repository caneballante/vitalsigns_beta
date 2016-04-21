<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Salmon</title>
<link href="css/vital2016.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/custom-theme/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="js/settab.js"></script>
<script>
$(function() {
		$( "#accordion" ).accordion( { collapsible: true }, { active: false }, { autoHeight: false });
	});
	
$(function() {
  $(".ui-accordion-header").click( function() {
	  console.log("i ran");
     _gaq.push(['_trackEvent', 'Accordion', 'ShowPage', $(this).attr('id')]);
  });
});	
</script>
<script>
/*this variable is used to set the proper nav to active. It should to the order the nav item is in the list*/
  	navSelected = 1;
	color = "pink";
</script>
<body id="id08" >
<div id="container">
	<?php include 'includes/header_test.html' ?>
	<?php include 'includes/salmon_title.html' ?>
	<?php include 'includes/salmon_tab.html' ?>
	<div id="accordioncontainer">
		<div id="accordion"> 
			
			<!--*********************************FOLD 01*********************************-->
			<h3><a href="#!">Importance to Puget Sound recovery</a></h3>
			<div>
				<p>Chinook salmon are a cultural icon of the Pacific Northwest. Truly the “King” of Pacific salmon, Chinook are the largest species. Adults can exceed 30 pounds, and reports of larger fish were once more common. </p>
				<p> Returning Chinook are highly prized by anglers and commercial fisherman and are a favorite food of orca whales. Puget Sound Chinook return in the summer and fall to spawn, build gravel nests, and lay their eggs in rivers and streams. Their carcasses provide nutrients for freshwater invertebrates which in turn provide food for young fish. As they grow, juvenile Chinook move from freshwater to estuaries and nearshore areas to find food and cover to hide from predators. They eventually move to more exposed shorelines where they depend on eelgrass and kelp beds as they continue their migration to the ocean. </p>
				<p>Puget Sound Chinook are about one-third as abundant as they were in the early 1900s and were listed in 1999 as “Threatened” under the federal Endangered Species Act. </p>
			</div>
			
			<!--*********************************FOLD 04*********************************-->
			<h3><a href="#!">What you can do</a></h3>
			<div>
				<h5>Coming Soon</h5>
			</div>
			<!--*********************************FOLD 05*********************************-->
			<h3><a href="#!">What our partners are doing</a></h3>
			<div>
				<p><a href="http://gismanager.rco.wa.gov/ntaportal/?VitalSign=Chinook+Salmon">View Near Term Actions helping to advance this Vital Sign</a></p>
			</div>
			<!--*********************************FOLD 06*********************************-->
			<h3><a href="#!">Links for more information</a></h3>
			<p><a href="http://www.results.wa.gov/whatWeDo/measureResults/environmentGoalMap.aspx#goalTab02" target="_blank">Results Washington Wild Chinook Salmon goal</a></p>
		</div>
	</div>
	<?php include 'includes/footer.html' ?>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-679161-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
