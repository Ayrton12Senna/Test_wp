<?php
/**
 * Temeljna konfiguracija WordPressa.
 *
 * wp-config.php instalacijska skripta koristi ovaj zapis tijekom instalacije.
 * Ne morate koristiti web stranicu, samo kopirajte i preimenujte ovaj zapis
 * u "wp-config.php" datoteku i popunite tražene vrijednosti.
 *
 * Ovaj zapis sadrži sljedeće konfiguracije:
 *
 * * MySQL postavke
 * * Tajne ključeve
 * * Prefiks tablica baze podataka
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL postavke - Informacije možete dobiti od vašeg web hosta ** //
/** Ime baze podataka za WordPress */
define( 'DB_NAME', 'Test_wp_db' );

/** MySQL korisničko ime baze podataka */
define( 'DB_USER', 'root' );

/** MySQL lozinka baze podataka */
define( 'DB_PASSWORD', '' );

/** MySQL naziv hosta */
define( 'DB_HOST', 'localhost' );

/** Kodna tablica koja će se koristiti u kreiranju tablica baze podataka. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Tip sortiranja (collate) baze podataka. Ne mijenjate ako ne znate što radite. */
define('DB_COLLATE', '');

/**#@+
 * Jedinstveni Autentifikacijski ključevi (Authentication Unique Keys and Salts).
 *
 * Promijenite ovo u vaše jedinstvene fraze!
 * Ključeve možete generirati pomoću {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org servis tajnih-ključeva}
 * Ključeve možete promijeniti bilo kada s tim da će se svi korisnici morati ponovo prijaviti jer kolačići (cookies) neće više važiti nakon izmjene ključeva.
 *
 * @od inačice 2.6.0
 */
define( 'AUTH_KEY',         '{VrO}<;W58l}<i>B*?X.WlhV^/YX`q8,yc%&CoZapPpSTEM_<qB@W/2^5n:{P=X6' );
define( 'SECURE_AUTH_KEY',  '|uW:DKtE/EXnW1Q-DpMSrZ$(Kr}<emAnl,ViP~3e3S9]+i6O9s^5g0a:J.SNVj|h' );
define( 'LOGGED_IN_KEY',    '@mQYi}bASUw1nY^O5&9wSxG<T6*Os.7)aMrFl}Q#$(9v`=y%V1kJ$#g{~)2$ZE4p' );
define( 'NONCE_KEY',        'O6pm@&/LU9+xJED1>2ZF<z%KnE4$RIjF+`[$XY6Jk](sUQo#u954(dF?KVvT{;Nr' );
define( 'AUTH_SALT',        'Hk?YL&i|;S0_n3/1<]~2KA,?qx=&@K)sD:/Y!=qFyS4@Tin>`|:n!-xi>I^d  L`' );
define( 'SECURE_AUTH_SALT', 'p:VQGigJf|cZF8</bf,Su`T`*?damtsoAp;)}4O]PYB=OGsn>IB38!r=R:!XU(#G' );
define( 'LOGGED_IN_SALT',   'k7-v_z}cr&K&1{x.no(NW96=olYZ4n^iw)CN!7y&29t3rq(O^RGgDc<7~4wy/dkd' );
define( 'NONCE_SALT',       'Aj=u]#O[^K`#be*ku}p:kB<GC3hmHqQ*w/8i+?vm7.u.(fBman=BH0#bl=O_M[((' );

/**#@-*/

/**
 * Prefix WordPress tablica baze podataka.
 *
 * Možete imati više instalacija unutar jedne baze podataka ukoliko svakoj dodjelite
 * jedinstveni prefiks. Koristite samo brojeve, slova, i donju crticu!
 */
$table_prefix  = 'wp_';

/**
 * Za programere: WordPress debugging mode.
 *
 * Promijenit ovo u true kako bi omogućili prikazivanje poruka tijekom razvoja.
 * Izrazito preporučujemo da programeri dodataka (plugin) i tema
 * koriste WP_DEBUG u njihovom razvojnom okružju.
 *
 * Za informacije o drugim konstantama koje se mogu koristiti za debugging,
 * posjetite Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To je sve, ne morate više ništa mijenjati! Sretno bloganje. */

/** Apsolutna putanja do WordPress mape. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Postavke za WordPress varijable i već uključene zapise. */
require_once(ABSPATH . 'wp-settings.php');
