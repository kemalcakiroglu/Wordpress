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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'wcpKohyoKj,Lr[FsqzCPR.*fccKV`dR71Oe*mc@cn4&kk}Hgkq{xt{*c-_DS`un8' );
define( 'SECURE_AUTH_KEY',  '(76VyoK!@*FI.ak`0:7pRy]n/N7N-;76;xRH`**JZ3iE@)_lhb&kyrQ0h2MfS-d,' );
define( 'LOGGED_IN_KEY',    'i^Oa<w(lyXNZAE|=LnpNsv6UcB&Gmbl4`JZ#[#W!1x{6`(&nSg!gp-{oTIALJ~/b' );
define( 'NONCE_KEY',        'u;[sXc$6&[9&3&C,cW=,]7~S>T57A22bGY/wg=9wYu.BFq2+(;Fsw>;]dm)}he?d' );
define( 'AUTH_SALT',        'ENvKf~Le/P@tPCjDJ-~n9p,m3#B/`[N60e;rDPoE3nFDJP(I`7m.3&r<tbjX[-QV' );
define( 'SECURE_AUTH_SALT', 'qR[^`e{i+068+vY7L~bOOn.HoFvm|{-+NUV/<ak]g@Q7@3Bw-?hlVF;m1=DRqZ>c' );
define( 'LOGGED_IN_SALT',   '/PuHe(<ag:yqksRtp]>RREN5dNrFWsJXvrKk$(~53p/8d8-78Q7$ {7?<|Zgu!He' );
define( 'NONCE_SALT',       ';frHJmHHM}n*-XviaC5?HT(*vH.+/toE@CliJd4gR_IxtP+B$`y ^+~V%cl|9i1q' );

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
