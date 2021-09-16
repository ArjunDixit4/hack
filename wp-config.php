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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'uy`?s=RO`{&* ~XO@r&#wp>zG^s4+6qO^%%xz5v^Hs5-9[)$Hnpg4,BF|l!^kJIr' );
define( 'SECURE_AUTH_KEY',  'pI=J{,r1qc9vMg,LHi8<i!!BFp]#J!lQ`KiWlj]A,8J{G{0Mdw;G]Hg%PyIe0Y)v' );
define( 'LOGGED_IN_KEY',    'SkYZx,;ri`^|T!py<QvK pFC={4HREj -@ [4j^qYhn#NOOM.tazJB97dM{8gex%' );
define( 'NONCE_KEY',        ']}d`+w?Ow0GCM$kQ_jBp(0G.Kk1qh^=5Y`=X)P`zzsTx~U{XNXp(eY9`K-R/Cse<' );
define( 'AUTH_SALT',        'x(%95l>X| LD ?vf2t,J=u@t_S@!/*zHyY~jIQQ4V7C5=[1U%wi2HB1(V@*r;L51' );
define( 'SECURE_AUTH_SALT', '%~_ey[A!Ay)gF@85;&C@4Po2vjfr&1#YQ/$Bnk@Z(jS4g4E)!#_XEfxFxct.l P}' );
define( 'LOGGED_IN_SALT',   'l)}B1F`BC~6PU^LBTxs7P!nMSEsi44&[inP9pYO !By{/<92;Xe nc0pG$R$C}zh' );
define( 'NONCE_SALT',       ',FIzN6Vw#GV`.S1c8T3,b{J1{(]L>3W8Hw`7S!ogGqEaeA(C!;mD^&xt*h-+e/s`' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
