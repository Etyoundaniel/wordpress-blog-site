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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'faridi' );

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
define( 'AUTH_KEY',         '=`RdF8x&eBo%mDwPPK?j@f0wypy-Y<`AhSd5,/D/e97(>fWx^P_:q/Mx$KmOv.>j' );
define( 'SECURE_AUTH_KEY',  ':7Y~?sej`vp<VPTnj]x=N)mx(7/Kt >5y^6qm.l=O}!>8!&>G?}a;7zOL7!.h%!t' );
define( 'LOGGED_IN_KEY',    '`ffg}K2`mi=U6 vp,V>k=%ED8HeJ6;H6vm3y7G2s>}=XahDAFVp:_Qo3z.pwry$v' );
define( 'NONCE_KEY',        'MWf980!|8q_:0V;tEzDss`)$6uT%s&m33..*#Sg}X+n5h;c+$PJCf}|QlG5|=S.h' );
define( 'AUTH_SALT',        'C$h_=K[`7K4xT{9<|:jB+}kI[6QUuKmxP$W1!<s8QGwi&8lVnBO}Bh*R%M3I4pgy' );
define( 'SECURE_AUTH_SALT', 'GkQj_%9[H?I6*P8*X8^TrMe5$1g}b:ztwdW|x+{m^._t7JZeGliQ58__A &oUmBs' );
define( 'LOGGED_IN_SALT',   '%G*ANjX82M cNZ6G/z@apy_k4GS,SQIbM{6,ekE!Qv^hJb`Yy/D~a5f%cx>Dd4)B' );
define( 'NONCE_SALT',       'g##Ur6;_]1eHEP;,Q$P}ZBs}rUg_3]iMv8_;n7OW7T&ud0@wPQAhrVR30F4oMQZh' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
