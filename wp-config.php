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
define( 'DB_NAME', 'beamm' );

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
define( 'AUTH_KEY',         '^]mZ|IVgt/:|09%9D!1}K]YKn[A//$-C9B9$f35#=p>;cRyV//+p=Ncvfx#J/ln0' );
define( 'SECURE_AUTH_KEY',  '+w7hP7>TX=;4<avx)q-U.HcC2T$HgA&8FXQF!7y`(4JsGr;_^rV9L1XlblFVT^%6' );
define( 'LOGGED_IN_KEY',    '}BJ]Zw9ZAlj5+daoFk+^p^;poj~{Z{`.auc>l#Fl9/WFY(nhdR=F>`8LB*V:BA?,' );
define( 'NONCE_KEY',        'B<Y&/?%$r.D!. !d$D,$7|$CNRvj+<}I9G.?Q<gA5nCx.Kta&[N<a*vQ{I=_.}<z' );
define( 'AUTH_SALT',        '#;=ugF1]OC8K(+#lwb-*m`eBEA)L9$*@)J#:%;:beo[`|PjXD++b@eu7 XHE[b~H' );
define( 'SECURE_AUTH_SALT', './-FL~JUaY:fd8nf(v(2Jz%4JyFK/phYMPIONE*1iq&|>E.#c7.R~VRK`dt}IoTO' );
define( 'LOGGED_IN_SALT',   '>0~}^7@gf$1*w1UA tFlm%gNM~<((= {Jgwx1}ZoREjhvD<4J5n_33v8m6CqGjk^' );
define( 'NONCE_SALT',       '7:th ]_i15p2q4a;[@EZDF_0uiViSWd,uQN:o4ophJ)3VrBNiLC<Itvu34|A-8@:' );

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
