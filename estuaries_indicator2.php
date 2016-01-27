<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Estuaries</title>
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
</head>
<body id="id16" >
<div id="container">
	<?php include 'includes/header.html' ?>
	<!--*********************************TITLE BAR BEGIN*********************************-->
	<div id="roundcornerstop"><img src="img/rounded_top.jpg" width="960" height="20" /></div>
	<div id="vitalheadercontainer">
		<div id="vitalheaderleftcontainer">
			<div id="vitaltitle">Restoration of Puget Sound Estuaries</div>
			<div id="vitalquote">Over three-quarters of the tidal wetlands in Puget Sound river deltas have been lost to agricultural and industrial developments.</div>
			<div id="vitalchampion">Indicator Lead: Paul Cereghino, National Oceanic and Atmospheric Administration (NOAA), Restoration Center</div>
			<div id="vitalbuttonscontainer">
				<div id="button1"><a href="http://www.psp.wa.gov/pugetsoundprojectatlas">View Projects</a></div>
				<div id="button2"><a href="http://gismanager.rco.wa.gov/ntaportal?ActionAgenda=2014-2016&Quarter=10&Vital%20Sign=Estuaries">View Report Card</a></div>
			</div>
		</div>
		<div id="vitalheaderrightphoto">
			<div class="underconstruction">This webpage is currently being updated. For the most recent findings for this Vital Sign, please consult the report in the latest <a href="https://pspwa.box.com/s/rhb2s6c2yzb2eskla1ssj2w84vcay7un">State of the Sound</a></div>
			<div class="photoCredit padding-top">Data last updated on March 24, 2015<br />
			Photo Credit: Russ McMillian</div></div>
	</div>
	<div id="roundcornerbottom"><img src="img/rounded_rounded_bottom.jpg" width="960" height="20" /></div>
	<!--*********************************TAB BEGIN*********************************-->
	
	<ul id="nav_indicator">
		<li><a href="estuaries.php">Vital Sign: Overview<br />
			<br />
			<br />
			</a></li>
		<li><a href="estuaries_indicator1.php">Indicator: Estuarine wetlands restored<br />
			<br />
			</a></li>
		<li class="indicator_active_purp"><a href="estuaries_indicator2.php">Indicator: Chinook salmon rivers meeting recovery goals <br />
			</a></li>
	</ul>
	<div class="clearfloat"></div>
	<!--*********************************TAB END*********************************--> 
	<!--*********************************TITLE BAR END*********************************-->
	<div id="accordioncontainer">
		<div id="accordion"> 
			
			<!--*********************************FOLD 02*********************************-->
			
			<h3><a href="#!">Indicator and target description</a></h3>
			<div> 
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">What is the indicator? </div>
				<p>The number of Chinook salmon natal river deltas where 10-year salmon recovery goals have been met.</p>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">What is the target? </div>
				<h5>2020 target</h5>
				<ul>
					<li>By 2020, all Chinook natal river deltas meet 10-year salmon recovery goals (or 10% of restoration need as proxy for river deltas lacking quantitative acreage goals in salmon recovery plans).</li>
				</ul>
				<h5>Interim targets</h5>
				<p><a href="http://www.psp.wa.gov/downloads/interimtargets/Estuaries Interim Targets - FINAL.pdf">Link to interim targets (PDF)</a></p>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Is there progress? </div>
				<p>No data are available yet to assess progress.</p>
				<p>The Puget Sound Partnership and Recovery Implementation Technical Team, in collaboration with watershed groups, have begun the process of developing monitoring and adaptive management frameworks for watershed chapters in the Puget Sound Salmon Recovery Plan. This process will include defining and quantifying restoration goals. Development of goals will ultimately refine how the Partnership reports progress toward implementation of the recovery plan.</p>
				<p>Some watersheds have already taken steps to quantify restoration goals. For instance, the Skagit and Snohomish deltas have tidal wetland restoration goals tied to estimated fish rearing capacity.</p>
				<p>To track this target for all watersheds, 2015 goals for Chinook natal river estuary wetland restoration must be enumerated in a way that can be reported at a regional level. For Chinook natal rivers lacking 10-year quantified goals, proxies of need must be translated into named restoration</p>
			</div>
			<!--*********************************FOLD 03*********************************-->
			
			<h3><a href="#!">Latest data and maps</a></h3>
			<div> 
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Data</div>
				<p>No data are available yet to track this indicator</p>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Maps</div>
				<img src="images/Chinook_rivers.jpg" width="612" height="749" alt="Chinook salmon river deltas in Puget Sound" /> </div>
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