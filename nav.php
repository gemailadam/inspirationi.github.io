<div class="row">
<div class="col-lg-12 col-md-12 col-sm12 col-xs-12 ">
<div class="cms-menu">
<!--?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );  ?-->
<?php
wp_nav_menu( array(
    'theme_location'    => 'navigation_menu_primary',
    'container'     => 'div',
    'container_id'      => 'top-navigation-primary',
    'conatiner_class'   => 'top-navigation',
    'menu_class'        => 'menu main-menu menu-depth-0 menu-even', 
    'echo'          => true,
    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'         => 10, 
    'walker'        => new themeslug_walker_nav_menu
) );
?>
</div>
</div>
</div>
<br />
<br />