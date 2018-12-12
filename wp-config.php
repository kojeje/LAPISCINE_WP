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
define('DB_NAME', 'lapiscine_wp');

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
define('AUTH_KEY',         'Rkgxt-d6pkKFKvs]*]0B=ER3{z[JY=Idl6K<4QGXaZC;RG![.<=nyuzH4HGiF(ZB');
define('SECURE_AUTH_KEY',  'a2,w0lsWCg4f13,ezl&Iw]Cq_Y}z2p~pS5=!Usz~Gzc3uh< ^Y=`:Z$t`_(!E1_E');
define('LOGGED_IN_KEY',    'zV,gZNA yHqhe({2ytZ%[{7::ozWC^os8h)%9NeTh$Xeh~hev_GO~3Co@`Zd5j*J');
define('NONCE_KEY',        'vr_^;1vuOd_IHL~).O,74yNR~(Fwdcu1K?7Y>j@YNp:v<DF9rDHXB}V</lym$/X/');
define('AUTH_SALT',        'vOcg <R[xrgg$r_!_9`0N0Knr.+b36j`AV|YqK so(-PQ+[2>YqizYT!$wLNQIAl');
define('SECURE_AUTH_SALT', 'YP7?:2jQN1qG^REb$ *[l_pcQP(qXg(=,7Ov%;m|U7B[]k0P_x:$wSRmHW*J/sSo');
define('LOGGED_IN_SALT',   'm;*=}$M`ElK[6e/4O!r$}+G]$vVN+3.:i>]hXO-K>558n3Z$)-*J6d;W*?oERFx?');
define('NONCE_SALT',       '([c*tdP.5:1UG!>v!ZazO/UmgJIjGjCbU%[kB~w}?0;^e]|y:aYuZ+^V=_rO3H(c');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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