<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Land Cover</title>
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
<body id="id14" >
<div id="container">
	<?php include 'includes/header.html' ?>
	<!--*********************************TITLE BAR BEGIN*********************************-->
	<div id="roundcornerstop"><img src="img/rounded_top.jpg" width="960" height="20" /></div>
	<div id="vitalheadercontainer">
		<div id="vitalheaderleftcontainer">
			<div id="vitaltitle">Land Development and Cover</div>
			<div id="vitalquote">During the past 50 years, Puget Sound lost at least two-thirds of its remaining old growth forest, more than 90% of its native prairies, and 80 % of its  marshes.</div>
			<div id="vitalchampion"> Indicator Lead: Kenneth B. Pierce Jr., Washington State Department of Fish and Wildlife, Alex Mitchell, Puget Sound Partnership, and Kari Stiles, Puget Sound Institute. </div>
			<div id="vitalbuttonscontainer">
				<div id="button1"><a href="http://www.psp.wa.gov/pugetsoundprojectatlas" target="_blank">View Projects</a></div>
				<div id="button2"><a href="http://gismanager.rco.wa.gov/ntaportal?ActionAgenda=2014-2016&Quarter=10&Vital%20Sign=Land%20Development%20and%20Cover" target="_blank">View Report Card</a></div>
			</div>
		</div>
		<div id="vitalheaderrightphoto">
			<div class="underconstruction">This webpage is currently being updated. For the most recent findings for this Vital Sign, please consult the report in the latest <a href="https://pspwa.box.com/s/rhb2s6c2yzb2eskla1ssj2w84vcay7un">State of the Sound</a></div>
			<div class="photoCredit padding-top">Data last updated on July 8th 2015<br />
			Photo Credit: Puget Sound Partnership</div></div>
	</div>
	<div id="roundcornerbottom"><img src="img/rounded_rounded_bottom.jpg" width="960" height="20" /></div>
	<!--*********************************TITLE BAR END*********************************--> 
	
	<!--*********************************TAB BEGIN*********************************-->
	
	<ul id="nav_indicator">
		<li class="indicator_active_purp"><a href="land_cover_and_development.php">Vital Sign Overview<br />
			<br />
			<br />
			</a> </li>
		<li><a href="land_cover_and_development_indicator1.php">Indicator: Forest loss<br />
			<br />
			<br />
			</a></li>
		<li><a href="land_cover_and_development_indicator2.php">Indicator: Riparian vegetation restoration<br />
			<br />
			</a></li>
		<li><a href="land_cover_and_development_indicator3.php">Indicator: Conversion of ecologically important lands<br />
			</a></li>
		<li><a href="land_cover_and_development_indicator4.php">Indicator: Growth in Urban Growth Areas (UGAs)<br />
			</a></li>
	</ul>
	<div class="clearfloat"></div>
	
	<!--*********************************TAB END*********************************-->
	<div id="accordioncontainer">
		<div id="accordion"> 
			<!--*********************************FOLD 01*********************************-->
			<h3><a href="#!">Importance to Puget Sound recovery</a></h3>
			<div>
				<p>In the Puget Sound region, we have lost at least two-thirds of our remaining old growth forests, more than 90% of our native prairies, and 80% of our marshes in the past 150 years. </p>
				<p>The land surrounding Puget Sound is home to 4 million people who live, work, and play in our region. The need for homes,	businesses, roads, and agriculture must be balanced with ecosystem protection. Forest and riparian areas provide important habitat for many species and reduce the rate of polluted runoff flowing into Puget Sound. </p>
				<p>Land development and cover indicators measure how well we are directing our region’s ongoing growth to protect our best
					remaining natural areas and working forests.</p>
			</div>
			
			<!--*********************************FOLD 04*********************************-->
			
			<h3><a href="#!">What you can do</a></h3>
			<div>
				<ul>
					<li>Support conservation easements</li>
					<li>Adhere to municipal growth and land development ordinances</li>
					<li>Consider low impact development techniques on your own property </li>
					<li>When possible use pervious surfaces</li>
					<li>Support restoration projects by volunteering, or consider donating</li>
					<li>Consider participating in the <a href="http://scc.wa.gov/crep/" target="new">Conservation Reserve Enhancement Program (CREP)</a>, a voluntary program that pays landowners to establish buffers of native trees and shrubs along fish bearing streams and rivers</li>
				</ul>
			</div>
			
			<!--*********************************FOLD 05*********************************-->
			<h3><a href="#!">What our partners are doing</a></h3>
			<div>
				<p><a href="http://gismanager.rco.wa.gov/ntaportal/?VitalSign=Land+Development+and+Cover" target="new">View Near Term Actions helping to advance this Vital Sign</a></p>
			</div>
			<!--*********************************FOLD 06*********************************-->
			<h3><a href="#!">Links for more information</a></h3>
			<div>
				<p><a href="https://app.box.com/s/dnfojd0o8ihxhh3abvtbxw9kr5ey282e" target="new">Technical memorandum on setting targets for Land Cover and Land Development</a></p>
				<p> <a href="http://wdfw.wa.gov/conservation/research/projects/aerial_imagery/index.html" target="new">Coastal Change Analysis Program</a></p>
				<p><a href="http://wdfw.wa.gov/conservation/research/projects/aerial_imagery/index.html" target="new">Washington Department of Fish and Wildlife Land Cover Change Analysis - High-Resolution</a></p>
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