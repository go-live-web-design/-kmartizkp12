<?php
# Database Configuration
define( 'DB_NAME', 'wp_baseballco1dev' );
define( 'DB_USER', 'baseballco1dev' );
define( 'DB_PASSWORD', 'BM9Pk0npT_WWIhViy_Y8' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '(R#V+mCz3XG]+b|<ag*C:nP:wpV?|TTjCd=DSIm:(5]k{@#nWApR[;B0|m01H/Id');
define('SECURE_AUTH_KEY',  'l}q/^h{J6#IKu$ Ao#L`4w>:$s*.B-m|gf1=A)UxI9t{GW}vqTX7(/H:AN92-|o[');
define('LOGGED_IN_KEY',    '|pmp:+/6jSC5*7^HnMj(X^eg/Or<!X|~Qm`5+wPp]AfjYMl8.^/nB++Sx~X949l@');
define('NONCE_KEY',        '9|vFX}u]rbM-[2l/>[YTI7VlIr2?]2pjo),thXkN#mnYbHD-tu2N1cFL!wF8cIo-');
define('AUTH_SALT',        'eLvJFT{Y=b=#%<.3o(y+.h|-;y;3W6ZyFnI:~Y`&;|7,B49S4Ic/bb?M$iC13PME');
define('SECURE_AUTH_SALT', 'kO-$n%+>>K# c iChbTkssC/D5Y|kX@Oik(l^8x}y|`7}}_;ve+LF7Yl/Kh)b@Gx');
define('LOGGED_IN_SALT',   'HxKf|(ZKaT]Bv-_6epK*;B|tnv5P:[$JKeDZI20CSHXVN{(Ljdx_p]&7NZCn|zFb');
define('NONCE_SALT',       'u|WL^|cMt)99AQCur]#PW*@^ Fx}$syu)o|eJW*n+-N?:-d&VTk-%1SMq.MUyZ<]');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'baseballco1dev' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

umask(0002);

define( 'WPE_APIKEY', 'fc498ac6525e9d3a83fb5a42cd6eca37ae6c482a' );

define( 'WPE_CLUSTER_ID', '101059' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'baseballco1dev.wpengine.com', 1 => 'baseballco1dev.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101059', );

$wpe_special_ips=array ( 0 => '162.222.178.91', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
