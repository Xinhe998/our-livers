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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'oDm53hxXtclTqzLORiHvG4XQjL5UwAxSGjWNMN/r0A586OBq6twfEPcaOQ1UfcTQGTplDzI2mlAx8FIidyhhMw==');
define('SECURE_AUTH_KEY',  'qL5aZypZGEErTBVNhRL3+1H4gKHKgboLMGhPuAtRG3q/dZvZZ4D1Dy50EQY9QCVIg7+XWxz7cLnDjJWuV4MGDg==');
define('LOGGED_IN_KEY',    'U0FGFEPtdPki3hxiGQVUhmKP71XA9/pcQOOPwK3f86bB5wIxyRwnZbaDGmKVBUGAZ0UaEL9gzOUPH98tooL05w==');
define('NONCE_KEY',        '3nwA3SzO+bniTgZyQ4AUFBuEOW2Mj6QHlLPPfj/wDjS/t0iRDtNE1xoyoQO3T4W/awc+LAwuyHfj7oEW5S29UQ==');
define('AUTH_SALT',        '+nuixGonwEpLa2R/R1iZDYLYUQfM75UK+Lmk9dUyOmQN2Om0AWWPmAGvmV81yFn7Xl8zUAFSvoDZGqZLYKZgYw==');
define('SECURE_AUTH_SALT', '8DiD3R5EJY71mPVB6sHNC/PflLFwA+v9v5QqcudkYJzN7jllk0hhqTo8isz/lpMm1wpWgETZktlp/uW3P2cHyQ==');
define('LOGGED_IN_SALT',   'Qx0/37+8mP01bf+ErbXlF48sXgLwNQYDJreNkSFwqkhP4nCiLDic43s+CCn1FpG4IBxbhMsxzzVZRmBkZ5GwKg==');
define('NONCE_SALT',       'qdCq2tzRBbcZ8lmDKzMIVtKNyE+I6VBNcfNewF4oM/aszvCnlNzphBZJKMZAPEwND2rQnXb0wcq3I6Bg2TUwRg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
