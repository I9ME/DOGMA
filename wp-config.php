<?php

/** Enable W3 Total Cache */

define('WP_CACHE', true); // Added by W3 Total Cache



/** Enable W3 Total Cache Edge Mode */

define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache


/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'dogma_dogma');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');
/** O tipo de Limite de Memória para o sistema. */
define( 'WP_MEMORY_LIMIT', '64M' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Pju<KIv99z*qaXY?3CFtY7:+2h[-6_3p^E$=d&5qO[r$&`)9j <Iu#d-_Fte#_L-');
define('SECURE_AUTH_KEY',  '|+&Em?VbGZsc?KMc]Wt5b&Sba`LOsZLT|Iq4[&dIs:GJ04H&$-nI89>5uvSd|aA,');
define('LOGGED_IN_KEY',    '+Op@Lr#,NfXyzFly%gP-#<%BGO Bf#(K/&F6>3@9V${++?VX6/]tVbDKZU>~vt[r');
define('NONCE_KEY',        'FU>O!}u@8c9+eB>w&Z?*`,V1.6Z%-Xw25OIF+^a.Y|;52nN:|KiZ?wq&kXL%gQE_');
define('AUTH_SALT',        '7+ii`Q[^-gy=6n.pP0H@iG$Q/5Q4d?N{oL$7H=:_T?NK;n2j|D9 zq:SCLRmcMpd');
define('SECURE_AUTH_SALT', 'Mf{|W&UPlDuJ2YXlx,a2RTf^aA0-%`>:#qTGe|)+V2,VD7(%xq|!^ ]GOEL=D_,!');
define('LOGGED_IN_SALT',   '~F|A$|YZP(IHz+ZeUi|z+XfdZm?Yx^E9LibV2NpBe>EoPh+w$8Ib/:,>P`GO-Vn!');
define('NONCE_SALT',       ')6/(?3]lpE7FTc_ M9f-y|IetEGt;J@6<s4U}sz~c^{9kS7QzcMnBItt|LY|%k#A');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
