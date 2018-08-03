<?
/*------------------------------------------------------------*\
    Customisation de la css de l'amin
\*------------------------------------------------------------*/


function custom_css() {
   echo '<style type="text/css"></style>';
}
add_action('admin_head', 'custom_css');