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
define( 'DB_NAME', 'wordpress-dev' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '07y36$/9AqFTZ)KpYUV1,hN}_lioEU>IKis`#%Nk2m`>=d=t1/n#naLMFQUm}O;d' );
define( 'SECURE_AUTH_KEY',   '1tiglitC U{}al!|jn4$wU-@:z}jHcj]Y/ZM;l>iQ+zLdb+e t$Cb*(Mc~D<o}|K' );
define( 'LOGGED_IN_KEY',     '=/1I8genWxil. U>WoiQ+~%C} pvt7~;;ps`nF6bk[`iyn`/7RPm.Q^JQUUxJtAr' );
define( 'NONCE_KEY',         'TX*a8ZVz]qp;m(>So{[4tC|3V~ [x0N(7QF9~Y24ptG6x}FU)TVXGNQ>zuRn2o&?' );
define( 'AUTH_SALT',         '[Jo~c#5`s[x}RB.*.EkT$ 0y])c7FHcb2/hq|Gh_M2G?Q;(@KfRsCG[0Ep|H+j&9' );
define( 'SECURE_AUTH_SALT',  'QOLb*jyb1{cJQ3>%2PqL3/M{i6!j8I-@x&qpY84{^2;vd<;G3|sDv]=-RS>YE.Qx' );
define( 'LOGGED_IN_SALT',    '<.c,`[0o`#+JP)3]w^IQq+e#~:+T-M1 ?WgZ=)F,p<z{=h1s)nB[N6^M&8GQOhj^' );
define( 'NONCE_SALT',        'JO8`2gnajnJTO&@0IVxDafxq|7!(8S xh$Qwv1Og~K 2]<Z;OOZ+CdROm9^yY%>]' );
define( 'WP_CACHE_KEY_SALT', 'RwQ!apnZ5WS~4az=,hWG#fmE|X:)WXsMRo9]W+26bBnX(T.,s.r &`K/>8+9gk!S' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
