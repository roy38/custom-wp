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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'glabs-th-cloud' );

/** Database username */
define( 'DB_USER', 'glabs-th-cloud' );

/** Database password */
define( 'DB_PASSWORD', 'htfz4CEQgux2DEtFGFaa' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'GqS)EaUy,{wFQx+T1dIPsIlfY4>xQm-ejsBspR05+tPPK(%?gbbx1RIV#iY2^.+.' );
define( 'SECURE_AUTH_KEY',   'F;}3)>O[JERjYB*O$&JO?CzIGXEZ2;6{K1k#f%IuD^^(h#RyO1L#*B[^9#@47b?F' );
define( 'LOGGED_IN_KEY',     ':C@%g^#]d.._`nto%{({#,eXEyvOSKObxshaR<yyPdWigo]wWbd>OH(fS4^GCW+>' );
define( 'NONCE_KEY',         'WzdTVKqSrO]B_-IYBQ[_Q|yubj2T1PAXs%)K+J&)U}Ux}SF8Y6He&AGT;QTFCH:s' );
define( 'AUTH_SALT',         'K6wmYgM6n& eWGE~-b.]C)FBk+S1I:gV`#WXQxP~,]@8^bu_F8d4GzX~kBo6{s-?' );
define( 'SECURE_AUTH_SALT',  'd]i:,Hy?0cVRBjHu$0MPtu.*zU2ln_YIh2?zdm[(S!;lo:AdpY0N1?gSwbr%3  (' );
define( 'LOGGED_IN_SALT',    '; 8O^+ YByq~Z[8agYt`0*A](.[zg2n!}pxLVb^9Eey!dItE+oIp(<D/~Ca<^cC!' );
define( 'NONCE_SALT',        'P4x IhG^1eJ189AMGrG|%BfbG-s Q^#m|xIed{(AR?$eVW>}K 0N21lNp7;$,Is)' );
define( 'WP_CACHE_KEY_SALT', 'SiY)Bjw>h1yWkAP:brjk#p0)pr[>VE=9)zfK)ctKkL/(PRz) eZ6&Zpoyx|]k *E' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define( 'WP_DEBUG_LOG', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'AUTOSAVE_INTERVAL', 600 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 21 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
