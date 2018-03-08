<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'life');

/** MySQL数据库用户名 */
define('DB_USER', 'homestead');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'secret');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=.Q#c+aPS6;w]`d@3SaU7uN1RSO6%>4-~4Vm Hxw#ERb,3q(o6OG1w!fdhytE~E&');
define('SECURE_AUTH_KEY',  '|!U0[Cs;rs)VI <1|}Ec?u1)OX4%HLsPVxv&>}4Rn<>$:zSPHOOjc~Cyx=%pW5Zr');
define('LOGGED_IN_KEY',    'a-a5d/mL;6:4fqh(7hw:ifz*m:sF*;(5[:1.kk^s,bAIlxsy5&R8]QH|D IuEl9r');
define('NONCE_KEY',        '8z=P(i&S:%Gn09Bue]z%eX&+,1>6}9$3U97ax*VqX3U g.O2[40CfrACDn3)wVtg');
define('AUTH_SALT',        'l+C~&]:21HjFh_%:u#4fv=hU4b(XklmQQ,K9;%@kH=r}AyP%qAK]+F(raGP l>W^');
define('SECURE_AUTH_SALT', 'Xjd|Wz[?Y?xg7$:%uR[9v=!kH?4/L>J~xwup>b}8iA;yS_l)41X22pW>^)2``gur');
define('LOGGED_IN_SALT',   'kRsM2KE[2xVRJ/}q2qZs1g;L*9+<5j;w4f6|;aFYj4<cL,H3YaxGE1JK{bN93^}s');
define('NONCE_SALT',       '-#`f$$xxUO<DW`|<zI8DN?Hm~FiH(h7XmW*E*AOW[hlx)#q?Tse<uxLL_1)n%<:T');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'life_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
