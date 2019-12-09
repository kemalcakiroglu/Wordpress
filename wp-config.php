<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-UHe6->.wCi?N~cJLep]~D@oZ;_u_yvJi;aMmoYZ7#3e+(<J#ai5M92BGWy6QN@[' );
define( 'SECURE_AUTH_KEY',  '|@AG_mj)`!m`Yo_>pQejlTFHp!o=U~sY]#Kj}~9d @ iG~?>t,gU,bb#RU661lYS' );
define( 'LOGGED_IN_KEY',    'Fo{A:nAB>FyLelSmO!UEA(UiS_rI9&MZ~E5p.:E974P1egezpuQ!!#Qhhn=[K-56' );
define( 'NONCE_KEY',        '`-$zEad^RR:|nOaqQX5(C@G|KS5T.&W4Z`[xPZNI9,H$Q577_IxxEp0CpM_]@gdJ' );
define( 'AUTH_SALT',        'ee=A}]0U3!v%rx+~a 25De_BI6|eIDx=7d<wd$NvU(KZ2}bt;hqh,7M.h$RUJR*|' );
define( 'SECURE_AUTH_SALT', '8w~`Y;hsIi,:M2)/13={:h#8Yf`S.I>_^zX5[:Lpm5G>T.gm Zho$ C^%|jQBKp0' );
define( 'LOGGED_IN_SALT',   'c34Q2gH?Lqmxg/C1_Wpl1$Tf%M>aG[=) _V`i4,0JQ<se[ivWO,EAp@0s^@2y:Jd' );
define( 'NONCE_SALT',       'OrCG nDwkZSeaHlowR!rs|cEoG82?UI4hyb:MoN!68dfBgd(}_pwOS}M!SH,O^4q' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
