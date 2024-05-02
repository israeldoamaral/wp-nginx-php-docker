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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'helloworld' );

/** Database username */
define( 'DB_USER', 'helloworld' );

/** Database password */
define( 'DB_PASSWORD', 'helloworldpassword' );

/** Database hostname */
define( 'DB_HOST', '172.25.44.17' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '/fn06;Kc]NES6V]V|[@%V.x~5.e%^XV*dd|f_WxE}WA<HaM5Q_c^+jo+$U]x|2)<');
define('SECURE_AUTH_KEY',  'Cl`[WO6TxM#Mx%s^k=3D<~bc)0nJ4VLC) adlV2~lS|HmhHGkfK@oS|/^V$>rkB3');
define('LOGGED_IN_KEY',    'nb7fcEQlk%Ht]+KLh~DN$:-/fFh3565hM0P^7rq|;Kwxq^DSICKNY3#)b0C%^FL`');
define('NONCE_KEY',        '7h:Ce*QF$-t.k;,PpPAr,/7keSsFtbgb4`)Y&xW|e !K6be)AlgFuVl${tj/GI|T');
define('AUTH_SALT',        'p1EjiRMM!Jvy(DR[cWunoo>Nd+yekpy(7sgd1)e-d(C+y}lv5PM{}1&$_4)`WH~X');
define('SECURE_AUTH_SALT', 'C#@z%TTT5^R#@mP>VL]4`xb SWyCup UW^XgNhzu,qNC?Ip)<8f|vqu-Bt-t2=`K');
define('LOGGED_IN_SALT',   '+*}Vffwa-gXNN--x/M)_)},A%0JCgDC#G&(*m)B>pqkKyqQCzK?Wr2r:t@t)-kH9');
define('NONCE_SALT',       'Yo]xC2}RFXc*H?aCHy.MGYE4Oi/dEqH H{bgr%$+z-E-)}~Qq)uhd.j+&63efAV ');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

define( 'FS_METHOD', 'direct' );
define( 'UPLOADS', 'wp-content/uploads' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
