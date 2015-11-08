<?php
/*
 * Template Name: Custom Full Width
 * Description: Page template without sidebar
 */
?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('head','1'); ?>
<body <?php body_class( ); ?> >
<div class="container">

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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					
					<?php
					if(have_posts()) : 
					while ( have_posts() ) : the_post();
					
					echo '<div class="rect">';
					echo '<h1><a>';
					the_title();
					echo '</a></h1>';
					echo '<br/>';
					echo '<br/>';
					the_content();
					echo "</div>";
					endwhile;
					else :
					 echo "No Content Found , or there is nothing Page By you yet";
					endif;				            
					?>	
					

				</div>
		    </div>
		    <!-- 2-2 ) sidebar part if you want -->


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