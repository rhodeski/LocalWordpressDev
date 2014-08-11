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
define('DB_NAME', 'LocalWordpress');

/** MySQL database username */
define('DB_USER', 'localwpuser');

/** MySQL database password */
define('DB_PASSWORD', 'bPt6bGevN6Qz2nXj');

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
define('AUTH_KEY',         ':SE<o_Iu]eNb-sXhq#CPGy(iUnwHjH}~NrlOyj$Kbo[fqCm,+WX= -WHC+0TcOGm');
define('SECURE_AUTH_KEY',  '<o{0]N29yVen8K#L8Sc<*S|jN6kk[-AK5|WynL;p_{bi=->gu9w?Wr/L{zE$<&iM');
define('LOGGED_IN_KEY',    '}U7&2hqRTOO=6q^o]v-#(M--,Pk008?Z&8jG#&8`0ET%z`!pm,{VwiZ+LhS6hK;=');
define('NONCE_KEY',        '|+InL}ZFdSJR!3lTGwj~6z_~]B_YVwKfGh?m(>~=Dw#;6I-(:-lq*3+>=N@+S%`5');
define('AUTH_SALT',        '1@5ro.MJPy2yl?;.5gtVb1@G-BUH)]=fH PF~Jvc7/x$By_P,OL6+Ma-#GzK90sV');
define('SECURE_AUTH_SALT', 'w=/,[UB2.>f~xLEFi;Ti5tb:lqc8Yf+uU_8|o|W#-JqtMuK6y?$xda-)]n_+<?z}');
define('LOGGED_IN_SALT',   'va]+bu6,Js1o~iu(|SVg+vSAsks8hw0:dOy-}|i/O.46<PKQ72aTEgr@1-NK0IzU');
define('NONCE_SALT',       'qXT=zqJo$eIk3w;OpI^ce|:|%A5H)4LA+`#U>,s+Ze$|QrEfY:ae=n8ds%k9R!d)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
