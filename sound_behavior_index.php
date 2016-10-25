<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Sound Stewardship</title>
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
	color = "orange";
</script>
</head>
<body id="id05" >
<div id="container">
	<?php include 'includes/header_test.html' ?>
	<?php include 'includes/sound_stewardship-title.html' ?>
	<?php include 'includes/sound_stewardship-tab.html' ?>
	<div id="accordioncontainer">
		<div id="accordion"> 
			
			<!--*********************************FOLD 01*********************************-->
			
			<h3><a href="#!">Importance to Puget Sound recovery</a></h3>
			<div>
				<p>Fostering beneficial behaviors and reducing detrimental ones is a crucial step in Puget Sound&rsquo;s recovery.</p>
			    <p>The Sound Behavior Index tracks 28 specific practices that can affect water quality and aquatic habitat. The index is based on a survey conducted every two years among a statistical sample of Puget Sound residents. It asks them about specific, measurable, repetitive behaviors that affect water quality and aquatic health.</p>
</div>
			
			<!--*********************************FOLD 05*********************************-->
			<h3><a href="#!">What our partners are doing</a></h3>
			<div>
				<p><a href="http://psp.wa.gov/gis/ReportCard/VitalSign/indexVSSoundStewardship.html">View Near Term Actions helping to advance this Vital Sign</a></p>
			</div>
			<!--*********************************FOLD 06*********************************-->
			<h3><a href="#!">Links for more information</a></h3>
			<div>
				<p> <a href="http://www.tandfonline.com/eprint/xrDeaxd9WeahADVu9MVm/full">The Sound Behavior Index paper published in the Coastal Management Journal </a></p>
				<p><a href="https://app.box.com/s/9b34t0ijy04unm8v27rd/1/513066328/7245484984/1">Sound Behavior Index 2012 Report</a></p>
				<p><a href="https://app.box.com/s/9b34t0ijy04unm8v27rd/1/513066328/21199345697/1">Sound Behavior Index 2013 Report</a></p>
				<p><a href="https://app.box.com/s/9b34t0ijy04unm8v27rd/1/513066328/7111635636/1">Background and methodology for the Sound Behavior Index</a></p>
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
