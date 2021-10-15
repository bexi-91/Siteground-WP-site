<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbqtf1bdeoydhz' );

/** MySQL database username */
define( 'DB_USER', 'un1fhlok3c1ss' );

/** MySQL database password */
define( 'DB_PASSWORD', '%+bhs[51n191' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rOLR/%!@+sLZ&I]&|/]t6GI5}CRu}_-Slb-Q0L[F/Syuk)yNL&n>ik}2@rXH3<J`' );
define( 'SECURE_AUTH_KEY',  'lvxd?TGKYe@})I4%^>1e70Mak%Sb!;>y@0CGt{wz0:)s7e}BW;:>gKt4ZE( HE9}' );
define( 'LOGGED_IN_KEY',    'o8-uyoAx:Yiq%cff1a /;5]:cup`$Do9]30RTkx0pAa5sgv7%5m3T:km?}3P~>3/' );
define( 'NONCE_KEY',        '2 /L7by_WO:wYi@@_@3+!VX[k89e[R/]5-r?`o!:qn-ql(%y1&rugd>~*JweMQe]' );
define( 'AUTH_SALT',        'rb*SUCXkJsQ+L{N%PT&R H)$jP,71^^!E?PC2AEiBL0HvsI24>8)C_n_l+0iM8~K' );
define( 'SECURE_AUTH_SALT', 'yL)+yCdS(J27Tl[=raZ<ro$4nM1;2;*ewlIL(dQ1dQg$ qQ_LLEx;Yp!v.AEV5v}' );
define( 'LOGGED_IN_SALT',   'L:EW8,,3/`gz6lT%k4,UXn>zLTYpP*%rJNG(DG*PWwR6*Y|+AH<0,d(jxw0E4w{+' );
define( 'NONCE_SALT',       '/~{{o[#,jQfTD_F>_p4T,,iC`DqX;X#T?(V(`*ri{&VW/Txh<-NFFu%r#168QvuS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpstg0_'; // Changed by WP Staging

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
define('UPLOADS', 'wp-content/uploads'); 
define('WP_PLUGIN_DIR', __DIR__ . "/wp-content/plugins"); 
define('WP_LANG_DIR', __DIR__ . "/wp-content/languages"); 
define('WP_HOME', 'https://kayleed.sgedu.site/1633913894807'); 
define('WP_SITEURL', 'https://kayleed.sgedu.site/1633913894807'); 
define('WP_CACHE', false); 
define('WP_ENVIRONMENT_TYPE', 'staging'); 
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
