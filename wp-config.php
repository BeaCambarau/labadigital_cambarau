<?php

define('WP_HOME','http://localhost/laba/biennio_secondo/molinari_antonio/labadigital_cambarau/');
define('WP_SITEURL','http://localhost/laba/biennio_secondo/molinari_antonio/labadigital_cambarau/');
define('FS_METHOD', 'direct');

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
define('DB_NAME', 'laba_labadigital_cambarau');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '}fCo&<DJXNPc|51{Px#MYko>_xMSR^$XWp2~A_4D-PQ0JGB CCbQ2jHPZ.l5<%~*');
define('SECURE_AUTH_KEY',  'N<; ih5j!3,-{:8bg]^U)m$T;X!}${%8}b{tf8Na3/fort6Ks{>(K<-aANo%P<l4');
define('LOGGED_IN_KEY',    '>4whdYt;E~+]7CHV>Zv|fls2spy|bw<U|6`^/cCj8.cN;J#2yUz{J.2<>[)<b1K/');
define('NONCE_KEY',        'BnjIohb/zwF-Tm8G|Y(^$1@4:Q)6!*qT[k8S*C7JvR4M%xi.]Jrlx97#I}!9D}]K');
define('AUTH_SALT',        '@emqhy){]@4exH%od&H,y^G4tX7foF?jTl@`Lv)9}kKJi4!<l.FR*/3qK;m$av)r');
define('SECURE_AUTH_SALT', 'v5`|a(Ht=5-5B1Hsg{usa-**}JzDd q8nEAyB(l(9;$]%PHJvHomQe:PbFv#pO/H');
define('LOGGED_IN_SALT',   'bB|jzvMiD!w$|SgTI@&leNsmRlG;!@n N R`%K5,np47<XRR`v=+HxaC3y2?vKpD');
define('NONCE_SALT',       '+z0Q9};w_lqop~,+xK,EjxDq<7N^$SI-365+nH`:x9hMX&u3d%by4gFge}T,Q7Tq');

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
