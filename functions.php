<?php 
/*
number
(integer) (optional) Number of sidebars to create.
Default: 1
args
(string/array) (optional) Builds Sidebar based off of 'name' and 'id' values.
Default: None
name - Sidebar name.
id - Sidebar id. (Note: "%d" is added automatically to supplied 'id' value after the first; e.g., "Sidebar", "Sidebar-2", "Sidebar-3", etc.)
description - Text description of what/where the sidebar is. Shown on widget management screen. (Since 2.9) (default: empty)
class - CSS class name to assign to the widget HTML (default: empty).
before_widget - HTML to place before every widget.
after_widget - HTML to place after every widget.
before_title - HTML to place before every title.
after_title - HTML to place after every title.

$args = array(
	'name'          => __('Sidebar %d'),
        'id'            => 'sidebar',          
	'description'   => '',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
*/

/*$args = array('name' =>__('Sidebar %d'),
	'id'=>'sidebar' ,
	'description'=> '',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebars('2',$args );


add_action('widgets_init','register_sidebars');
*/


/////////////////////////////////////////////
///////////// sidebare 1 ////////////////////
/////////////////////////////////////////////
$args = array('name' =>'Sidebar 1',
	'id'=>'sidebar1' ,
	'description'=> '',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args );


add_action('widgets_init','register_sidebar');


///////////////////////////////////////////////////////////

////////////////////////////////////////////////
///////////// Footer bare 1 ////////////////////
////////////////////////////////////////////////
function my_register_footer () {
$args = array('name' =>'Footer 1',
	'id'=>'footer1' ,
	'description'=> 'footer one for your links',
	'class'  => '',
	'before_widget' => '<li id="%1$s" class="footer1widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="footer1widgettitle">',
	'after_title'   => '</h2>' ); 

register_sidebar($args );
}

add_action('widgets_init','my_register_footer');


///////////////////////////////////////////////////////////


function register_my_menus() {
  register_nav_menus(
    array(
      'navigation_menu_primary' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'footer-menu' => __( 'My Custom Footer Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'sub-menu',
        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
        ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
  
    // build html
    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}
  
// add main/sub classes to li's and links
 function start_el(  &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
  
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
        ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  
    // build html
    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
  
    $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );
  
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
}
}





//////////////////////////////////////////////////////////////

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'top-menu', __( 'Primary Menu', 'theme-slug' ) );
}

///////////////////////////////////////////////////////////////




/*add_action( 'after_setup_theme', 'register_my_menus' );
function register_my_menus() {
  register_nav_menu(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'top-menu' =>__('Top Menu'),
      'footer' =>__('Footer Menu'),
      ));
}*/


function wpcss() {
	wp_enqueue_style('style',get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts' , 'wpcss' );

 ?>
<!-- Customizer -->
<!-- Customizer -->
<!-- Customizer -->
 <?php 

function theme_customizer_register($wp_customize){
$wp_customize->add_section('3cms_colors',array(
	'title'=>__('3CMS color','3cms'),
	'description'=>'Modify Theme Colors',
	'priority'=>30
	));

$wp_customize->add_setting('background_color',array('default'=>'#fff'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'background_color',array(
'label'=>__('Edit background color','3cms'),
'section'=>'3cms_colors',
'settings'=>'background_color'
)	));

//title color
$wp_customize->add_setting('title_color',array('default'=>'#2288BD'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'title_color',array(
'label'=>__('Edit website title color','3cms'),
'section'=>'3cms_colors',
'settings'=>'title_color'
)	));

//description color
$wp_customize->add_setting('description_color',array('default'=>'#000'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'description_color',array(
'label'=>__('Edit website description color','3cms'),
'section'=>'3cms_colors',
'settings'=>'description_color'
)	));
//------------------------------------------------------------------------------
// navigation menus
$wp_customize->add_section('nav_colors',array(
	'title'=>__('3CMS Navigation menus','3cms'),
	'description'=>'Modify Navigation menus Colors',
	'priority'=>31
	));

$wp_customize->add_setting('nav_links_colors',array('default'=>'#fff'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'nav_links_colors',array(
'label'=>__('Edit menus links colors','3cms'),
'section'=>'nav_colors',
'settings'=>'nav_links_colors'
)	));

$wp_customize->add_setting('nav_bg_colors',array('default'=>'#444'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'nav_bg_colors',array(
'label'=>__('Edit menus background colors','3cms'),
'section'=>'nav_colors',
'settings'=>'nav_bg_colors'
)	));

$wp_customize->add_setting('nav_bg_hover_colors',array('default'=>'#666'));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'nav_bg_hover_colors',array(
'label'=>__('Edit menus background hover colors','3cms'),
'section'=>'nav_colors',
'settings'=>'nav_bg_hover_colors'
)	));

// Slideshow images
$wp_customize->add_section('change_img',array(
	'title'=>__('3CMS Slide show images','3cms'),
	'description'=>'Modify Slideshow images',
	'priority'=>22
	));

$wp_customize->add_setting('slide_img',array('default'=>'http://inspirati.byethost7.com/wordpress/wp-content/themes/3CMS/images/06.jpg'));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'slide_img',array(
'label'=>__('Change Slide Show Images','3cms'),
'section'=>'change_img',
'settings'=>'slide_img'
)	));

$wp_customize->add_setting('bg_image',array('default'=>'none'));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image', array(
	'label'        => __( 'Change Background Image', '3cms' ),
	'section'    => 'change_img',
	'settings'   => 'bg_image',
) ) );

}
add_action('customize_register','theme_customizer_register');

function css_customizer(){

 ?>
 
<style type="text/css">
body { background-color: #<?php echo get_theme_mod('background_color'); ?>; }	
.blogname h1 a {color: <?php echo get_theme_mod('title_color'); ?>; }
.blogname h2 {color: <?php echo get_theme_mod('description_color'); ?>; }
.cms-menu a ,.cms-menu a:link,.cms-menu a:visited {color: <?php echo get_theme_mod('nav_links_colors'); ?>;}
.cms-menu a {background-color:<?php echo get_theme_mod('nav_bg_colors'); ?>;}
.cms-menu a:hover {background-color: <?php echo get_theme_mod('nav_bg_hover_colors'); ?>;}


</style>

<?php 
}
add_action('wp_head','css_customizer' );
 ?>

 <?php 
	// Creating the widget
	class wpb_widget extends WP_Widget {
	 
	function __construct() {
	parent::__construct(
	// Base ID of your widget
	'wpb_widget',
	 
	// Widget name will appear in UI
	__('WPBeginner Widget', 'wpb_widget_domain'),
	 
	// Widget description
	array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
	);
	}
	 

	// Creating widget front-end

	// This is where the action happens

	public function widget( $args, $instance ) {

	$title = apply_filters( 'widget_title', $instance['title'] );

	// before and after widget arguments are defined by themes

	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];
	 
	// This is where you run the code and display the output
	echo __( 'Hello, World!', 'wpb_widget_domain' );
	echo $args['after_widget'];
	}

	         

	// Widget Backend

	public function form( $instance ) {

	if ( isset( $instance[ 'title' ] ) ) {

	$title = $instance[ 'title' ];

	}

	else {

	$title = __( 'New title', 'wpb_widget_domain' );

	}

	// Widget admin form

	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>

	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

	</p>

	<?php

	}

	     

	// Updating widget replacing old instances with new

	public function update( $new_instance, $old_instance ) {

	$instance = array();

	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

	return $instance;

	}

	} // Class wpb_widget ends here

	 

	// Register and load the widget

	function wpb_load_widget() {

	    register_widget( 'wpb_widget' );

	}

	add_action( 'widgets_init', 'wpb_load_widget' );
  ?>

  <?php 
/*Plugin*/
/*
function oscimp_admin_actions() {
    add_options_page("OSCommerce Product Display",
     "OSCommerce Product Display",
      1,
       "OSCommerce Product Display",
        "oscimp_admin");
}
 
add_action('admin_menu', 'oscimp_admin_actions');
*/
?>

<?php /*
function my_custom_admin_head() {
	echo '<style>[for="wp_welcome_panel-hide"] {display: none !important;}</style>';
}
add_action( 'admin_head', 'my_custom_admin_head' );

*/
?>
<?php 
add_action('admin_menu', 'wpautop_control_menu');
add_action('admin_title', 'wpautop_control_menu');

function wpautop_control_menu() {
  add_submenu_page('options-general.php', 'wpautop-control', 'wpautop control', 'manage_options', 'wpautop-control-menu', 'wpautop_control_options');
}
 ?>


 