<?php
// ** MySQL settings ** //
define('DB_NAME', 'nineteenthhole');    // The name of the database
define('DB_USER', 'nhAdmin');     // Your MySQL username
define('DB_PASSWORD', 'gl04yp'); // ...and password
define('DB_HOST', 'localhost');    // 99% chance you won't need to change this value

// You can have multiple installations in one database if you give each a unique prefix
$table_prefix  = 'nineteenthhole_';   // Only numbers, letters, and underscores please!

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-includes/languages.
// For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

define('AUTH_KEY',        'Z8KKI33c1b2mzbc9t0EhGR`m:D={g83o]nsp@6Wd+*U$+JC6lP;%AFE(~I7u!*Hv');
define('SECURE_AUTH_KEY', 'T^OkYJ{m|YJ-<v&o&yJbEz0[phYj7|xR5,mZ:FA=d<OZ*<-Q(d-pNE55pL@6(,L~');
define('LOGGED_IN_KEY',   '&17@9Ptry<2TVvZ|r$!=]S:%_GrLBN!vAFjE )Gy^71b;|Xx|+ONk(BlS9|usx{n');
define('NONCE_KEY',       'J~dPY$8#z% a(>%Bn(,EJPcdWyhOk)7ZN2u?AY0-mA^8Nft.y4tZq-Iksez-0kvC');


define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');
?>