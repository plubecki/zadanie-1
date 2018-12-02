<?php
define('DB_NAME', '{{database_name}}');
define('DB_USER', '{{database_user}}');
define('DB_PASSWORD', '{{database_password}}');
define('DB_HOST', '{{database_host}}');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

define('AUTH_KEY',         "{{'XQ2o-r*C^8.WHC]s,??St~o%eUC&PMiH0HZ|!r7_f_x sg@OBoFpFcN5NY436Bil'}}");
define('SECURE_AUTH_KEY',  "{{'%a,mPT8Oj9a>7jAHw)cpUfs+?pj{A9JrMH>g;+.hX+,Arv9jE;~W}X^`?+ot`JAI'}}");
define('LOGGED_IN_KEY',    "{{'@ yrU6A}{a%u/#o7]BpjIi}EVI-:A]O/lae{p @yHCA7G]YH~e~v3eL)O}}95v&['}}");
define('NONCE_KEY',        "{{'S)[>`?0hQ)nx8DBmdFdJCMpiO|M1&WJNh&a3W6BEZs}JRYS3!K6PnY V0{#5no5('}}");
define('AUTH_SALT',        "{{'I)jz5dg(cfM su;9`B&OT;&85^~eY185^lb~=r [!YhGK7Zjhg}{-uByt[u3Ru]2'}}");
define('SECURE_AUTH_SALT', '{{'HsTD4zG;%Qax.wJ7F[.d@bS$DaEnFw[cfc:_[34/!d~8!S9[sA~W@*n~F`.QZ_05'}}');
define('LOGGED_IN_SALT',   '{{'8)V:6HN4-:|W0xR;W4,f=ZqNPL(KE-<w3c+:vE#a*_EWKWS#K)YkjkM.C{H$@0ky'}}');
define('NONCE_SALT',       '{{'*l9Ot]7&<vY54 I_#?L[D- $QLCyq<JAFP.90;1Bzt_o-B]8R@aY^`Nm#wBBFOUP'}}');

$table_prefix  = 'wp_';


define('WP_DEBUG', false);


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
