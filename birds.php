<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Birds</title>
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
<body id="id11">
<div id="container">
	<?php include 'includes/header.html' ?>
	<!--*********************************TITLE BAR BEGIN*********************************-->
	<div id="roundcornerstop"><img src="img/rounded_top.jpg" width="960" height="20" /></div>
	<div id="vitalheadercontainer">
		<div id="vitalheaderleftcontainer">
			<div id="vitaltitle">Birds</div>
			<div id="vitalquote"></div>
			<div id="vitalchampion"> Indicator Lead: Scott Pearson,
				Washington State Department of Fish and Wildlife </div>
			<div id="vitalbuttonscontainer">
				<div id="button1"><a href="http://www.psp.wa.gov/pugetsoundprojectatlas" target="_blank">View Projects</a></div>
				<div id="button2"></div>
				<div id="button3"><a href="../downloads/VS2013/birds.pdf">Download PDF from the latest State of the Sound report</a></div>
			</div>
		</div>
		<div id="vitalheaderrightphoto">
			<div class="underconstruction">This webpage is currently being updated. For the most recent findings for this Vital Sign, please consult the report in the latest <a href="https://pspwa.box.com/s/rhb2s6c2yzb2eskla1ssj2w84vcay7un">State of the Sound</a></div>
			<div class="photoCredit padding-top">Data last updated on May 6, 2014<br />
			Photo Credit: USFWS</div></div>
	</div>
	<div id="roundcornerbottom"><img src="img/rounded_rounded_bottom.jpg" width="960" height="20" /></div>
	<!--*********************************TITLE BAR END*********************************--> 
	<!--*********************************TAB BEGIN*********************************-->
	
	<ul id="nav_indicator">
		<li class="indicator_active_pink" ><a href="birds.php">Vital Sign Overview<br />
			<br />
			<br />
			</a> </li>
		<li><a href="birds_indicator1.php">Indicator: Biomass of spawning Pacific Herring<br />
			</a></li>
	</ul>
	<div class="clearfloat"></div>
	<!--*********************************TAB END*********************************-->
	
	<div id="accordioncontainer">
		<div id="accordion"> 
			<!--*********************************FOLD 01*********************************-->
			<h3><a href="#!">Importance to Puget Sound recovery</a></h3>
			<div>
				<p>A large community of aquatic and terrestrial bird species depend on Puget Sound’s watershed for survival. Walk along the shores of Boundary Bay in any season, and you’ll see an ever-changing cast of birds. Thousands of seabirds, seaducks, and waterfowl migrate from all directions to converge in the relatively calm and food-rich waters of Puget Sound each winter. In summer, colonies of seabirds are busy attending their young. In spring and fall, the shorelines are full of shorebirds that stop to feed and rest during migration. </p>
				<p>Birds serve as useful indicators of ecosystem change and ecosystem health. The Partnership is currently working with the Washington Department of Fish &amp; Wildlife, U.S. Geological Survey, and the Puget Sound Ecosystem Monitoring Program’s Birds and Mammals workgroup to develop a meaningful marine and terrestrial bird indicator and potential targets to help achieve its recovery goal of healthy and sustaining populations of native species. Upon completion later this year, the Science Panel and Leadership Council will review the recommendations and make final decisions on the indicators and targets. </p>
			</div>
			
			<!--*********************************FOLD 04*********************************-->
			<h3><a href="#!">What you can do</a></h3>
			<div>
				<h5>Coming soon</h5>
			</div>
			<!--*********************************FOLD 05*********************************-->
			<h3><a href="#!">What our partners are doing</a></h3>
			<div>
				<p><a href="http://gismanager.rco.wa.gov/ntaportal/?VitalSign=Birds">View Near Term Actions helping to advance this Vital Sign</a></p>
			</div>
			<!--*********************************FOLD 06*********************************-->
			<h3><a href="#!">Links for more information</a></h3>
			<div>
				<p>Wa Dept of Fish and Wildlife:&nbsp; Seabird Eco: Flilogy<br />
					<a href="http://wdfw.wa.gov/conservation/research/projects/seabird/">http://wdfw.wa.gov/conservation/research/projects/seabird/</a></p>
				<p>Wa Dept of Fish and Wildlife: Marine Bird Density Atlas<br />
					<a href="http://wdfw.wa.gov/mapping/psamp/index.html">http://wdfw.wa.gov/mapping/psamp/index.html</a> </p>
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
