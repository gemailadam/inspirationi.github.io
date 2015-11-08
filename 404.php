<?php 
/*
404.php
The 404 Not Found template. Used when WordPress cannot find a post or page that matches the query. 
*/
?>
<?php 
/*
index.php
    The main template. If your Theme provides its own templates, index.php must be present. 
*/
 ?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('head','1'); ?>
<body <?php body_class( ); ?> >
<div class="container">
<div class="oops">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 style="color:#2288BD;box-shadow:2px 2px 4px #999;text-shadow:2px 2px 4px #999;">Oops The Page You Request Is not Found , You have been redirected To Home Page</h1> 
        </div>
    </div>
	<!-- 1) header-->
	<header>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <?php get_header(); ?>
            </div>
    </header>
		<!-- 2 ) main -->
		<div class="main">
		<div class="row">
			<!-- 2-1 ) page part -->
			<div class="page">
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
					

<h1 style="color:#2288BD;"><u>HOME</u></h1>


<h1>Under Construction</h1>

<p>Under Construction , Under Construction , Under Construction Under Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under ConstructionUnder Construction , Under Construction , Under Construction
</p>
					

				</div>
		    </div>
            
		    <!-- 2-2 ) sidebar part if you want -->
			<div class="sidrbar">
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                	<?php get_sidebar(); ?>
				</div>
			</div>

		</div>
		<!--End Row -->
		</div>
		<!--End main -->

		<!-- 3 ) footer-->
		<footer>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php get_footer(); ?>
				</div>
			</div>
		</footer>
		<!-- End footer-->
	
	</div>
	<!-- End Container-->
	<script type="text/javascript"></script>
<?php wp_footer(); ?>	
</body>
</html>