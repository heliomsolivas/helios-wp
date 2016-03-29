<?php
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
define('DB_NAME', 'premium-theme');

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

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' n5&kC&G-vtVf/vNn9M nufu.v0L _{~/TL9TS2rFBmwyr4M4|RiAh4v%}BWZRp}');
define('SECURE_AUTH_KEY',  'HqU~[KvOg^nS%b 61uq@B:+&A[4irB;?O`$L+mjQ&7a[CjTc]V)/.OFcLnzHG1h?');
define('LOGGED_IN_KEY',    'h^J6lt./y5c2B$._n,iim.qE6_%R&Rnzz=tU4:sC_w?Vl --,;9-rBK3enH{`[_<');
define('NONCE_KEY',        '+6ob*Fx[dqW>O-[]qUl~8`(:Fs W;B.y;yzNZTuVO9Z[Fxu25g}h+!/]JK8Z==F?');
define('AUTH_SALT',        'zW+?MmtPY?Z+Svq-nt$xiX9<}O+1oek$=`RE@n6A|>tn^c*j#P0RDD~PDL/:64`o');
define('SECURE_AUTH_SALT', '`UC*`9YI%EiIxuvgLXdE+f$Y]`nI.M>8a{j1-`bI1MbKX/!)0EWnfC#oSyY-D;im');
define('LOGGED_IN_SALT',   '](:`3HrZ^+PDMV!5t}s-#|UwI}SCAh|&2967JK<|Mx-;I-w k+&16A,+(aB2Hv K');
define('NONCE_SALT',       ']|H23h6j6:Cn9BJ_6^vGf$y76ph^I2xNa|)UN]Wj3iDLNP+qsbrvwN/&H<rSE+St');

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
