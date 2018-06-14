
<?php 

add_theme_support( 'post-thumbnails' ); 

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

?>

