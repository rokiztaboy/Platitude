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
define('DB_NAME', 'saddatabase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'zAmh$mU@N8Y?uRVBy_Gt#@/sZZ~zleQ/L3u&mi[Op6 JjF;+][R=(.9Phn%H`7}3');
define('SECURE_AUTH_KEY',  '<+is^ovCWo`.46&jqDWLB+H=y|m)g=pt8$QP5+d&b?Pk|m$[yfx6i,KHl``P4HQ!');
define('LOGGED_IN_KEY',    'z!jOjtl_A8$BpwrDe;{:3[fbNS=k;(A$F}ZS:( %z?f#ev fwS.@xD|+_OU&Xm+4');
define('NONCE_KEY',        'JbH5aJ?YBrhtDIsjg$fmY*!}{?tC$Cq2d)X:nvotS%mr(@=(bT)VrWz3:DmAh>*6');
define('AUTH_SALT',        '(b[nNMoH>4Tdgf.lVtP&U1JN0hhGMk:s~I6+LZJ{#o@A3PsJbn![fZ:&f=4sZ+3,');
define('SECURE_AUTH_SALT', '=vn.ek!Lpc`Z;R`}^9N#_JK4=XmsER!6/iI@,X7%HV6GD ].>L*izDeq*Cbu_=-c');
define('LOGGED_IN_SALT',   'a.0r>7%SI o4^^+Jv7S]J[1_u]sm~`^p{NUFU Q<Iq[zCO.aqXv63C%}H*y->b9z');
define('NONCE_SALT',       'Vp>q.tjxk1FagEwuxA!xRuJ9hI~9.9_Z`t?dJy5ghRn-Q]7_NkJ<XJ_8B7U)4[m3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
