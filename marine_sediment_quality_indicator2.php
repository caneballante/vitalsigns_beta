<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="lMaE6uVdAY_4P-zfoagi1Kj2QQLS8W3JvahLqMZMuDU" />
<title>Puget Sound Partnership - Vital Signs - Marine Sediment Quality</title>
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
	color = "aqua";
</script>
</head>
<body id="id20" >
<div id="container">
	<?php include 'includes/header_test.html' ?>
	<?php include 'includes/marine_sediment_quality-title.html' ?>

	<?php include 'includes/marine_sediment_quality-tab.html' ?>
	
	<div id="accordioncontainer">
		<div id="accordion"> 
			
			<!--*********************************FOLD 02*********************************-->
			<h3><a href="#!">Indicator and target description</a></h3>
			<div> 
				<!--*********************************AQUA HEADER*********************************-->
				<div class="aquaBarHeader">What is the indicator? </div>
				<h4 class="aqua">This indicator is Sediment Quality Standards.</h4>
				<p>This indicator is the percent of individual chemical measurements that exceed the Washington Sediment Quality Standards (SQS), which is related to the Sediment Chemistry Index, another indicator for the marine sediment Vital Sign. </p>
<p>SQS values have been determined for a total of 47 chemicals in Puget Sound. Of those, 39 are included in the SCI and evaluated for this indicator.
</p>
				<h4 class="aqua">&nbsp;</h4>
				
				<!--*********************************AQUA HEADER*********************************-->
				<div class="aquaBarHeader">What are the targets? </div>
				<h5>2020 target</h5>
				<h4 class="aqua">Have no sediment chemistry measurements exceeding the Sediment Quality Standards (SQS) set for Washington State. </h4>
			<h5>Interim Targets</h5>
            <p>There are no interim targets set for this indicator.</p>
				<h5><a href="http://www.psp.wa.gov/downloads/interimtargets/Marine%20Sediment%20Quality%20Interim%20Targets%20-FINAL.pdf">Interim targets (PDF)</a></h5>
				
				
			</div>
			
			<!--*********************************FOLD 03*********************************-->
			<h3><a href="#!">Progress summary and data</a></h3>
			<div> 
				<!--*********************************AQUA HEADER*********************************-->
				<h5>Is the indicator making progress toward the 2020 target? </h5>
				 <p> <span><img src="images/status_getting_better.png" width="118" height="121" alt=""/>Yes, this indicator has made gains relative to the baseline reference.</span>
				<p>Although the target is not fully met across all of Puget Sound, recent improvements suggest progress toward the target:</p>
<ul><li>The percent of individual chemicals exceeding SQS since 1997 is typically small (mostly less than 1 percent) except for Central Sound, Elliott Bay, and Commencement Bay, where the number still never exceeded 6 percent. </li>
<li>Even fewer chemicals exceeded state SQS in the second round of sampling, with four regions dropping to zero, now meeting the target value in those areas. </li>
<li>Budd Inlet and the Port Gardner/Everett Harbor urban embayments are also at zero.</li></ul>
<div class="aquaBarHeader">Latest Data</div>
<img src="images/marine-sediment-sqs.png" />
<p>L<strong>Left panel:</strong> Values for eight Puget Sound regions; <strong>Right panel:</strong> Values for six Puget Sound urban bays</p>
<p><em>Source: Washington State Department of Ecology, Marine Sediment Monitoring Team
</em></p>

				<!--*********************************AQUA HEADER*********************************-->
				<div class="aquaBarHeader">Maps</div>
                <h5>FIGURE 2. MARINE SEDIMENT MONITORING REGIONS AND URBAN BAYS</h5>
				<img src="images/toxics_in_sediment_map.png" width="597" height="649" alt="Marine sediment monitoring regions and urban bays" /> </div>
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
