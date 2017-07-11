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
define('DB_NAME', 'care');

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
define('AUTH_KEY',         ']3=pW)I8 Cg;r2-I0!}1^?p.E:Xvic##:VN=gK%I1_l?WC8ZD5{j;,WvK<.cepW`');
define('SECURE_AUTH_KEY',  '8CQ}zv#-!oaGH^(E=MYoLy)^.~Yx&$BK^I8!-.^9BDDZCP3%1O|Q[Jo<;}kde(z{');
define('LOGGED_IN_KEY',    '{:v0X4J|@=@BtYu,~rL;_dK_!Q_;K2PWG&(~& V-T{O~gYc9&QM*~YNp8.URL9Yh');
define('NONCE_KEY',        'm;*Ijy9{.*eanS]1*+z{[7dj$?BD,aC)[hi*%J:*p>?N&?gOU%DA34C mpJ_ mMk');
define('AUTH_SALT',        '/u1dta[Ked7G6vml6,NNXI#B!D(UV:0N*U= :}In05Z62?5pu|?Q-jOSR;P>ZXvR');
define('SECURE_AUTH_SALT', 'LYk!E#^K_RjtTVAtl$:Af1-2K%g==cD?z!l*.wN=b& LS:GUNN.l_-%jrL9aAfpt');
define('LOGGED_IN_SALT',   'S/)OpqP}@;A&l@(QtpCQ{A$:-?s3=2^Hu`h_g`*/9Ru#i<?}JpFP6J[7Dduom=~B');
define('NONCE_SALT',       'LPe>0z7,s+.u,sBFxz~>|V[sluW1=Ik*yc~(z}5gf]l{pO3@qL[%Zf&p&?VVcg%d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_care';

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
