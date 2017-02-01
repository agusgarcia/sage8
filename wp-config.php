<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'sage9');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'E1A%Oix%lkLVKMJjSXc$/R6s8dd3Y0p1aLc5c(O~+K9?&VIlOTIvc*zJY uOo9[F');
define('SECURE_AUTH_KEY',  '`1N;~CO7%g<pSR~%q+cvgSxCUvBKky%?+)$b4StUy=N}WVNq_PyfH][A:SM-~D-m');
define('LOGGED_IN_KEY',    'vDYYs2QA6A,J01IQ*tEl&KFyb[#/?p82/(xS1u)-+I?vh|$0Uo#&L/yT*,Cdj>n%');
define('NONCE_KEY',        'xg55+,,Tlu:.>uU I4s^qScsVoU:,%%o~LJuW*UF_;C(2<!s*xc+Z,bH5FIru^OE');
define('AUTH_SALT',        '&aQx2{A&Do>l|XM-],ndgp*m&W/Jwx#~S%nc~rf}oAc<<~xDs_^Fk4lzTX&gCS4H');
define('SECURE_AUTH_SALT', ' $5F1[2M);IMpa4O8O4(h2f^S2IUXEGb{;]5gH8SXipV}O9RaU;pLkAb#!?Di/co');
define('LOGGED_IN_SALT',   '`kW%]3[B[(eb~~-gn8xk+~^hxHF+gm29fjM82Ry5(E9~jajn44!AC0dj~Oxa[t#X');
define('NONCE_SALT',       '( >xq!@hoZ(!vHy{F^bgj2S: #wUy5KWCY(g@AyRAIqtvh6I]#E!x}a2BEzN-$Gf');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_sage_9_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');