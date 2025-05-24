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
define( 'DB_NAME', 'Actividad5' );

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
define( 'AUTH_KEY',         'M_l_C7<BUS8:fv$H&v6LT3}nHe+#!<gglZ2E4pTxrwyd%94bTSkz [V9d/2kz2zc' );
define( 'SECURE_AUTH_KEY',  'mG^EODC[ g/CHYh25iuhB Il]!mj]Oz{@e*<A=8cM:eeLiSRDZ59<l me~}t(Vl@' );
define( 'LOGGED_IN_KEY',    '[bU5U~6O@U(pH||F;=yl))68nPxR=q_buLw`kv|!I5.$LE>?/FWODnLMf;O/@)Ew' );
define( 'NONCE_KEY',        '#eUlJ8N[M<hlAV#Ug T]A78^?:S`.]Y_$6Ek%%B9L3]fPf `QVv*}8Fe&OMb)0E>' );
define( 'AUTH_SALT',        'vi)<%%sonokl*lI#PQ4V[zf,~Vm}-c<  ^Ku|%@*yEEleVt,![G716#F.;hJX+je' );
define( 'SECURE_AUTH_SALT', 'Cn)rCF:+%$~3TCx,w%u[aY-<P8P4w=#1(--KY&Q. SlM;r#.U&qnq^yG`#(h<[4Q' );
define( 'LOGGED_IN_SALT',   't%-^E[m`*5U,KVkel+^u9hEW$U9X/#iwS7%aNG#BERE/ZMI| efmqhB-bwLUhw>u' );
define( 'NONCE_SALT',       'MKC&~4iN}N}MS1$f1oA+.nNHhcNIFl*|.n!?sg}v0)),z&Bwt-]8m+*Cjl}5hxgv' );

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
