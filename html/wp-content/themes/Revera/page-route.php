<?php
/**
 * Template name:Route
 *
 * This is the template for the interviews page
 */

get_header(); ?>

<div class="page-head">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3> <?php the_title(); ?> </h3>
				<p> </p>
			</div>
			
		</div>
	</div>
</div>

<div class="container">	
	<div class="row">
	<div id="primary" class="content-area col-sm-8 bioprimary mapdiv">
		<main id="main" class="site-main" role="main">
			<img src="http://ridingtheline.com/wp-content/uploads/2013/10/route3.png" class="centerimg" >	
			<div id="maptext">
				<p> Inspired by the 1976 bikecentennial ride, the TransAmerica route outlined by Adventure Cycling runs from Astoria, OR. to Yorktown, VA. While our path follows this series of maps for most of the journey, we will be making some modifications and detours including a stop in Nashville, TN. and, most notably, extending the trip up the Atlantic coast to finish our adventure in New York, NY.			</p>
				<p>For more information about the TransAmerica, Great Rivers South, and Atlantic Coast routes we are using, please visit <a href="http://www.adventurecycling.org">AventureCycling</a>
				</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div id="secondary"class="widget-area col-sm-4" style="float: right; margin-top:-20px;">
		<div id="hipgeodiv">
			<a href="http://www.hipgeo.com/syndicate/d_aa6h2a/width/400/height/320"><h3 align="center">TRACK OUR PROGRESS</h3></a>
			<iframe id="mob-frame" width="400" height="320" src="http://www.hipgeo.com/syndicate/d_aa6h2a/width/400/height/320" frameborder="0" scrolling="no" class="centerimg"></iframe>
		<p style="font-size:10pt">* Due to HipGeo going out of business, our route can only be followed up to Nashville,TN. Projected arrival date in New York is Nov 23, 2013 *</p>
		</div>
	</div>
	</div>
</div>
<?php get_footer(); ?>
