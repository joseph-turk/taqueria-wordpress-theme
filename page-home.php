<?php
/**
 * The template for displaying the home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Taqueria
 */

get_header();
?>

<div class="row">
  <div class="col-sm-12">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="http://i2.wp.com/www.travelfreak.net/wp-content/uploads/2014/02/mexican-street-food-e1401680392244.jpg?fit=1974%2C1318" alt="...">
		    </div>
		    <div class="item">
		      <img src="https://s3.amazonaws.com/b360/website/oaxaca/Mexican-Food-Hungtington-6.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="http://www.lahaciendafmr.com/images/depositphotos_81287066_l-2015.jpg" alt="...">
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
  </div>
</div>

<?php
while ( have_posts() ) : the_post();
	the_content();
endwhile;

get_footer();
