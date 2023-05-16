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
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~?8`*ow|$)Ph&`a)A#[Creh:$#B0_!R::;y.X=wV< SO`CWOjWPy4I>oZ(fh+[6F' );
define( 'SECURE_AUTH_KEY',  '~4VCV*>JE0F;0wyz<sgL#wg0`R/`Wwv-j.5gWol2n{7llNJ~0 1C]u`3RFkO9F1/' );
define( 'LOGGED_IN_KEY',    '$;LT(HO+,<JxuaqCEG;XK>/]4{,2Qr(HWsH[E}BL<)1C->@s7cn9=AjFe@t<-<^o' );
define( 'NONCE_KEY',        'W`{rCpqD_?hxiqoM)Vas#IA5}_G^14gF-#M2-_Ne#F{-}:IomBn;@fHt<]@zKyU%' );
define( 'AUTH_SALT',        'sp6MUU:$R=}j;jfVIIS/+M89}ZdZm06%jw<)Qa*-Am)>n@L%mtW}ipY,4P7jt0E.' );
define( 'SECURE_AUTH_SALT', 'bvF5RK^*~(m?=xg3Lp_U%_(z9qg,Y%xK3+qLc-Mu+/7n2qXe(03iMd CQ,:aZg%.' );
define( 'LOGGED_IN_SALT',   'IKW-a!o| pE^yO$:9KXHde@;^N2`^4*U<.]IC9>KvpG}Txlg(`/R2)sn(fxQ#>Io' );
define( 'NONCE_SALT',       '.Y2&f,eYI;x4i4cjywl-X18JW3QDS{r2[op#|RqWvSz9F+[l>,CS&a0vS[%BP4aj' );
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

/* Réglage Upload */

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
