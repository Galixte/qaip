<?php
/**
 *
 * Quote Attachments Img in Posts. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2017 3Di <https://github.com/3D-I>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'QAIP_SETTINGS'				=> 'Paramètres de QAIP',
	'QAIP_CSS_RESIZER'			=> 'Utiliser la CSS pour centrer les images dans les citations',
	'QAIP_CSS_RESIZER_EXPLAIN'	=> 'Permet de redimensionner les images au moyen de règles CSS si le BBCode « Center » n’est pas disponible. Depuis phpBB 3.2.x, il est possible de centrer uniquement les images publiées entre les balises du BBCodes IMG. Sélectionner « Non » si une règle CSS permet déjà de réaliser cela.',
));
