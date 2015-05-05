<?php

define('DB_HOST', getenv('DB_HOST', 'localhost'));
define('DB_USER', getenv('DB_USER', 'root'));
define('DB_PASSWORD', getenv('DB_PASS', 'root'));
define('DB_NAME',getenv('DB_NAME', 'db'));

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', ''     );

define('FS_METHOD', 'direct');

#define('WP_HOME','http://usblog.triumph.com');
#define('WP_SITEURL','http://usblog.triumph.com');


$table_prefix  = 'wp_';

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
