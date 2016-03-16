<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Orcas</title>
<link href="css/vital1.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/custom-theme/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="js/divhide.js"></script>
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
</head>
<body id="id09" >
<div id="container">
	<?php include 'includes/header.html' ?>
	<?php include 'includes/orca_title.html' ?>
	<?php include 'includes/orca_tab.html' ?>
	
	<div id="accordioncontainer">
		<div id="accordion"> 
			
			<!--*********************************FOLD 01*********************************-->
			<h3><a href="#!">Importance to Puget Sound recovery</a></h3>
			<div>
				<p>Killer whales, also called orcas, are among Puget Sound’s most distinctive and charismatic inhabitants. They occupy an important niche at the top of the food web and support a multi-million dollar whale-watching industry. </p>
				<p>A unique population of orcas lives in and around the Salish Sea, which includes Puget Sound, the Strait of Juan de Fuca, and the Strait of Georgia. Called the Southern Resident Killer Whales, the community once numbered around 200 whales. In the past decade, the population totaled fewer than 90 individuals.</p>
				<p>While other orca populations prey heavily on marine mammals, resident pods primarily eat fish, relying on Chinook salmon for a large part of their diet. </p>
				<p>In the late-1990s, Southern Resident Killer Whales experienced a dramatic decline in population size. As a consequence, they were listed as Endangered under the Endangered Species Act in 2006. </p>
			</div>
			
			<!--*********************************FOLD 04*********************************-->
			
			<h3><a href="#!">What you can do</a></h3>
			<div>
				<ol>
					<li>Observe the <a href="http://www.bewhalewise.org">appropriate distances</a> and do not intentionally disturb orcas when boating or participating in other recreational activities.</li>
					<li>Familiarize yourself, family and friends with individual Puget Sound orcas, and follow their travels on the <a href="http://www.orcanetwork.org/sightings/map.html">Orca Network</a>.</li>
					<li>Look for orcas from land with help from the <a href="http://thewhaletrail.org/">Whale Trail</a>, and listen to them at the <a href="http://orcasound.net">Salish Sea Hydrophone Network</a>.</li>
					<li>Engage in citizen science by alerting researchers at the <a href="http://www.orcanetwork.org/sightings/map.html">Orca Network</a> or the <a href="http://orcasound.net">Salish Sea Hydrophone Network</a> when you spot orcas, so scientists can track their  travel.</li>
					<li>Take a day out to go on a responsibly managed whale-watching trip.</li>
					<li>Support salmon recovery in Puget Sound – orcas especially like to feed on <a href="salmon.php">Chinook salmon</a>.</li>
				</ol>
				<h6>Links for more information on what you can do</h6>
				<ul>
					<li><a href="http://www.seattleaquarium.org/page.aspx?pid=277 ">Seattle Aquarium </a></li>
				</ul>
			</div>
			<!--*********************************FOLD 05*********************************-->
			<h3><a href="#!">What our partners are doing</a></h3>
			<div>
				<p><a href="http://gismanager.rco.wa.gov/ntaportal/?VitalSign=Orcas">View Near Term Actions helping to advance this Vital Sign</a></p>
			</div>
			<!--*********************************FOLD 06*********************************-->
			<h3><a href="#!">Links for more information</a></h3>
			<div>
				<p> <a href="http://www.whaleresearch.com/">Center for Whale Research</a><br />
					<a href="http://www.nwr.noaa.gov/Marine-Mammals/Whales-Dolphins-Porpoise/Killer-Whales/Index.cfm">National Oceanic and Atmospheric Administration</a> <a href="http://www.nwfsc.noaa.gov/research/divisions/cbd/marine_mammal/marinemammal.cfm">Northwest Fisheries Science Center</a><br />
					<a href="http://www.pugetsoundnearshore.org/technical_papers/orcas.pdf">Orcas in Puget Sound:  Puget Sound Nearshore Partnership Tech Report 2007-01</a><br />
					<a href="http://www.nwr.noaa.gov/Marine-Mammals/Whales-Dolphins-Porpoise/Killer-Whales/Index.cfm">National Oceanic and Atmospheric Administration Fisheries Northwest Region</a><br />
					<a href="http://www.results.wa.gov/whatWeDo/measureResults/environmentGoalMap.aspx#goalTab02" target="_blank">Results Washington Orcas goal</a><br />
					<a href="http://media.wix.com/ugd/760f65_53514335778640b1be040a99378d2e47.pdf">J32 preliminary necropsy report</a><br />
					<a href="http://www.pac.dfo-mpo.gc.ca/fm-gp/species-especes/mammals-mammiferes/srkw-eprs-j32-eng.html" target="_blank">J-32 necropsy results from Fisheries and Oceans Canada</a><br />
					<a href="http://www.nwfsc.noaa.gov/research/divisions/cb/ecosystem/marinemammal/satellite_tagging/index.cfm">Satellite tagging project</a> </p>
			</div>
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