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
define( 'AUTH_KEY',         'e+Rbos]5ebR&pw$vJ:)3T-@}DqxaqGMPx8$q7-!haGy#xw=iTg_l%US<+=!#wUWc' );
define( 'SECURE_AUTH_KEY',  'O8SoH5XrM,!QOKJ^UW(eb:|:mLqL|z@VSrR=B(:!I.85WAfB+Q<Iy uKE]9({SP`' );
define( 'LOGGED_IN_KEY',    'wD9^>8eVDD,m<grk6k]NO_5QWV{{8@72Rsl`HdTo=+#{BOLO)^A }c7*kQj@.sEv' );
define( 'NONCE_KEY',        'OcEhvEeygZf`PpZQFvKw#8F.psj5VQ;>dfv%,a6$Be$fO>_fa!vGROYL6<bHAj!Y' );
define( 'AUTH_SALT',        'q1ZCoT,0mDCo/92mS<$`QwdVc$&42h,i$/]rXL4E=/2}oecBgiBcg{*@5zBR/6<R' );
define( 'SECURE_AUTH_SALT', 'C>,j@t,9,$yR,z=34~:F7Ob(ZP~Ss[}kXTj=:UNS,FFDp.lFjnfFb@+V4U{>{5E1' );
define( 'LOGGED_IN_SALT',   'BaVYVMt>1AopyiK:Pv-^U/{*I:&$1o5dO}>0q%BZbHg|sRXqSb>z?vYQgLJIK{2;' );
define( 'NONCE_SALT',       'I}&h)=;TcDJ}f:>oHa)dj/!jn(RLP8bWyW~bxhAX9ZHBsW9*]E,_Ulh^Jf3=x1Vy' );
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
