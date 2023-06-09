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
define( 'DB_NAME', 'reveilletamoelle' );

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
define( 'AUTH_KEY',         'Uxn&f5UV8>oA2!eP=<.8TM&_(B%m~(90r{_[~0z9l-^RG8(M&etD~=2;,3Uik*tF' );
define( 'SECURE_AUTH_KEY',  'pBu-]$!xfqgC?ZYWJsFIc>!&8LWJv=VP%A,7vuHb`O{iDN=A88T<e:7Ibk@96GgF' );
define( 'LOGGED_IN_KEY',    'pz$urK3)Th9)68vZAp!#_Owra;65e/n;j6<|&1x#Q2:n2<vacl {fM_o-_sg>;%(' );
define( 'NONCE_KEY',        'Q#9UFr7W*XRL4k BRG.:)EH6 Uo}|bD~`/u,E}15Xj9eKW}QzJ!zX=fJU_alr<@#' );
define( 'AUTH_SALT',        '<XS=X}?F|B/q@O!vs^gmwfNG*fGz 9s_,jxQQrjBCL=ie!E$B~7Dt-QUdkP xlxT' );
define( 'SECURE_AUTH_SALT', 'NeoLAO&cg1d$9XI2b|iL2IQT>PA4jnA`zE%2$)bU{<r :&~9&tXuW,D1hzcHt>rL' );
define( 'LOGGED_IN_SALT',   'H&)+rQE@.Jm|-Ba)l]BP%ei_)Bg4-W$t1J<rob~(?}pA0nyODtWW2$UIrDpdnay ' );
define( 'NONCE_SALT',       ']@]3GAfWP|*OK[-8b7$N}7KX(NGtF`v#4s-%OFYI3@xont&yivAx$8tMBieP@oEP' );
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
