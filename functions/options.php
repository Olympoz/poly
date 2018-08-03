<?
/*------------------------------------------------------------*\
    Gestion des options de l'admin
\*------------------------------------------------------------*/


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Paramètres',
		'menu_title'	=> 'Paramètres',
		'menu_slug' 	=> 'parametres',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Slider Home',
		'menu_title'	=> 'Slider Home',
		'menu_slug' 	=> 'slider_home',
		'capability'	=> 'edit_posts',
		'icon_url' 		=> 'dashicons-format-gallery',
		'redirect'		=> false
	));

}
