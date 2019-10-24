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
define( 'DB_NAME', 'WP_SITE01' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<kzw^&)xivY[0?7xe@g<qfoEi2tKY:Dswza}4X0Blh!V[@h3 +Uq87yuD9Ij(f_q' );
define( 'SECURE_AUTH_KEY',  '|)~3T4?$51CsYJ+q!B|,sWvBJ_I2B|V Zv!*6Q2Ad^JZ:@,%p_-Hz;-gC.s>kO3}' );
define( 'LOGGED_IN_KEY',    '}Yeos{-5jAq(+>y)X54ImB;xeHhqoFHF6g0g ih[:XJxg|tv`Y%zi@.,SPukv-Kl' );
define( 'NONCE_KEY',        '_TTR(f|^:<m0Vd`DCf3]J{ZnkJ<!arxhFcd?Zz*1Mm^^-}z&rrg#N=V;N5 7:hRr' );
define( 'AUTH_SALT',        'lRw,m(7Lrlg@!&(t[N/4p+U;^-zOsWv/iysgZQs{sW]/?HFD/l~wS`yYfqxX#&|A' );
define( 'SECURE_AUTH_SALT', 'mQ#uEXke8%r$_-T}vq3@xCV>kt7!fb5B11I?UCg9WT<z[ef{QYOF1F*k N@OtT D' );
define( 'LOGGED_IN_SALT',   'op`lFQ&cq0=P09i+KQRVq6w$]?`w)2R_0{L:2t`Pg3NRb:JH; M)nyeeRRlW2mV ' );
define( 'NONCE_SALT',       'BV (3AS`pG^-TtVB0KVA8%qr[Oe[!-h[V,DcI3&zyKgiMl4V6xh ~dh;HRFu;-9P' );

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
