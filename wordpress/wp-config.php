<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f)`!.O :Voy6y|9GxwGs@;o9KXf2V}sehIqcK4WgXK_~B0VfWH|rSCmG;3H126v<' );
define( 'SECURE_AUTH_KEY',  'D;9aOV9(9)fjMTe%_D?L^.|TfDar?kRH?5p>r:>m6LgI>c1@R.!>.(SO@)U5ox=I' );
define( 'LOGGED_IN_KEY',    '],qf&@>v;I;R`v|q-p9e^{8g};d1x)8QLD0q#V].H(47jV{WsGo~6K/u?ZONEm}:' );
define( 'NONCE_KEY',        '{xKrB?QEZ^PS. T@ 9mD-XRAGmC(5BI/vGolY9CdWW:S`D6a,:+?ja z)7R<)*S|' );
define( 'AUTH_SALT',        'tj&+g*6ETy.q65k/4(IGTPi|]&zR;h-HqrV1{.0+u~RnEB)U6I$|L7t!&K#Elhm6' );
define( 'SECURE_AUTH_SALT', 'd${jKrCCnz0$07.T/fmef9=1$pR:L75!,?Gs)ar|9Hn>R65+Jb&k+t*?]t%/H*Ld' );
define( 'LOGGED_IN_SALT',   'Hr1=`%TSvYs!q25{!_@Zk1>C5;BC~Yz-KQ<ED^fhX#r)VQDyrrgH@ewoA F^qdYp' );
define( 'NONCE_SALT',       'b|~k{TwMR~E8Gm5EQ[d/ED(L~6i!7bm3~ZAon`$]s+FbWY>Li5^$[GwpR4?|Ue3j' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
