<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'easyknow_wordpress_info' );

define('DB_USER', 'root');             // default local user
define('DB_PASSWORD', '');             // default empty
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         ',M^@<Y2E$qI{Nk~zz[W-]Af:Si?>1i$)$;=.{hkGm-@%d7MRkAs14vmR`n%3IGMN' );
define( 'SECURE_AUTH_KEY',  '@|FX)xw >XF 6zts^Yt},PUdf@O$R&X1F/Bm2-}u|?BZ^Qlk6/8wwx499gMpTtOy' );
define( 'LOGGED_IN_KEY',    'zGZBCQzMeDeD5sh}yP!%aIy0`g|5JeAA!YBZmDn}D)V>G3?;_.%m297?J=SH6tm1' );
define( 'NONCE_KEY',        '}+x2z@7qxCqF%JzaEbSa{Cx$0R1@ji5+lSa&-+It$[;V,uv}ci+CuOC%q]d3H2wL' );
define( 'AUTH_SALT',        '|7 B7F#ul9N&wBD-{0:g bNQE>~$`n>[ hv~].x.V[y&0I*Un1|+ZN}Sp51%dvyu' );
define( 'SECURE_AUTH_SALT', 'R:a@H5%>R!vBD|c[a. V8;43V75_aI_twS=Dx(!s<(4MC.S]j5L;G(U[iF$VjYsC' );
define( 'LOGGED_IN_SALT',   'kEX|5V%CpxX]?7Ze9IM~Jx@*XGi#{Y&V/Yk- oKb5=2_},CIE(KfzrlI.hS*kEUv' );
define( 'NONCE_SALT',       'Es^/5%jA_6iCu$pN%[tX,-67kJ=VK5::^VKhrC@MP)No[d=[-QGVt_n#G1I7qe1_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define('WP_HOME', 'http://localhost/easyknow');
define('WP_SITEURL', 'http://localhost/easyknow');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
