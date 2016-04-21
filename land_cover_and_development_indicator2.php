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
				<p>This indicator is the restoration of riparian vegetation.</p>
				<p>Land development has significantly degraded riparian vegetation corridors along Puget Sound rivers and streams. Intact riparian corridors are critical for keeping fresh and marine waters clean and cool, moderating variability in water volume and timing of flow (flood storage), and offering key habitat for myriad terrestrial, freshwater, and interface species, such as salmon. </p>
				<p>The intent of the riparian vegetation restoration indicator is to measure the amount of new vegetated cover delivered by restoration projects along riparian corridors. Habitat restoration projects are compiled by the Puget Sound Partnership on behalf of the U.S. Environmental Protection Agency. </p>
				<p>The amount of riparian corridor restored to vegetated cover is measured through collection of acreage or linear riparian shoreline restoration reported for Puget Sound restoration projects. Riparian restoration efforts are being measured instead of riparian condition due to the difficulty in assessing riparian condition Sound-wide and the length of time necessary to call a specific location successfully restored.</p>
				<p>Although tracking total riparian condition is a much more difficult task than tracking regional forest cover, the initiation and completion of restoration activities are feasible measures. Successful restoration could take many years and measuring its success will require ongoing monitoring. </p>
					<p>Puget Sound Partnership staff analyzed data for federal fiscal years 2010 to 2014, primarily from the Washington State Recreation and Conservation Office’s PRISM database and reports of Natural Resource Conservation Service (NRCS) habitat programs.</p>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">What are the targets? </div>
				<h5>2020 target </h5>
				<p>Restore 268 miles of riparian vegetation or have an equivalent extent of restoration projects under way.</p>
				<h5>Interim Target</h5>
				<p>There currently are no interim targets for this Vital Sign.</p>
			</div>
			<!--*********************************FOLD*********************************-->
			<h3><a href="#!">Progress summary and data</a></h3>
			<div> 
			<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Is the indicator making progress toward the 2020 target? </div>
				<p>Yes, this indicator has made gains relative to the baseline reference.</p>
				<p>Because the cumulative amount of restoration of vegetation along riparian corridors increases incrementally every year, progress of the indicator is categorized as getting better.</p>
				<ul>
					<li>Cumulatively, activities to restore vegetation in riparian areas occurred along an estimated 135 linear miles of streams and rivers during that time period.</li>
					<li>This estimate is about half of the 2020 target of 268 miles.</li>
				</ul>
				<p>Data indicate that activities to restore vegetation in riparian corridors, such as planting native species, were reported as completed for 67 projects in the Puget Sound basin from Federal Fiscal Years 2009 to 2014 (Oct. 1, 2008, through Sept. 30, 2014). The footprint of those activities was reported only for 48 of those projects. No projects were reported in 2009.</p>
				<div class="purpBarHeader">Latest data</div>
				<p><img src="images/riparian.jpg" width="850" height="560" alt=""/></p>
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