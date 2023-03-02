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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password123' );

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
define( 'AUTH_KEY',         'O}RV~r=${J1R*/w]8|Ex1eiDT[V0!M1TH,M2)rHf?Xk+c0TA=Hx2>Bn/il.$qy8+' );
define( 'SECURE_AUTH_KEY',  'C~lD6i<#ksgGn&Cjx6F]EDBGwU_J2cpM]|EGT.L:{zJibXE;>>YB-0D!~?N;S:D9' );
define( 'LOGGED_IN_KEY',    'sw_gQ/!M#9g~((w]#^i-`qhbvapxji&H^/!e%=hQr+eP|3I?C$NCeT!Qw#`rB<a<' );
define( 'NONCE_KEY',        '$u]XZ/g?9IH6~2~ EbF!4f|3W$]?xH{=8&>Lgl9U~@z71lh[q^$C=hu=Oy(w$h|E' );
define( 'AUTH_SALT',        'Av3oE|18>f2;V/bp3L8[<XAKf{l6~Jmw1o)+L-9^,3bS0k P:@WSradLCzlZVvtA' );
define( 'SECURE_AUTH_SALT', '+5.G1^&.`#n>U[DI2`U7TPY?)MEQZ&M#()62k[V~qlT:...Q?9E<ySCe(##dD]IO' );
define( 'LOGGED_IN_SALT',   ' N{*?Lm/2,v;wqJk(elq,eP_3OIJP^b^9@U{plu*;Bw~I`FF[B?iu11E#3G~PD!t' );
define( 'NONCE_SALT',       '4 ^x)ec>Uy!}zas`Jgr |,C.RUD@PJi2`#]`j~1VQ{.(UvUx$?YRCN6{!5VIJO>d' );

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
