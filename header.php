<div class="row">
<div class="col-lg-12 col-md-12 col-sm12 col-xs-12 ">
<div class="blogname">
<h1>
<a href="http://inspirati.byethost7.com/wordpress/">
<?php bloginfo("name"); ?>
</a>
</h1>
<h2><?php bloginfo("description"); ?></h2>
<?php if (is_page('101')) {
	echo '<h1>View Our Work</h1>';
}  ?>
<div class="topnav">
<?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) );  ?>
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm12 col-xs-12 ">
	<img id="img11" src="<?php bloginfo('template_directory'); ?>/images/pallet.png" alt="" />	
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm12 col-xs-12 ">
<div class="slideshow">
	<img id="img9" src="<?php bloginfo('template_directory'); ?>/images/shadow.png" alt="" />	
	<img id="img1" src="<?php bloginfo('template_directory'); ?>/images/01.jpg" alt="" />
	<img id="img2" src="<?php bloginfo('template_directory'); ?>/images/02.jpg" alt="" />
	<img id="img3" src="<?php bloginfo('template_directory'); ?>/images/03.jpg" alt="" />
	<img id="img4" src="<?php bloginfo('template_directory'); ?>/images/04.jpg" alt="" />
	<img id="img5" src="<?php bloginfo('template_directory'); ?>/images/05.jpg" alt="" />
	<img id="img5" src="<?php bloginfo('template_directory'); ?>/images/06.jpg" alt="" />
	<img id="img7" src="<?php bloginfo('template_directory'); ?>/images/07.jpg" alt="" />	
	<img id="img8" src="<?php bloginfo('template_directory'); ?>/images/08.jpg" alt="" />	
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm12 col-xs-12 ">
	<img id="img10" src="<?php bloginfo('template_directory'); ?>/images/pallet.png" alt="" />	
</div>
</div>

<?php get_template_part('nav' ); ?>