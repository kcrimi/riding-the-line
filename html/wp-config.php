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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'b1cycl3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q$E4@:&=Pv&] Lx-`~oC$[v*G@2dw][548DzP7=Ok}T-k8,.;s;G6~,q[{$<it.&');
define('SECURE_AUTH_KEY',  'v>+ttF%VuruDXV~aENV6>k8Bd J ?/6CnAc<ypO+;,o{9!E&e1&]9++Wf;[KsWmk');
define('LOGGED_IN_KEY',    'p7*TtxS)8-2X2;,R-.EK|qgczz-+:OG[d36?N*[nqSdI1_-%]N-Rr.mE0{JtO]tB');
define('NONCE_KEY',        'mc2|iGvDH+J:2p8ER0`dCrYTa:vdb!&,k<3c)>8RAdW_&cgN&k}yRRHrr(y:S!#-');
define('AUTH_SALT',        'X&[vb|Ddq |Cxf?K;UOEm-kpU(T{JI-3Y$NgZ?!*=gwv>$rsO|g-<t0:N-y?nl*r');
define('SECURE_AUTH_SALT', 'jJnlNRw2!`>)#ZQxNY,z-^P].dE9_Cj!S`)=Wt/ewQ;N2 yS|%2[4}U_{U%E2<u=');
define('LOGGED_IN_SALT',   'Pc)ZwYh=xvYNb2lve]3=Zga9)F4b99d0e+KoaM0R/1FoWSG<?x|IC+B~<UT7x|Ok');
define('NONCE_SALT',       'e5`g_P8N6jY`~FdU1}./qVNHw|YK$q0.HUmo.!qK&41P YzA}|b|=yI<B1cRBF*y');
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
