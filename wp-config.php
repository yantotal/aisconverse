<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aisconverse');

/** MySQL database username */
define('DB_USER', 'aisconverse');

/** MySQL database password */
define('DB_PASSWORD', 'N9v7J5i0');

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
define('AUTH_KEY',         '^{g{2u0|+ p&k]$+[^G9Gay|w?gPJgkf&<qf8hwSxczR2rd|*Jnp)?28}H@-,l.W');
define('SECURE_AUTH_KEY',  'gTdGqR@,s^PO[8:tAOn2u-N|Vxu{,NFHkb$mRo2O [8XWf Eve@f75B~VK Kl:td');
define('LOGGED_IN_KEY',    'iRLpe-ulE#P08b4o+a#`^3ZVYr5(O)7FMq-v:#-:Tb*9#eG{[ (PEtM+-foYk(Ug');
define('NONCE_KEY',        'W;d=s-]1}|8[DWh%&@V~s[ln-}x4-rr_kjp/o#M=#l=NrC[1t:fMjwVQ4lk)MpT<');
define('AUTH_SALT',        '#PuB,N7+=jdJN*(Z{XG,jpjTcw2fp@j@t2{3!$3`)+p|H_GohFMym#8zi2.*Y^|q');
define('SECURE_AUTH_SALT', 'eRf r23*58#Wx1~%BIH5#csAFL+wG YfsuG+)^CImH^U&1H]N&R?j<FZ2_<4Ij1V');
define('LOGGED_IN_SALT',   '~Zd!<vaE+#{2,[^ Q^{_&5&x0K=Kq%@oLc+[p s~3N8&#b.:&f<grZOqQ|Bs!Kcy');
define('NONCE_SALT',       'Y/SpjEm;MZ?v&X,i.eS/$N|nw-#MawVzW<cm{.g^|u85]t.g#J)x7#6}/I+itP_%');

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
