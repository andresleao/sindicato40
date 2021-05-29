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
define( 'DB_NAME', 'sindicato40_db' );

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
define( 'AUTH_KEY',         'UnZ*_`xL(M1caX=.|4wUpOy,6e3a$KK&<:JDvDd.#EU=UF:s~RBL&6~v>skIb4m|' );
define( 'SECURE_AUTH_KEY',  'ta>x2&W{t:]jWJ5!{6q{mN)MMei-qW8t/rdq_|W-Eebc/bVX|(H^+dOGb{7d;&0Q' );
define( 'LOGGED_IN_KEY',    'L-rV^3`B=44ewb>pbr%h[vwfV6@Op0sZ[d0UE`{K&8_AGj)bzbPx*DLO{ifHErwD' );
define( 'NONCE_KEY',        '])>tldlQ{rNwZX#ku*ru4|/E6?hqafRJ>m%rArxmp1rl`X=^:SO_2@v?R)z[n1X[' );
define( 'AUTH_SALT',        '5Z8y]D0{u$6yA9=Y#< dfA83r^U$eRZ{QqTd9[)-K~-cX`BAZ^zVi!)5]?VJ{?<l' );
define( 'SECURE_AUTH_SALT', '%Qz2v^IMemN54QckeS0;NfOs%b.gwhp=j,Xo1w>Qq-oLf-bze!:TuEN/y^!<<vy~' );
define( 'LOGGED_IN_SALT',   'izzD,Bv9~I]eU]OgnhDLM]{iC@w`K+<)D6,9|eNzahR:_%4}BFPV<)3KQw*uf;o4' );
define( 'NONCE_SALT',       'lB0E*7{kvY!&B&X=`M{m_*O~jr((Boel)nki!pGBs`&9;lV,We`7Ph}e/R>3J3xE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// JWT = Jason Web Token - Padrão de autenticação via token
define('JWT_AUTH_SECRET_KEY', 'R*`%p|rb*}_:KkbHE5|Sp.IjH79tE/pc&=K4ncRH}d5/wh8:kBq|II0p7UdO!P?3');
define('JWT_AUTH_CORS_ENABLE', true);

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
