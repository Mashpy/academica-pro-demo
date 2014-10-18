<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rakibdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' de,/6!KE^JH/&Wz6gY[0ixNvYT@z9Z-8s.(eg4!|p0r:!!/jsesf<}g&u%FCQcY');
define('SECURE_AUTH_KEY',  'AbbZMFQ-Hr U1K~sU%ilUI=14+4SXe(#J:k&%<=m}tB_-RsfJV_|Kc =tt%:A]V5');
define('LOGGED_IN_KEY',    'y9Tb?Wov,}H_d>6q-9R_>Ox:i#AQIUkK5%ZNoC.|rTompJ#+HX(kldJRvU W?4uA');
define('NONCE_KEY',        'IKv|&gL!$(WIurx!0z>d6(#Ol_p<v5/deuT3^y2/=pP_]6:O9[$>#]&A3o?tj|d,');
define('AUTH_SALT',        '!n!U)cha%8u3|Tn?va:RM@oovlGyUI_2c07v)pb.z.Va_dq:HTcg-qHMxWv1i}l[');
define('SECURE_AUTH_SALT', '8<({Z6bGlYOju#h}YA|9g!>y>2Rs6&>n7Br4kd+[SJN.{#Xi/Xib0aH|%8!>#H#=');
define('LOGGED_IN_SALT',   '`I H~iJdQdHh2QC@7tD^D/*|Rwt7;CO`XD45lVxh+jt2R:}6Z7IoP3 tKS~UBv$J');
define('NONCE_SALT',       '-Mf:a-o*8?Qy3-IR_+P0[?hxRZxE6lb-ul= z7du+rLL:oemQEqUu=KH9M/~iLHP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
