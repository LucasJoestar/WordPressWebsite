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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '2.f&qTS@yRnI0~n2wdG!nX%}ISOV?`YgSWHq:yuQIDdf6T?T4iey,N=~kML.$JLb' );
define( 'SECURE_AUTH_KEY',   '8)*CX/.^.=5-AiyoK>$-ZLm-6p:[c,|$bAQSnYhU&^b+T)fwXs</)7.eX4lwP}8S' );
define( 'LOGGED_IN_KEY',     ' [mI>~R[3C9=NdK~4hdv-vmk)OcEy!.u|uhohv0ZC9<6J{G!ztikA<{.DB7WBrzt' );
define( 'NONCE_KEY',         '<r#P._$!f?GNUwd_7g/.zE@#2ArZGZK-q84O`i[fE0&~a2I`z1G$n._+DESf/I?|' );
define( 'AUTH_SALT',         '7M-_#NBh!z6G$3IJc&bV%q@BZ-ss+AY;{DiWFf>7b]iA.TE=L xp-sFP*M^TfX&A' );
define( 'SECURE_AUTH_SALT',  '0fv<-N>GL.vMxtr$^:Sf-Xa#D(XEZJE](3FRr`G+ g-aOedn_2>b}yVj3E*qlP]d' );
define( 'LOGGED_IN_SALT',    '1Kv<Zeo~{$qpqkxS3.)e+_.D?UFy@s_itOrfz?${ey&MzG7n8n*.mO@=IAvtJJ]@' );
define( 'NONCE_SALT',        'K R#-27jt<rA%#Bzx?YZ7-#6p,lI;og6#+j)4G/#<CnG:r`@j4x]90Op=un6Si!/' );
define( 'WP_CACHE_KEY_SALT', 'w`m!X+^Oo0wy~ERj9]hv$.)?CsHt [ZL5TYN>$g;_mIu4><<Jc1W!&D~OYU3E<*P' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
