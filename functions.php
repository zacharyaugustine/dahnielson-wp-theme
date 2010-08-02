<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => true
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');

// Filter away the default scripts loaded with Thematic
//function childtheme_head_scripts() {
//	// Abscence makes the heart grow fonder
//}
//add_filter('thematic_head_scripts','childtheme_head_scripts');

//function childtheme_postheader_postmeta($postmeta) {
//	return str_replace(" | ", " ", $postmeta);
//}
//add_filter('thematic_postheader_postmeta','childtheme_postheader_postmeta');

?>