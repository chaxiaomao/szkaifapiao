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
define('DB_NAME', 'wp_kfp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'o:U=vE|8rCJ11nU U5~ /[Gu!n?:d B.LL;|&TEmbjDXf)^Y.;xejlH{B{B:T!{b');
define('SECURE_AUTH_KEY',  'AdO-Iyg3}kV^i3bL^u`ojba A%.@h1OB3b}8i2SVZq&}M>A)2XngZ,l?@>)a4n[|');
define('LOGGED_IN_KEY',    '<;~4:U_#8PD=b;hKd`Ke.U:q>_URBZeqh~O(T]HmZ7,C`fNJ99d].NkIUPVz(%:j');
define('NONCE_KEY',        '`owc,?_{TjlSLy32{pa#W2)`OYG>d=Ge)^$%t<1OhB5HN*`$/PJYQ7c2Gbs022>v');
define('AUTH_SALT',        'V[dEK(PAjob@AsAJp,cl!.+:>BZ/<JgextwXo_Y%w+^Q_,EJHh4v]wfRLsCdi2(L');
define('SECURE_AUTH_SALT', '4AuQFAs)g<Io4-8`F$+zCMzECXqvDN>}qD&|Z{!;YsM&]F)RT 4*1R~IxqM=oVjH');
define('LOGGED_IN_SALT',   '0z3JDc<.lOo7m&5JkUR1MOfUnJX!~N=PA8HF;$JLv ZYK`W9@`+p;J1MNE:c<5^a');
define('NONCE_SALT',       '!T}F8M`n,R$h(.E]sSNir*n1=&O}_| -`aEFkzgA*mjD5dK )FHH?GZv0q6)u%Xu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
