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
define( 'DB_NAME', 'lawyer' );

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
define( 'AUTH_KEY',         '7-:FS/WH$!MJdMJhuu6Xqo**p*V_*`0j13XMVh|1y,27R,G/.so F)YTS7DzIo>-' );
define( 'SECURE_AUTH_KEY',  'I_HL7O^BFF;N.q`l[I7})+7xSV.T>#$i?Q!9&{8I2t-P?3OV|1EFoT(,9SW)=mbW' );
define( 'LOGGED_IN_KEY',    'R8%ZQyyq4%>[{<utO `YD#!M9^w&rX,[QaWPoJ/~{_z0|VcLTW$nL p>ILjjUl6<' );
define( 'NONCE_KEY',        '5&yj=Ch&SnbZ/HZ$CiM}U2<`x|0D&&H8P[WnP>^VyWz NWLYlt+0$j2jn};F2nP{' );
define( 'AUTH_SALT',        '_hT#?<L0lw(f%(1nt<JYHMwr;970Uay4[Yk{~MuyZl(,Mk#y-D2&h3h@,70)ZjQ7' );
define( 'SECURE_AUTH_SALT', '(/cf0g]G5jT!Di|ept{ F6J80Pq=X+}jK>Sjf?ZSYVDb$cQ37z?VK-f5}W#OKc/e' );
define( 'LOGGED_IN_SALT',   'PxAUFPYWhWph$Ir2T6>0pwbjbsajJ?Y%11Upe#7ZD3+xJh<loteQ!2Ur``jeBFuV' );
define( 'NONCE_SALT',       'I,gq[d$)V^sak@/_zCFtI6A*oV&!:30-0YS3L9t4?]A@fjcO6eB LmISa~kSQfoo' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
