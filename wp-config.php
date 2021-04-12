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
define( 'DB_NAME', 'balajivilla' );

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
define( 'AUTH_KEY',         'u5C*Wa|rMD3[iIk^q)Wm>yJBF4Ifn]`QtPodW8}b92=,+INI_&pOTzC/x5p~_p>Z' );
define( 'SECURE_AUTH_KEY',  'k=)P7`J7yWE@? ulEvQKQNJ9I2o-bw8!<%SrxO<J9k+|c}+-lQ@H>m6{zBkIF,6@' );
define( 'LOGGED_IN_KEY',    '*KIHNu?nwY|,zY3`VRkTF+;C)iP5RyY&C:6)hk)()4b(Y1:bqePKQ7]S?D+/ :zx' );
define( 'NONCE_KEY',        '3uIN !W=}K^8w^T|z8IrTAri%_O7pl|IT5HN@tU`Imp}:L*.Q`])F1xnqSAM&+b!' );
define( 'AUTH_SALT',        ' N%GMg-XlaxCO72rb,L2IJ~2/# :KX&[wA&|?rK}<V;8[KjXyfqvM8^Uc7E+Q{tf' );
define( 'SECURE_AUTH_SALT', 'j(pr3wC!bJ, T!31U9t5yP)E@sI%Da,YddJLMB=@9*d+-_F@3HT-H;4CRuTaj3lc' );
define( 'LOGGED_IN_SALT',   'pan[8i9!#aI$^!g)z1C8@:#5 142h&G>^.]KH-s#:I[+v9DF;|e{Om*Zl7WirDh8' );
define( 'NONCE_SALT',       '}1}q6$NDIj;P,O!E[&o(O-[=U- r2SW$z c_)iX@}RJeaHh-8.p p`-#dVAK 4R^' );

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
