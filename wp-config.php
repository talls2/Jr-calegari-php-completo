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
define( 'DB_NAME', 'jr_calegari' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:8889' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY', 'IZ8Z^V<>P|Tl(R4_*}273~1T/VkZF[ug``&uIZu9.m}N2{%A#,2dY!QZ<3&sFR?k' );
define( 'SECURE_AUTH_KEY', '*1PwR{P*.D^EZg0,%FU<INDPg~gF~]%=xaV]mvOvOQ]TuwG05`kv~H>U`kk%>(Z]' );
define( 'LOGGED_IN_KEY', '{I(UW(W.#+;^=h>am[O{3A[$x9qBRry(5L[3a*)(|T:keo7*5*7AY)&]3{(~B2,9' );
define( 'NONCE_KEY', ':QU.>D^l HT4|Vx;~eL~ vHD|>rYgG<_Z]iH7$`NI?d-OP`():)Yw!BAN0lv_$`U' );
define( 'AUTH_SALT', '1 m`dM}9b{l6jn2Y-_,Q J~U1yyGr#J/Q$MK]^Xm|jKf#JD2,c2P%XDVM`~i*oY&' );
define( 'SECURE_AUTH_SALT', 'w{6=3D_#aHxihs8a3MU5zB.c6MC5>7DaM B&6/9r&Ep}Mz8w:/fZm5lR{eFH{=O(' );
define( 'LOGGED_IN_SALT', '=xw?w@L5YGa!^]wuT%FMvp[O<v``I}@N0xOZOO:q&jzJN{L..DPyRJ`dc9G+}]ac' );
define( 'NONCE_SALT', 'aG JZJL]/Th$.ysptiYNcx86n5^#JV[w/<9O%*%<e|l[T0n*;1@rBR>G,@h=~y3g' );

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
define('WP_DEBUG', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';