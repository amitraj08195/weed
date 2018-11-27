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
define('DB_NAME', 'weed');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[eOrA%&djy14MX:n.2uFK{9st5IBfeEp<-@IeN1;9vgPdFGV,)z5rIHQnlo#D.[j');
define('SECURE_AUTH_KEY',  'A/xerV9qE,$*[8Z4yHGi8&wpo-/<o8@MB#<m6A!^VD;@.P5IK1U}BrHkVk~;F,Mv');
define('LOGGED_IN_KEY',    'DO|yQ?otm~-0=leuv!;>:J!*@BH@hLQV*d5#D-aW{6BCv7t]b5NmRJv%oaXqR, A');
define('NONCE_KEY',        '`Crzpez6Q:x$PqbnrGU@VlfPr?PiD=X)9MX!y.gpAPKc:pW&Z^p[cdLMCI0PM$3b');
define('AUTH_SALT',        'a; Q1i,Q}p}l:>4(CB F=)s[&VRNB$Lf`r E/w$Xye)|nOFS9p[s6Q<A)@Prz}p9');
define('SECURE_AUTH_SALT', '!4xi_4/p]1&VyK`$S>)3723U*aa9z6LN;agjR,WCH_wMs;gz+JI6kt0+@2.05&C5');
define('LOGGED_IN_SALT',   '.2s$j$$s7{!|FU,c0x ^J#p64:KPvKy`D%5>Qq=r}RQ2 Iw%(dDWrC1_~[qZt @w');
define('NONCE_SALT',       'SR7.!9ox(;e*KOy+Wczr7h^D:~<}-x/:VL-dBPn)Vt}W(klMb1,.FXE(cyT%v3|l');

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
define( 'WP_ALLOW_MULTISITE', true );


define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/weed/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


