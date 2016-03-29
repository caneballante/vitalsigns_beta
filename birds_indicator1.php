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
		The marine bird population indicator serves as measures of population abundance of marine species.
Marine bird indicators:
1.	Spring/summer at-sea densities of rhinoceros auklet, pigeon guillemot and marbled murrelet. These species are highly dependent on the marine environment of, and breed in, Puget Sound and Strait of Juan de Fuca. 
2.	At-sea abundance trends of scoter species that overwinter in Puget Sound and Strait of Juan de Fuca. These species are highly dependent on the marine environment of Puget Sound and the Strait of Juan de Fuca, but do not breed there. 
The indicator was chosen because it serves as measures of the size of marine populations that reside most, if not all, of the year in Puget Sound. In addition, the indicator provides an integrative view of the health of Puget Sound, in contrast to being indicators of something specific like habitat, contaminants, or prey. 
The Washington State Department of Fish and Wildlife, the USGS Patuxent Wildlife Research Center and the Puget Sound Partnership are collaborating to compile and analyze existing data. Initial results are expected in 2014.
The marine bird indicator for the Bird Vital Sign was officially endorsed by the Science Panel at their April 9, 2014 meeting. The endorsement was based on a peer-reviewed report written jointly by the Washington State Department of Fish and Wildlife and the Puget Sound Partnership. The report, titled “Marine and Terrestrial Bird Indicators for Puget Sound,” (http://www.psp.wa.gov/vitalsigns/documents/Pearson%20and%20Hamel%20Bird%20Indicators%202013_Final.pdf) develops, presents, and uses a transparent process to identify and evaluate potential indicators and ultimately recommend marine bird indicators. 
The peer-review process was coordinated by the Puget Sound Partnership Science Panel in 2013. The report was finalized in April of 2014. The indicators were also endorsed by the Leadership Council in January 2014. Supplemental material to the report is linked here (Bird Indicator Supplementary material S1_2JAN13.xlsx, http://www.psp.wa.gov/vitalsigns/documents/Bird%20Indicator%20Supplementary%20material%20S1_2JAN13.xlsx).



<a href="documents/Pearson and Hamel Bird Indicators 2013_Final.pdf" target="_blank">
<a href="documents/Bird Indicator Supplementary material S1_2JAN13.xlsx" target="_blank">
</a>
				<!--*********************************PINK HEADER*********************************-->
				<div class="pinkBarHeader">What are the targets?</div>
				<h5>2020 target</h5>
				<p>There are no targets for this Vital Sign</p>
				<h5>Interim targets</h5>
				<p>There currently are no interim targets for this Vital Sign.</p>
			</div>
			
			<!--*********************************FOLD 03*********************************-->
			<h3><a href="#!">Progress summary and data</a></h3>
			<div>
				<h5>Coming soon</h5>
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
