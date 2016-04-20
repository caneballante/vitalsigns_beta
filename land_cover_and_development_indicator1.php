﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
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
  	navSelected = 2;
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
				<p>This indicator is forest loss, measured by the number of acres of non-federal forest land cover converted to development. Changes in forest cover are measured using National Oceanic and Atmospheric Administration (NOAA) Coastal Change analysis of Landsat satellite imagery with a 30-meter resolution.</p>
				<p>The forest loss indicator provides a check on the region’s success in maintaining forest cover throughout the Puget Sound Basin. More specifically, this indicator tracks the conversion of forested cover, including coniferous, deciduous, and mixed forest classes, to developed land cover by using four classes of development intensity, based on Landsat satellite imagery with a 30m resolution.</p>
				<p>Forests are important for the health of Puget Sound watersheds because forested landscapes provide habitat that support terrestrial species, deliver watershed functions that support freshwater systems, and provide ecological and cultural services for humans. </p>
				<p>Forest cover conversion in the Puget Sound Basin has been consistently measured every four to five years since 1992; the most recent results are for the period 2006-2011. Results are reported as an annual average loss, in acres, for a five-year period.</p>
				<p>While the forest loss indicator provides a good measure of forest cover change across all Puget Sound watersheds, it underestimates forest conversion, particularly in urbanizing areas that exhibit complex mixes of land cover. Additionally, urban in-fill, or the continuing conversion of small forested parcels, often occurs at sizes too small to be captured reliably by the 30-meter NOAA satellite data used for this indicator. Work at the Washington Department of Fish and Wildlife is underway to develop a <a href="http://wdfw.wa.gov/conservation/research/projects/aerial_imagery/index.html">more sensitive land cover change analysis based on high-resolution photography</a>. </p>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">What are the targets? </div>
				<h5>2020 target </h5>
				<p>The average annual loss of forested land cover to developed land cover in non-federal lands does not exceed 1,000 acres per year, as measured with Landsat-based change detection.</p>
				<h4 class="purp">&nbsp;</h4>
				<h5>Interim Target</h5>
				<p>There currently are no interim targets for this Vital Sign.</p>
				
				<!--*********************************FOLD 03*********************************--> 
			</div>
			<h3><a href="#!">Progress summary and data</a></h3>
			<div> 
				
				<!--*********************************PURPLE HEADER*********************************-->
				
				<div class="purpBarHeader">Is the indicator making progress toward the 2020 target? </div>
				<p><span><img src="images/status_getting_better.png" width="120" height="123" alt=""/></span>Yes, this indicator has made gains relative to the baseline reference.</p>
				<p>The status of this indicator is improving relative to the baseline reference, and is making progress toward the 2020 target.</p>
				<ul>
					<li>Non-federal forestlands were lost to development at a rate of 2,176 acres per year for the period 2001 – 2006, the baseline reference year. </li>
					<li>Between 2006 and 2011, the most recent period with available data, the rate of forest loss decreased by almost half to 1,196 acres per year. The target value of 1000 acres per year was nearly reached during the 2006-2011 period. </li>
				</ul>
				
				<!--*********************************PURPLE HEADER*********************************-->
				<div class="purpBarHeader">Latest data</div>
				<p><img src="images/landcover_forestloss.jpg" width="700" height="461" alt=""/></p>
				<p>The 2020 target value reflects a trade-off between the need to safeguard habitat and ecosystem function while allowing growth and development. In Puget Sound, the amount of forests is declining, but the rate of that loss has slowed. Although the specific drivers of the decrease in forest conversion to development are not well understood, we suspect it may be tied to the economic downturn and the corresponding decrease in new development. As the economy recovers, forest loss may rise. Thus, achieving and maintaining a rate of forest loss of 1,000 acres per year may be an ambitious goal. More work is needed to understand what factors, including salmon recovery efforts, land use policies, and economic growth, best explain forest conversion.</p>
				<p>Between 1991 and 2011, a cumulative total of 62,080 acres of non-federal forestland was converted to developed lands. The rate of forest loss declined fairly constantly over this 20 year period. It went from a high of 5,376 acres per year between 1991 and 1996, to a low of 1,196 between 2006 and 2011. </p>
				<p>The data used to report on this Vital Sign target were based on land-cover change information for lands not in federal ownership as determined by the Landsat satellite imaging system. Due to image element limitations, this approach does not capture relatively small land use changes, such as clearing for single homes or lot expansion. Therefore, only larger events (more than two acres) are reliably captured in these values. </p>
				<p>Current work is underway to develop a more sensitive land cover change analysis using photos that have a higher resolution (1 meter) than the current analysis (30 meter). With these high-resolution photos, we are able to identify smaller changes and tease apart the changes occurring in areas with a complex mix of land covers. <a href="http://wdfw.wa.gov/conservation/research/projects/aerial_imagery/index.html">The WDFW for this project is here</a></p>
				<h5>Why is it happening? </h5>
				<p> Since 1991, the rate of forest loss has been declining fairly constantly. In Puget Sound, the amount of forest is declining, but the rate of that loss has slowed. Although the specific drivers of the decrease in forest conversion to development are not well understood, they may be tied to the economic downturn and the corresponding decrease in new development. At the same time, there are concrete efforts to manage urban growth at local and state levels. More work is needed to understand what factors, including salmon recovery efforts, land use policies, and economic growth, best explain forest conversion. </p>
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