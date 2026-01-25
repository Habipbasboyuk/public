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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']:#Zn4:(P$$4TA[T3+EqqH<)HYahIQ$ta#n(LU(gkyoE)C}wLglyNq&>&u;;H,8<' );
define( 'SECURE_AUTH_KEY',   'YQXO5S2{$U(/A|x]`1Q)k{}6HOj^!nYK3I.f )*rTMDy_(<I <?g8:*9{.>hQuua' );
define( 'LOGGED_IN_KEY',     'Uwi,n3l./FcZqcNL:&|`0hg_j^b._E,JscEeVsax`2*dSn^Qlfd4k?{2WkjFYNTO' );
define( 'NONCE_KEY',         'dQ&b9Mh5nd=2`?D6+T%mt)>aaVq:lBooA>alz$?IY4q5 h_~Y%Z]i[EUH_WhC^[I' );
define( 'AUTH_SALT',         'u!7E0J8.79K4Lo5+L0Q(T0[cMB6AnbHsa6I7Ts$b9(v^L;6?NK6%~f}pHBNK/2|4' );
define( 'SECURE_AUTH_SALT',  'AGOd+LDQ*Y8vihK+WRSt^5F]uC0Z@ tX12w`.+3IA#xnn-T`7uv8@oK)$EHve9G/' );
define( 'LOGGED_IN_SALT',    '!6.@Wtcc^p=HN`[p^WUNeJcgRUS_?/,#[rF]|:vZD0koIG)4M3HE7ctV-j(:.zwP' );
define( 'NONCE_SALT',        'JKv*Ka6&B,@7b0zUaL@Z%pV^W[+/b>kW!v5wEYx=J7pZR%TX6zVkzqKIL5`E}MO9' );
define( 'WP_CACHE_KEY_SALT', 'yzm Sk8Inaj0Abp2-4F[.)!(}([rFfK(:i40P:9:ZfK_Vjv33t~C|6&| 7f&CI5w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
