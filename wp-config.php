<?php
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
define( 'DB_NAME', 'nolwennlp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '-=5hz-11bV3no0ej@`6/d[1q>pyHC{Y=&+Qt4JE6/P;D)o)Si+X0h$-Xy&FEd,g*' );
define( 'SECURE_AUTH_KEY',  'FP` Vo);u>qtS*9GD7*]cJlnj}~HiZ?=#g0r*;NTtzdH)(II=*<t;Sa{*c(Ugt=s' );
define( 'LOGGED_IN_KEY',    '+T.AM+1,p0&?zhAa~eJx^s>NCF(CiYKuup#,xIiC[&PUcRa;{[k==e,_kF}c7]~r' );
define( 'NONCE_KEY',        'TD<e%&V,];*A0&oP2YPCVuP?2y+fc.tL*.RGRRD8a7f,C}ccm@ieGc{o<c|Kq!{a' );
define( 'AUTH_SALT',        '`W5je?$5 JNH)[> vTvKcJeC*FPLFb,MYoTEjhJjT{+85kCFS&h`)e`%(zVtL<Xi' );
define( 'SECURE_AUTH_SALT', '-|!A @zW&uJuPu,rMJ:gU9q5?K:7<AhS;k*ZNO4N1Pf&^f-;WG><6O, AS9SNU:@' );
define( 'LOGGED_IN_SALT',   'rMQRGPi?.&sQ&WbK(gW?::~qr%I8mNOW{#%O^dm<8.78tRP@CePkY(}$X:Yc?SoL' );
define( 'NONCE_SALT',       '9]bz$K(h7%K7VUNf%jO.Z1RzL$7N}r+):dcdJ1.#msmDwq7~AS-Q3I;(93QK3X77' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
