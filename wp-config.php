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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_botiga_cosmetic_shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<|5QI<S7SN5>aexC&[VykyR;7zp5D($nr.6?k/X$y_=wGBF8fj1t$E7jU0stE`H8' );
define( 'SECURE_AUTH_KEY',  'i. x+.G!v<o^Z%r6|mua[5&Sxe 5}:cScND5nb{r9C-r3N&A7Xm89T,F,|:I>%EX' );
define( 'LOGGED_IN_KEY',    'vZPrqIRub.VhpB2o0n2fA%L,9Iu-HBe0.AuyeoNN1m3vPBnZ]%T`?r@lbIzU+Y+5' );
define( 'NONCE_KEY',        '-,fSATGF*T,3>J7PZeb6hKrBY;oNG:+z<3WG^Hd.J@%c~cZ >;;UX+WN{g/7PIaT' );
define( 'AUTH_SALT',        'NW$@Kmnv+#;Gpp }*xP@-*VlRQIlm=|v^_Ry6;Q5oo*Z)tEyY<6a[QGtUigOT#93' );
define( 'SECURE_AUTH_SALT', '>Q1RH s37)`}wD22b<RJQItpgb z1kJd,} eD=:%1pzq{Q#Qx6ml?>8|db*v;MEn' );
define( 'LOGGED_IN_SALT',   '*AJdgSiKXp+,hw!<G!+eFbIA|Kl=Trfe]IYz+g2%LRq0pl[M<73aAxwyjt:.ib*~' );
define( 'NONCE_SALT',       '8dv0*Ew$yCuCwyq Kcth.Z3+ln>y##h(R!EEYrY4`Pf:~Pv+Cs8 yU3RvN1rxDT%' );

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
