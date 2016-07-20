<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'n94KwP8+s-# )f_Itbp[TQ?~WA|mp3QRs)+y5sXlg;K:GcROT*>sbB|-CR7; o6V');
define('SECURE_AUTH_KEY',  '}bwUt$l|z6BEg7[EP5ZbG5A8eVs|FOzanvG3_&0:Q1ynu#_5;i]a!)t6*oNnm-V0');
define('LOGGED_IN_KEY',    'gR8Ep<-b>:zh,QLvI|iF:!S2Pw` /Bs15*m`JV:@[pKQvH&L6Y5@Wcjz_ai}<QV=');
define('NONCE_KEY',        '(g1HnAkXDu#B%Z)7@yX4+}:r$IdF%Ayb5P-r@How@<!&h[jfG<<wwj_oj;gmo(N$');
define('AUTH_SALT',        'bY}GhVxaE$srXDhfJ*JvIzWnl#{-{aQh]|L7$#/x,bm+T/;;erM#hS<4<tC%;GK[');
define('SECURE_AUTH_SALT', 'Wa;RJV+x&|@Ef!Mhqgi@D*3rEeOEf#fwTqcl&D@Y1GxG*chICdA{0Tk&T1AoU8kv');
define('LOGGED_IN_SALT',   'vY[~iL4EHm+sCo /ye*Pi<fZ5{N2XdBrr52}Qb%j1@NHJs|:[C@$byRiLm^.m;:}');
define('NONCE_SALT',       'xi{Y=CP}j{[fc,y*Q@d[$.{+<qw+.BI`|&T|?m|JjZ3|><C]{>Ili}%GyLev8Y!m');


$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
