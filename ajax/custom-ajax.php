<?php

define('DOING_AJAX', true);
if (!isset( $_REQUEST['action']))
    die('gr');

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

header('Content-Type: text/html');
send_nosniff_header();

header('Cache-Control: no-cache');
header('Pragma: no-cache');
$action = esc_attr(trim($_REQUEST['action']));

$allowed_actions = array(
    'filter_actu',
    'search_actu',
    'color',
    'filter_reset',
);

if(in_array($action, $allowed_actions)) {
    if(is_user_logged_in())
        do_action('wp_ajax_'.$action);
    else
        do_action('wp_ajax_nopriv_'.$action);
} else {
    die('-1');
};


// Do not forget to add :
      //add_action( 'wp_ajax_mon_action', 'mon_action' );
      //add_action( 'wp_ajax_nopriv_mon_action', 'mon_action' );

// In the files where you write your called functions.
