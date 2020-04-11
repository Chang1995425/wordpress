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
define( 'DB_NAME', 'info' );

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
define( 'AUTH_KEY',         'A]6Org&(3{]{CGKj*H8[Oc)&8T-l/>b^/dt+u{=s^M}ac9< |29e@1> {H<]|m=}' );
define( 'SECURE_AUTH_KEY',  's=3?d=HlCZE]Y~FP&]Bg& .!)UYoq/IIr*&F1*LAU1~qOH{px?G~%8CFVBc,C;an' );
define( 'LOGGED_IN_KEY',    '1e8ck=]jR?-7>9tIiSiZWuk6TSf#?AbKE|nS&>umB3i:Mz:9MbTAKa#,#Uf,.~nL' );
define( 'NONCE_KEY',        'Q#u@l[>DNugm*`3nx?EF>JsY!p4CVCc{0__gZOng-_IA;v-xEKyW*mn[U#5wN4ic' );
define( 'AUTH_SALT',        'jv3Re:x8A.ae~T[?>cbsng$S6-LC/x7s[bK,aJ** *C]]5?oEG? Xc2:@sX~`p`F' );
define( 'SECURE_AUTH_SALT', '3u-ZBM_i4FM|gaLfhF#jeMnc(?a-`]T-c+B~Ykwkje$?!#xT:CRzL12M8-;jksP(' );
define( 'LOGGED_IN_SALT',   'R9~O]RFTemaj18H>._pAzkS!%Bt7(G<fY*h^b%Nu9d&6W_g`Y6[tuMxnHkqUg!2r' );
define( 'NONCE_SALT',       'WUPY9L+ju&1nHR<d/VWZ^}UrN_x]5/De!ckWK0I5:t*HL(w+uW [otg_5!h`n#& ' );

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
