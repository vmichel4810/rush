.0<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'rushgit' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');
define('WP_ALLOW_REPAIR', true);
/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0#83i3#H)S+vynxrbrhocAU>QlgYrHK#*?u->migDlCNeMp6-w)`WGn1Ax@u3wGt');
define('SECURE_AUTH_KEY',  '|FR0,2m+/iT+F~S=WG^OXK;:x7L/C[Qtn,Ad(hn.)oLMC{;Q2|q-xJ2eYu2`WjWh');
define('LOGGED_IN_KEY',    'CT>6.8}bHJ]!+@pBd>M@T]r+Djq *DO[5YnDqS/cXH16M7f?eren; r 5+/<}mMp');
define('NONCE_KEY',        'J({ec$NR:X$ADOY&9grLNe(m+#RrlAPyzbBD8$y<_Vp%2AbNw9N2AuJ5<h@Wg1|D');
define('AUTH_SALT',        'F,4Xs:z~^^#=}w-JE_<b-yL>$H{f#XQm8XL#T_Ewc$N[g#*ER;ssuyY&,KH<~tv^');
define('SECURE_AUTH_SALT', '~1RwU40%6AD;V0&{MMV$:=}/Va+.b37-A|V$(X#YdbXC!pdN6PNm^k]vVj)qCAr>');
define('LOGGED_IN_SALT',   '|;y;/}UQ_JvGuqqct.f{{Yt=J:r@J+MA4V$;+`XYJ7x,0(~6_*a8HE|=qvKKX[i|');
define('NONCE_SALT',       'i,G>,e}_Wga~A)b7`Ij%QNY~-vx1</&nrIfH?~`,M>I=`|Zod+m$`&}v7ydxwr1N');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
/*if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';*/
/*define('CONCATENATE_SCRIPTS', false);*/
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
