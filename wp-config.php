<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portfoliotest_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8H{(e=6Hx_U!fG#5JfeG+ub+PX~X6Uo$)ylKl|]Zd]oT;^AMLF>-2)}_C~j~XzhM' );
define( 'SECURE_AUTH_KEY',  'd9N;!vA)NtmNV+1$N&)<-aF*~I8~qdv<H8p,L_?64[)o#tAuj]LCikTxFuu=ITTf' );
define( 'LOGGED_IN_KEY',    'O<L*7Af,[NfRR7^>lks,E1*~9[e7t5B1$$lCYN7tayM_OK6o5CL/R=IvuL)-X&}u' );
define( 'NONCE_KEY',        'Wyg22afO-f;tAQ&MrxO$V,Z(f#a^X2dDZF)K#P4x BgRYoxFUws,8^_/wY@pzB_?' );
define( 'AUTH_SALT',        'koQrO4?YL06IGP5M*VAphs)JH1oh>!KL|)8Hz0E]c#DxF{6-Ezt>oPj@r>JcC]XT' );
define( 'SECURE_AUTH_SALT', '%:(GB=K5}QHdMc&7`ecD+[D}%7$,Kz0=g{{z8=Q6kr: q7W?2A,Sr[pZ@.?In`^Z' );
define( 'LOGGED_IN_SALT',   '16d@?l.Kb#,AOK^Bfm%<@bNQD9@?]HlyX1*D=8DVE:B0$JNLy&ZwGIrM}R[Y+,5s' );
define( 'NONCE_SALT',       'Sve_&kKhTt&6]T|Lcu/5|(nBLEQnrSf&s+f#i.A_gs$SM7iDP,[tkEmv4|:KsIV_' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
