<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Land Cover</title>
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
  	navSelected = 3;
	color = "purp";
</script>
</head>
<body id="id14" >
<div id="container">
	<?php include 'includes/header_test.html' ?>
	<?php include 'includes/land_cover_title.html' ?>
	<?php include 'includes/land_cover_tab.html' ?>
	
	<div id="accordioncontainer">
		<div id="accordion"> 
	
			
			<!--*********************************FOLD 02*********************************-->
			<h3><a href="#!">Indicator and target description</a></h3>
			<div> 
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">What is the indicator? </div>
				<p>The riparian vegetation restoration indicator measures the amount of new vegetated cover delivered by restoration projects along riparian corridors. These corridors are a critical component of the Puget Sound ecosystem and the indicator evaluates the effect of direct efforts to improve them. Intact, vegetated riparian corridors are critical for: </p>
				<ol>
					<li>keeping fresh and marine waters clean and cool, </li>
					<li> moderating variability in water volume and timing of flow (i.e. flood storage), and </li>
					<li>as key habitat for myriad terrestrial, freshwater and interface (e.g. salmon) species.</li>
				</ol>
				<p>The amount of riparian corridor restored to vegetated cover will be measured through collection of acreage or linear riparian shoreline restoration reported for Puget Sound restoration projects. Riparian restoration efforts are being measured instead of riparian condition due to the difficulty in assessing riparian condition Soundwide and the length of time necessary to call a specific location successfully restored. Although tracking total riparian condition is a much more difficult task than tracking regional forest cover, the initiation and completion of restoration activities are feasible measures. Successful restoration could take many years and measuring its success will require ongoing monitoring. Recent restoration efforts in the Puget Sound Basin have included 19 projects completed from October 2009 to September 2012 to restore riparian vegetation. These projects involved planting and other actions beyond treatment to remove invasive species. A project length was reported for 13 of the projects.</p>
				<h4 class="purp">&nbsp;</h4>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">What is the target? </div>
				<p>Restore 268 miles of riparian vegetation or have an equivalent extent of restoration projects under way.</p>
				<h4 class="purp">&nbsp;</h4>
				<h5>Interim Target</h5>
				<p>There currently are no interim targets for this Vital Sign.</p>
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Is there progress? </div>
				<p>Some progress has been made toward the 2020 target. Habitat data collected by the Puget Sound Partnership on behalf of the Environmental Protection Agency indicate that 19 riparian restoration projects were conducted in the Puget Sound basin from October 2009 through September 2012. However, miles of restored riparian corridors were reported only for 13 projects. In total, at least 76 miles were restored during that time period, or 28% progress toward the 2020 target of 268 miles. It should be noted that riparian corridor restoration prior to October 2009, the baseline reference year, was not counted toward the target.</p>
				<h4 class="purp"><!--*********************************FOLD 03*********************************--> </h4>
			</div>
			<h3><a href="#!">Progress summary and data</a></h3>
			<div> 
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Data</div>
				<p> The sum of the lengths reported for the 13 projects between October 2009 and September 2012 is about 76 miles, which is 28% of the 2020 target. If the median project length were applied to the six projects with no length estimate provided, we would estimate that the total mileage restored in this three-year period at 86 miles, which is 32% of the 2020 target. </p>
				<h5>Data source</h5>
				<p> Puget Sound Partnership staff analyzed data for federal fiscal years 2010, 2011 and 2012 primarily from the Washington State Recreation and Conservation Office’s PRISM database and reports of Natural Resource Conservation Service (NRCS) habitat programs.</p>
				<h4 class="purp">&nbsp;</h4>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Maps </div>
				<p> No map </p>
				<h4 class="purp">&nbsp;</h4>
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