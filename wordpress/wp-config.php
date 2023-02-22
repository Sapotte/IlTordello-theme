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
define( 'DB_NAME', 'cefiidev1236' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(7a~[/A;73av!Hy]h:BGEJaKzU`oVRFXd-u$()Fpe}hy&Nhsa#W7;%l^o96=m2R9' );
define( 'SECURE_AUTH_KEY',  'Nq1zA?4;>2I3Cvc5IU,l.egWl ;BF,clI3?CN}UNo(#mK1QGt%E3,z_~]O;6H4W%' );
define( 'LOGGED_IN_KEY',    'V>pDq_nqspLWj(C&dAehN!k[kORFy@j]?9V7>^@q)A_U`T(erhBRJ1z.,yC5`}w_' );
define( 'NONCE_KEY',        '`yYxS@`Bi e&ZTb6L1/0sr[+x~^uik$Bnm%%w%MhDX$:&~16$=}M`2J;V0(EN#r$' );
define( 'AUTH_SALT',        'y^CLYD}[<M9EktmEmZ:V:M!PPHC4bXpCz7e#<X)xL/.GseAA.oTI,]5nNLsu!b(%' );
define( 'SECURE_AUTH_SALT', 'pHk`{!u{c@ z%X/Zc[^dCw*ElL(NlmF)dSxzO1fB 5T3B`6CHMKb!<b 07pvXTf6' );
define( 'LOGGED_IN_SALT',   'fcJ`R_p9jT. l,)s?Ap)Uer$&^JYrx5EVr8I{?YS;ga56BI!AD?p73HeRJj?K*O0' );
define( 'NONCE_SALT',       '3T6%T+y;4X}}:lwfK)}RBlLwDn+0;e;I)$K|cI1*z=e%4#d%9JzAhxsQo28I.8L~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'tord_';

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_DISPLAY', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
