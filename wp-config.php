<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'soyouapp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vikram');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9CIez;df@EU>^XN68AG}hqpHBZNQ96?@549x$enK9]+xC+rRQ_7&S#`#,XA_4pAS');
define('SECURE_AUTH_KEY',  'V;5_-RdH*j=(CUe)UuY)x/ey?2?LsgI|~)gMK!12%36:~7Mu9daXJMjpy~J*vS&P');
define('LOGGED_IN_KEY',    'cImTRgdJ{DiuO^0kkcu>O0A}?z(m>Q$u$S/%_8b|J(UTzg5auUOMiI#~T=`4EIp,');
define('NONCE_KEY',        ' p2e^X5F~Bej+UpOZyEl<}{B`)F)@q@hZD^N,W-V+_#i]wLHR/F8|V [=`3(.D0o');
define('AUTH_SALT',        ']7?.K{j4oUa0v/mlN{em JhJHpt`QczQlO2H^?q^>*Vh*0~3u}2S#iMyw]e>oMq$');
define('SECURE_AUTH_SALT', 'PU~cn|}p-4)4(i;re#|WtQ)6/.uUZ|gi{NREA-QR5P%.&&`1[#H~7_sKAZ91QvB?');
define('LOGGED_IN_SALT',   'EqucGluHlYKa~OV3FDpEGW:q}O#(;mI<@dzroi}I$o^BT{B:8FTs^3}IhC<Yz4AV');
define('NONCE_SALT',       '3cFyvud6G7<#KT.;mjVOL-{]jmVR[6Z.M-!EH|OC<fhMripj:9jF-G=]xSA1ItO{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'so_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
