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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hayemje' );

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
define( 'AUTH_KEY',         'kK_bq<&MOe`AzPRCYZ[ON@h8g^ui*Lr3h{/[f&Z+zZn6!$`3=F*K8asXCW?a5DZ|' );
define( 'SECURE_AUTH_KEY',  '(0k&N){x8j4J|z2Dv=P/FkjJ]vu{.~ERo|fkHR{e%Y`CjJW71fRb0/J?k<*i9= g' );
define( 'LOGGED_IN_KEY',    'TyYxf?=$oTRH)<Q/S|4eqWtE.1Xj)-|Jk85:uDpk2c-n8Cr~g(+r5k>KHot}.mPn' );
define( 'NONCE_KEY',        '{ln~6lsf_h}(&.r[be *ZM#F>1P<oTA_V3)a5;%-2i=8yC|AMIUX=,o -*hhTwIq' );
define( 'AUTH_SALT',        'y1N%<,$[?51#`i^{cqrU*5_>T?~QOCl)@L8=(5c|oU:N<D>Oqx_oR(3-$0w&)qJG' );
define( 'SECURE_AUTH_SALT', '(zhv72]4FG+Ic>~fr=D%|,olI3Wn)`9GpIf&n2H8t*jb6>rR=!Y^`y/2D%??6|aa' );
define( 'LOGGED_IN_SALT',   'CpJbjijW;%Z,7I0 [Gq7qjJHYM}7`IH4pyl~g9WgOzz_7~i1@GKw{~Igs|moc}T8' );
define( 'NONCE_SALT',       'j. =ee71#3EQ+K}}LI-24?iqvQUZi{h9Lsl+Y s,?$(KJg16R/x#6=eu8&Fh(-{a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
