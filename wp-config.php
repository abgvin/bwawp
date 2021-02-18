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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bwawp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E>Ig@opBQq_7,Z8^dSSj#CSM^7CQ4?y21pUpU0|3/_k&-[.68F60,R]?2Koz0g?`' );
define( 'SECURE_AUTH_KEY',  'w 94pw]va%n+nNa[V|F`3%VdNf/;2z3htitAiItd]ckD}L?l]vrP,q9P4EUhIi F' );
define( 'LOGGED_IN_KEY',    'L@y2}5$LGzkCybNq/|0*wS{[odvrthB5fJm< E-yo[ivL<:cC?//{76At:r< J@%' );
define( 'NONCE_KEY',        'vO*;h:q0Bz|`j.]L_ 5I~8KU$eQ<G#K_Z]E3RH(zQJM@{$SP;?$X*$f976{jC~%G' );
define( 'AUTH_SALT',        'r8p}.y i+E!?-yew5gB$i6Q4:Pfwk,9_fknl_jZbH^U26LP8E:#Qd{]QE %fz!>P' );
define( 'SECURE_AUTH_SALT', '$ mwAw8c|<ht`S.4s=(MbXX}YhQx)~07kn)|6IDU3JREn;S??j^1xOg%-.1p4KFR' );
define( 'LOGGED_IN_SALT',   'ZvX*q>2$Wx]NSvV~{6rn*5$LvzHQ~]U#>Hq|teTVj7[jhw6*Ic[+osaL5Bx3<VM{' );
define( 'NONCE_SALT',       'b[j4q xp_`^H?ya#>T|r_+d)hXnkI^9L&tW43?vZJeeh|,-[gorsP^]G7ASXp^j@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
