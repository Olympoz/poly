<?
/*------------------------------------------------------------*\
    Customisation de la css
\*------------------------------------------------------------*/


function custom_login_css() {
    $style = '<style type="text/css">';
    $style .= '.login{ background: #F5F5F5;}';
    $style .= 'body.login div#login h1{ display: block; width: 206px; height: 110px; margin: auto}';
    $style .= 'body.login div#login h1 a{ background-image: url('.get_bloginfo('template_url').'/admin/wp_admin_logo.svg); padding: 0;  background-size 135px 135px; display: block; width: 135px; height: 135px;}';
    $style .= '.login h1 a{ display: block; width: 100%; height: 100%;  background: transparent; padding: 0 ;overflow: hidden; text-indent: -5000px;}';
    $style .= '.login #nav { text-align: right; padding: 0;}';
    $style .= '.message { display: none;}';
    $style .= '.login #nav a{ background: #f7f5f1; padding: 5px 10px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;}';
    $style .= '.login #nav a:hover{ color: #717171; background: #FFF;}';
    $style .= '.login form{ background: #f7f5f1; }';
    $style .= '.login label{ color: #717171; }';
    $style .= '.login form .input{ background: #FFF; font-size: 15px; height: 40px; padding: 0 10px;}';
    $style .= '.login form .input:focus{ border: solid 1px #298D81;  box-shadow: none;}';
    $style .= '.login form  #wp-submit{ background: #36BCAF; border: solid 1px #FFF; color: #FFF; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; box-shadow: none; text-shadow: none;}';
    $style .= '.login form  #wp-submit:hover{ color: #FFF; border: solid 1px #FFF; background: #298D81; box-shadow: none;}';
    $style .= '#backtoblog{ display: none; }';
    $style .= '</style>';
    echo $style;
}
add_action('login_head', 'custom_login_css');



/*------------------------------------------------------------*\
    Modification du lien du logo
\*------------------------------------------------------------*/

function wpc_url_login(){
    return get_bloginfo('url'); // votre URL ici
}
add_filter('login_headerurl', 'wpc_url_login');
