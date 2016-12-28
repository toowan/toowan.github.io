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
define('DB_NAME', 'toowan_blog');

/** MySQL database username */
define('DB_USER', 'toowan_admin');

/** MySQL database password */
define('DB_PASSWORD', 'tran1017');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_general_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B2Ka6bDI^3Trog-rcSL/OctR@WMGj34?+ `aQTKp2h|8SLxBdRN@/bdO+P>1R-#-');
define('SECURE_AUTH_KEY',  'zc1UY3Qvc6~2==b|ew4o|EU|N//sW!sOThJ!IQ*6 Wc<yR(KX&-Qs=?6&Hx|dvw&');
define('LOGGED_IN_KEY',    '!t*sgC7L=5L<RA_T)CaW#J}!NB9{4&N3-sQAJET3j;6IJ4eSxb,j% N/&6aoV:%N');
define('NONCE_KEY',        'a_MKy-86$Hw9;G/oKGRu|x^+f.EZp_{G0:~y3F:svQ|s]9UL6<@x<:uFCB^mN<:-');
define('AUTH_SALT',        '@=+fmRE}hO2x)MlYO]%+eF:f#82C%kN^clT>=0L&x_q{eY+epP(5/96n87-#I9-H');
define('SECURE_AUTH_SALT', '%Old=.e+pwCcasf@vxu rGwg61(@-}|q5t<nrJ9$D;Y^r~& I|sNEiy&`cR<c0RU');
define('LOGGED_IN_SALT',   '4q/Nb4|0?eHc0Z~rO ~]n;tranCd^=#pHgn_bY8|^S&0g(Vp+jAXF*-uMLfa^Sa,');
define('NONCE_SALT',       'THB?p<6rhq`n1lA%2J#>Bwt}mrYrZpg?>!6d$7v[.SQ[W(nQziP-(4R0KRt|&eKv');

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
