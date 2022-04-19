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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'UC}IW4yKt7<Kw@+*bBdmH32GOfEE..lMkR9F4^nGrK:y7VW88eaI7/(z2~77-{dw' );
define( 'SECURE_AUTH_KEY',  'xs2:@-5?u^-t7?2o1pwdo3)M6~2|S9o$v}pawfJd![*+x$:)^}Z8W=m1xX.CCVT&' );
define( 'LOGGED_IN_KEY',    '[Zu.^PEKQUI=JF=ro %?-g+88<B!7puec|]]rVi[8<8>(Lx~Bzcp@:Oz E|Yj85u' );
define( 'NONCE_KEY',        '~kdZUA&84[vIN:4<s Vd}#Lkl!K4XLhEmo)sfLb*#k:<KlHXc4cL(}>i,N^c@CYY' );
define( 'AUTH_SALT',        'qJab2J2-dY[q#6@p2F ;kQowToCfy6<S8x0On,*fcA&a+}2wlx(C6<FrXF:7DffF' );
define( 'SECURE_AUTH_SALT', 'a~K{5f;g[t(z_lDFOO.M2UDRzx`?Rb_Z0SUbG^8rw6LJaO4RbqhamNT):/!;K<UG' );
define( 'LOGGED_IN_SALT',   'er,[d[$X}sy-)N.4656-i^ bup03IAT_vvIMcAwQdEI#X-2RIbw.`d#1*(kBde6m' );
define( 'NONCE_SALT',       '5,lEXBZ3<LM4C0&_9lR2L|wzkcyA+,FJxTZtd6@hkV?__)y4`@*Hg=%(h8|)kZt_' );

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
define( 'WP_MEMORY_LIMIT', '256M' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
