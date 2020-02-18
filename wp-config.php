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
define( 'DB_NAME', 'magplus' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@2$^p.69mY6pJS6~b1O>_GCi/)9I5oV#*z-Q;G&<J=1;R+pxvRRdT)^1a-<:?y#;' );
define( 'SECURE_AUTH_KEY',  'S,$+@.d>+AKgLG57]57Zg079w:!7DP?Jd1)wQan.Xe?BQr /H_v/bzf_e0MIB8wt' );
define( 'LOGGED_IN_KEY',    '.?jbGfprg6:p7@iO.Cd7h1DpU)@=uspLDDZnST1b>)J85@;/[%U]==9 z^B]*{[q' );
define( 'NONCE_KEY',        'Gud:q|Y]RN&[|m=(E7S{LqB62V%yI<|/dtW`Hun.!t>zf!k?x(^qKp*rNJ0Msp=Z' );
define( 'AUTH_SALT',        'M|]1_?qR1<pjA0?n^XU_|(^sG-&IB>+C1. SL#}L+fNntqpnX$q91s~k5/kI6N[0' );
define( 'SECURE_AUTH_SALT', '~NSkqr y^AwZ&u(R*O23% O*$YUIBQ0g.?;YVDxwl7*KicF^B0~/1{}g|^DD0Yc-' );
define( 'LOGGED_IN_SALT',   '?NN2WP>%e.fJEXW!q_=3,tDu+q{uU61RJek5=7.zDa]m<;}e@%;:dYL9ma7#/!%U' );
define( 'NONCE_SALT',       'f}AAW2vOnTt|4{ip7&Ps@VTf-z*FGQD1T[M6J6MnBo[g?NI4x+JPfv9mcM.}q],#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
