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
define('DB_NAME', 'gaiafp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'yBX{IzV}D:C,C3vIS57+q!cXuz$ior~|uEDVC?VOo1N%ps_=yR>H9~r +RXw@c5y');
define('SECURE_AUTH_KEY',  'n KjEku,>gG+R9z!S%/A/IS5+bA;GdmtU643NroNT;c~D(c ]X8VMRA$Bo,&W)BS');
define('LOGGED_IN_KEY',    'YNXuUVLyocAFz?w[=axUDWK@Y8@dXw[HIbQ]A+(G&^MiG&.^4mc5iQEJH-U~=q+/');
define('NONCE_KEY',        'ety~S:iJ$zI4br|p[kR5|ny q+SDxscp2@m*@!0@-t4>uH@ie?[7*ow<Xf<@V33,');
define('AUTH_SALT',        '^(0Za-Fxw@MzX&I>Q5Z,!};86XF+#e$5~e2uv/S(]c0Tf8oCdD+XAmagqbzb?e@O');
define('SECURE_AUTH_SALT', 'b/_[/r*?St%d<A{KEQs$XHkE7J>NU<[E91Y~?gsS-7@K(p,C6!q}TdP80/<m2b5I');
define('LOGGED_IN_SALT',   '+YsB~gcS;RGENnM#K-kT n8+lqFzg7AcF$mZM2PIC9uP(QGy99jpPYVb{Aq-rO?+');
define('NONCE_SALT',       'tsUJ0m#gom[E4+?&R2t*+R.$lE.Ask<Bo ?L}}sBCeP+{B1kLnr]]jCTRPY{CqK8');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
