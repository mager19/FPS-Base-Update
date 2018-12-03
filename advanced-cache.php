<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path  = '/app/public/wp-content/cache/wp-rocket/';
$rocket_config_path = '/app/public/wp-content/wp-rocket-config/';

if ( file_exists( '/app/public/wp-content/plugins/wp-rocket/inc/front/process.php' ) && file_exists( '/app/public/wp-content/plugins/wp-rocket/vendor/autoload.php' ) && version_compare( phpversion(), '5.4' ) >= 0 ) {
	include '/app/public/wp-content/plugins/wp-rocket/vendor/autoload.php';
	include '/app/public/wp-content/plugins/wp-rocket/inc/front/process.php';
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}
