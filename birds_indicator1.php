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
								
						</div>
				</div>
				<div id="vitalheaderrightphoto"><span class="underconstruction">The Puget Sound Vital Signs site is currently under construction. For the most recent data click here to download the 2015 State of the Sound report</span><span class="photoCredit">Data last updated on May 6, 2014<br />
                Photo Credit: USFWS</span></div>
		</div>
		<div id="roundcornerbottom"><img src="img/rounded_rounded_bottom.jpg" width="960" height="20" /></div>
		<!--*********************************TITLE BAR END*********************************-->
		<!--*********************************TAB BEGIN*********************************-->
		
		<ul id="nav_indicator">
				<li><a href="birds.php">Vital Sign Overview<br />
						<br />
						<br />
						</a> </li>
				<li class="indicator_active_pink"><a href="birds_indicator1.php">Indicator: Abundance of marine and terrestrial bird populations
						</a></li>
		</ul>
		<div class="clearfloat"></div>
		<!--*********************************TAB END*********************************-->
		
		
		<div id="accordioncontainer">
				<div id="accordion"> 
					
						<!--*********************************FOLD 02*********************************-->
						<h3><a href="#!">Is there progress? Indicators and targets</a></h3><div>
					<!--*********************************PINK HEADER*********************************-->
								<div class="pinkBarHeader">What is the indicator? </div>
								<p>Abundance of marine and terrestrial bird populations</p>
                                <!--*********************************PINK HEADER*********************************-->
						  <div class="pinkBarHeader">What are the targets?</div>
								<h5>2020 target</h5>
								<p>There are no targets for this Vital Sign</p>
								<h5>Interim targets</h5>
								<p>There currently are no interim targets for this Vital Sign.</p>
						<!--*********************************PINK HEADER*********************************-->
								<div class="pinkBarHeader">What are the indicators?</div>
								<p>The bird indicators serve as measures of population abundance of marine and terrestrial species.</p>
							
                           <p>Marine bird indicators:</p>  
                           <ol><li>Spring/summer at-sea densities of rhinoceros auklet, pigeon guillemot and marbled murrelet. These species are highly dependent on the marine environment of, and breed in, Puget Sound and Strait of Juan de Fuca. </li>
<li>At-sea abundance trends of scoter species that overwinter in Puget Sound and Strait of Juan de Fuca. These species are highly dependent on the marine environment of Puget Sound and the Strait of Juan de Fuca, but do not breed there. </li></ol>
<p>Terrestrial bird indicators:</p>

<ol><li>Breeding abundance trends of resident species associated with interior conifer forests, namely golden-crowned kinglet, varied thrush  and brown creeper.</li>
<li>Breeding abundance trends of resident synanthropic (human-associated) species, namely American crow, rock pigeon, house sparrow, house finch, and European starling.</li></ol>

<p>The indicators were chosen because they serve as measures of the size of marine and terrestrial bird populations that reside most, if not all, of the year in Puget Sound. In addition, these indicators provide an integrative view of the health of Puget Sound, in contrast to being indicators of something specific like habitat, contaminants or prey. </p>

<p>The Washington State Department of Fish and Wildlife, the USGS Patuxent Wildlife Research Center and the Puget Sound Partnership are collaborating to compile and analyze existing data. Initial results are expected in 2014.</p>

<p>The marine and terrestrial bird indicators for the Bird Vital Sign were officially endorsed by the Science Panel at their April 9, 2014 meeting. The endorsement was based on a peer-reviewed report written jointly by the Washington State Department of Fish and Wildlife and the Puget Sound Partnership. The report, titled <a href="documents/Pearson and Hamel Bird Indicators 2013_Final.pdf" target="_blank">“Marine and Terrestrial Bird Indicators for Puget Sound”</a>, develops, presents and uses a transparent process to identify and evaluate potential indicators and ultimately select recommended marine and terrestrial bird. The peer-review process was coordinated by the Puget Sound Partnership Science Panel in 2013. The report was finalized in April of 2014. The indicators were also endorsed by the Leadership Council in January 2014. Supplemental material to the report is linked <a href="documents/Bird Indicator Supplementary material S1_2JAN13.xlsx" target="_blank">here.</a></p>

</div>
   
                           
						<!--*********************************FOLD 03*********************************-->
						<h3><a href="#!">Latest data and maps</a></h3>
						<div><h5>Coming soon</h5> </div>
						
				
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
