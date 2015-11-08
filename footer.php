<?php
/*
footer.php
*/
?>
<?php
/*
$defaults = array(
	'theme_location'  => '',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $defaults );
*/
?>

<?php /*get_template_part('footer','two' ); */ ?>
<section>
	<nav class="menunav">
		<?php
		$args = array('theme_location' =>'footer-menu'  ); 
		wp_nav_menu( $args );
		 ?>
	</nav>
</section>
<section>
	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php   dynamic_sidebar('footer1'); ?>
		</div>
	
</section>
<div style="clear:both;"></div>
	<h5>&copy; copyright <?php  the_author();echo " - "; echo date('Y');?></h5>

