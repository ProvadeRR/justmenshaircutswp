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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'justmenhaircut' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'hydai}pCp*kYBNMP0ui8G{)^8k $9RT&ZxQd:a%y2ntrQfL761W>)WG1vLizaN[X' );
define( 'SECURE_AUTH_KEY',  '@Khg)VGmDJR82AP]QH] _7&~n=~m^<lk+XM|8%vts&jFT4 ~Jqea9Ct6+1$5aM@|' );
define( 'LOGGED_IN_KEY',    'LqDIQVw$Dx>cW#)lZVVV() M+X24Apdf$O|pWWPj]vmR8|l71LmMyQzq/2nGw}Wk' );
define( 'NONCE_KEY',        'Q`1qw/HjTi(?7QXff|%jIlYgjrg^2Z_T4?o};Yp_lk G0MCa0pZj?m2e@H+E.#?|' );
define( 'AUTH_SALT',        'd,5T~q[-gtcNp*;##f]1is>5gchm&A;Gd7Q`tZpd/H2=}]nsO?}Ic|ZtVG~6$t-O' );
define( 'SECURE_AUTH_SALT', '-fQuRW68D6JS@=k?mHb~=^@s^4hJA!PR Em(:W:2Y5e/|#_Rm(Kuc%PP;/W<nhg9' );
define( 'LOGGED_IN_SALT',   '4Tez|UF:!qhl6TRSU>gEV%5Pt6uMFEu/{TWg%NjTJox:iY@Q|1`BFvYr^,ce&~(F' );
define( 'NONCE_SALT',       'wmZq5O^6^qVjU<ejiK2nT/OewNG,/pF$Ek/?2#;btDJ7!3ro1PKGs&w8-^R5Z;O/' );

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
