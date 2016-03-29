<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Birds</title>
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
	color = "pink";
</script>
</head>
<body id="id11">
<div id="container">
	<?php include 'includes/header.html' ?>
	<?php include 'includes/birds_title.html' ?>
	<?php include 'includes/birds_tab.html' ?>
	<div id="accordioncontainer">
		<div id="accordion"> 
			
			<!--*********************************FOLD 02*********************************-->
			<h3><a href="#!">Indicator and target description</a></h3>
			<div> 
				<!--*********************************PINK HEADER*********************************-->
				<div class="pinkBarHeader">What is the indicator? </div>
				<p>This indicator is the abundance of marine bird populations.</p>
				
				<!--*********************************PINK HEADER*********************************-->
				<div class="pinkBarHeader">What are the indicators?</div>
				<p>The marine bird population indicator serves as measures of population abundance of marine species.</p>
				<p>Marine bird indicators:</p>
				<ol>
					<li>Spring/summer at-sea densities of rhinoceros auklet, pigeon guillemot and marbled murrelet. These species are highly dependent on the marine environment of, and breed in, Puget Sound and Strait of Juan de Fuca. </li>
					<li>At-sea abundance trends of scoter species that overwinter in Puget Sound and Strait of Juan de Fuca. These species are highly dependent on the marine environment of Puget Sound and the Strait of Juan de Fuca, but do not breed there. </li>
				</ol>
				<p>The indicator was chosen because it serves as measures of the size of marine populations that reside most, if not all, of the year in Puget Sound. In addition, the indicator provides an integrative view of the health of Puget Sound, in contrast to being indicators of something specific like habitat, contaminants, or prey. </p>
				<p>The Washington State Department of Fish and Wildlife, the USGS Patuxent Wildlife Research Center and the Puget Sound Partnership are collaborating to compile and analyze existing data. Initial results are expected in 2014.</p>
				<p>The marine bird indicator for the Bird Vital Sign was officially endorsed by the Science Panel at their April 9, 2014 meeting. The endorsement was based on a peer-reviewed report written jointly by the Washington State Department of Fish and Wildlife and the Puget Sound Partnership. The report, titled “<a href="http://www.psp.wa.gov/vitalsigns/documents/Pearson and Hamel Bird Indicators 2013_Final.pdf">Marine and Terrestrial Bird Indicators for Puget Sound</a>,” develops, presents, and uses a transparent process to identify and evaluate potential indicators and ultimately recommend marine bird indicators.</p>
				<p>The peer-review process was coordinated by the Puget Sound Partnership Science Panel in 2013. The report was finalized in April of 2014. The indicators were also endorsed by the Leadership Council in January 2014. Supplemental material to the report is linked here (<a href="http://www.psp.wa.gov/vitalsigns/documents/Bird Indicator Supplementary material S1_2JAN13.xlsx">Bird Indicator Supplementary material S1_2JAN13.xlsx</a>).</p>
				<a href="documents/Pearson and Hamel Bird Indicators 2013_Final.pdf" target="_blank"> <a href="documents/Bird Indicator Supplementary material S1_2JAN13.xlsx" target="_blank"> </a> 
				<!--*********************************PINK HEADER*********************************-->
				<div class="pinkBarHeader">What are the targets?</div>
				<p>Is the indicator making progress toward the 2020 target?</p>
				<h5>&nbsp;</h5>
				<p>There are no targets for this Vital Sign</p>
				<h5>Interim targets</h5>
				<p>There currently are no interim targets for this Vital Sign.</p>
			</div>
			
			<!--*********************************FOLD 03*********************************-->
			<h3><a href="#!">Progress summary and data</a></h3>
			<div>
				<h5>Is the indicator making progress toward the 2020 target?</h5>
				<p> The results for this indicator are mixed.</p>
				<p><span><img src="images/status_mixed_results.png" width="120" height="123" alt=""/>Data show mixed results for changes over time in marine bird species:</p>
				<ul>
					<li>Sound-wide, the densities of pigeon guillemot and rhinoceros auklet have fluctuated year-to-year but show no trend over the past 14 years.</li>
					<li>In contrast, the marbled murrelet population has declined by 5.4 percent per year over the past 14 years, and this trend is statistically significant.</li>
					<li>Long-term trends of scoter populations are forthcoming, as a new data analysis and processing approach is in development.</li>
				</ul>
				<h5>Latest Data</h5>
				<img src="images/birds1.png" width="900" height="393" alt=""/> 
				<!-- TABLE 1 -->
				<table width="600" border="1" cellspacing="0" cellpadding="0" class="vstable">
					<caption>
					TABLE 1:ESTIMATES OF AVERAGE ANNUAL RATE OF POPULATION CHANGE (LINEAR) FOR PUGET SOUND, 2001-2014
					</caption>
					<thead>
						<tr>
							<th>SPECIES</th>
							<th>ANNUAL RATE (%)</th>
							<th>95% LOWER CL FOR ANNUAL RATE</th>
							<th>95% UPPER CL FOR ANNUAL RATE</th>
							<th>ADJUSTED R2</th>
							<th>P-VALUE</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Marbled murrelet</td>
							<td>-5.4</td>
							<td>-9.06</td>
							<td>-1.64</td>
							<td>-0.40</td>
							<td>0.009</td>
						</tr>
							<tr>
							<td>Pigeon guillemont</td>
							<td>-0.04</td>
							<td>-2.77</td>
							<td>2.77</td>
							<td>0.08</td>
							<td>0.976</td>
						</tr>
						
						<tr>
							<td>Rhinoceros auklet</td>
							<td>1.90</td>
							<td>-2.12</td>
							<td>6.09</td>
							<td>&lt;0.001</td>
							<td>0.327</td>
						</tr>
							<tr>	
							<td>Scoter</td>
							<td colspan="5">Coming soon</td>
					
						</tr>
					</tbody>
				</table>
				<br />
				<!-- END TABLE 1 --> 
				
				<p>Sound-wide the density of pigeon guillemot and rhinoceros auklet has varied from year-to-year but with no overall trend over the past 14 years. In contrast, the marbled murrelet population has declined by 5.4% per year over the past 14 years (95% CI = -9.06 to -1.64).  The population estimate for marbled murrelets in Puget Sound and the Strait of Juan de Fuca in 2014 was 2,822 birds (95% confidence interval = 1,668 – 3,836 birds).</p>
<p>For the scoters (surf, black, and white-winged combined), Washington Department of Fish and Wildlife developed new data analysis and processing approach using data from 2014 as a proof of concept. The mean 2014 winter density for scoters (black, surf, & white-winged scoters) in the Salish Sea was 6.1 scoters per km2 (43,828 – 46,328 birds).  Eighty-eight percent of scoters were observed in shallow waters (less than 20 m depth). Across the Sound and Strait, scoter densities varied by region (basin), with relatively low densities in the San Juan Islands (1.4 birds per km2) to relatively high densities in southern Puget Sound (17.3 birds per km2).  Similar data are currently being compiled for 2015 and years prior to 2014 and trends for scoters are forthcoming. More information can be found <a href="http://www.arcgis.com/home/webmap/viewer.html?webmap=2d7eb8143c3c49679dcf8af25ee20b0a&extent=-127.2413,46.3222,-119.1279,49.3197">here</a></p>
<h5>REPRODUCTIVE SUCCESS AND OTHER FACTORS INFORMING THE INDICATORS</h5>
<strong><p>Marbled murrelet</p></strong>
<p>To better understand this species’ decline, and to inform conservation planning for the species, <a href="http://www.reo.gov/monitoring/reports/murrelet/Raphael et al_2014_MAMU habitat associations_ JMarineSyst.pdf">researchers recently evaluated how terrestrial and marine factors influenced the distribution and abundance of the murrelet in coastal waters of the U.S.</a></p>
<p> This species is dependent on terrestiral habitats where it nests on branches in forests but spends most of its life in the marine environment where it forages for fish. They found that the amount and the continuity of the nesting habitat  has the strongest influence on the spatial and temporal variations in murrelet abundance on the water. They also identified “hot spots” for the murrelet - areas with realtively high abundance that are used consistently by murrelets along the Strait of Juan de Fuca, near Admiralty Inlet and specific areas of the San Juan Archepelago. “Hotspots” of murrelet abundance reflect not only suitable areas for foraging for fish but also the proximity of suitable inland nesting habitat. </p>

<p><strong>Rhinoceros auklet</strong></p>
<p>Ongoing monitoring of the burrow nesting seabird conducted by researchers Peter Hodum (University of Puget Sound, Oikonos), Tom Good (NOAA, NW Fisheries Science Center) and Scott Pearson (Washington Department of Fish and Wildlife) on Protection Island near Sequim indicates that burrow occupancy in 2014 (69%) was similar to the mean occupancy between 2006-2013 (70 ± 6%).  Hatching success in 2014 was marginally higher than the 2006-2013 mean (91% vs. 87 ± 4%, respectively).  Overall, fledging success (88%) in 2014 was higher than the average 2006-2014 values (80 ± 4%).  Compared to the mid-1970s (1975 and 1976), burrow occupancy, hatching success and fledging success in the 2014 breeding season were all similar.  The mean values from 2006-2014 were also similar to those from the mid-1970s, although burrow occupancy rates since 2006 have been slightly higher.  Like our long-term population monitoring results above, these results indicate a remarkable inter-decadal consistency in reproductive success parameters for the Protection Island rhinoceros auklet breeding population despite increasing anthropogenic stressors in the Salish Sea ecosystem.  </p>
<img src="images/birds_figure2.jpg" width="700" height="379" alt=""/> 

<p><strong>Pigeon guillemot</strong></p>
<p>Ongoing monitoring of this burrow nesting seabird initiated and conducted by local Whidbey Island residents from 2008 through 2014 [Provide link: http://pigeonguillemot.org/ ] indicates a stable local population.  The number of adult guillemots in the colonies nesting in the bluffs of Whidbey Island averaged 1,030 ± 36 birds.  Occupied burrows, indicated by adults going into the burrow, averaged 238 ± 21 burrows.  Burrows with chicks, indicated by prey delivery to the burrow, averaged 162 ± 13.  These population and reproductive measures, like our long-term monitoring results above, suggest a relatively stable and healthy guillemot population.  </p>

<img src="images/birds_figure3.jpg" width="700" height="426" alt=""/>

<p><strong>Scoters</strong></p>
<p>The three scoter species (surf, black and white-winged) primarily over-winter in Puget Sound.  They spend about eight months of the year (some non-breeding individuals are here year-round) foraging, replacing their feathers and putting on weight needed to successfully reproduce in high arctic lakes in the summer.  <a href="http://onlinelibrary.wiley.com/doi/10.1111/cobi.12378/abstract">Recently published research by Vilchis et al. (2015) </a>indicates that over-wintering species were three times more likely to exhibit population declines in the Salish Sea than local breeders and that between 1994 and 2010 scoters specifically had declined in 9% of the 67 depth/basin strata evaluted.  In general, Vilchis et al (2015) found that alcids (species like the marbled murrelet and common murre) and sea ducks (species like the scoters) dominated the over-wintering bird community during the 1990s, whereas non-diving bird species and diving species dominated the wintering bird community in the 2000s.</p>
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
