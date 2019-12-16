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
define( 'DB_NAME', 'boutiquedb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         './le9_YIRHNpWrIDfOUL1t.--&S1UC[J=!zZcZcQ#aXXI--51vdbA@OV)-ga.:(t' );
define( 'SECURE_AUTH_KEY',  '2?tw1|UV0 9EU>g[GaGv3Em`}gU|LwqDju5RXEx;zF/wR6w^BA:o)?=I2/>^6-?F' );
define( 'LOGGED_IN_KEY',    '9Bc!(cal&x.Pa^fW}yl<URSx{|.>18D<&jjrH.j2,]7~[aA42I rC;/7nA-t,XX*' );
define( 'NONCE_KEY',        '#tF39`(ioo0e>vS]vGaHKjST&NqvVG+^9G/lB P2Bt;6vRj~hy.%J@:T/3ZdwoqB' );
define( 'AUTH_SALT',        '5PMY~VPI`bX tW/,pO/YL&&(<:9~>ob]_P#d4m,H<Qm@}IM2oD~X<wXR.}}ZgrZ>' );
define( 'SECURE_AUTH_SALT', 'O=D4Qt2BCGYj+.}ir5$if8/v/RxJw4Tu<71-l|O35duET)mAQ5|Va.hRYM>!=($8' );
define( 'LOGGED_IN_SALT',   'B<cuV+=8qKBZR;jJe24Zb$JVP-CUY#P<f1D`flLUXQgT*Du3#`>h*K^MO1SL:.cT' );
define( 'NONCE_SALT',       'RG(1fg~3D@hnL,w[xT $plYVfy#!xNBB-%y#S5j*C}]Jj)2XpmWjL1GQoF?u^T8M' );

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
