<?
/*------------------------------------------------------------*\
    Gestion des scripts et css
\*------------------------------------------------------------*/




function include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js');

	// wp_deregister_script('jsglobal');
	// wp_enqueue_script('jsglobal', get_template_directory_uri() . '/js/global.js');

	wp_deregister_script('bxSlider');
	wp_enqueue_script('bxSlider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js');

	// wp_deregister_script('isotope');
	// wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');


	wp_register_script('masonry-hori', get_template_directory_uri() . '/js/masonry-horizontal.js', array('jquery'),'1.11', false);
	wp_enqueue_script('masonry-hori');
	
	wp_register_script('masonry-full', get_template_directory_uri() . '/js/isotope-docs.min.js', array('jquery'),'1.11', false);
	wp_enqueue_script('masonry-full');



	wp_register_script('global', get_template_directory_uri() . '/js/global.js', array('jquery'),'1.11', false);
	wp_enqueue_script('global');


}

function add_js_scripts()
{
		//add Ajax.js
		wp_deregister_script('ajax');
		wp_enqueue_script('ajax', get_template_directory_uri() . '/js/ajax.js');

    // pass Ajax Url to ajax.js
    wp_localize_script('ajax', 'ajaxcustom', get_template_directory_uri() . '/ajax/custom-ajax.php' ); //
}


add_action('wp_enqueue_scripts', 'include_custom_jquery');
add_action('wp_enqueue_scripts', 'add_js_scripts');


?>
