<?php
/**
 *
 * Quote attachments in posts. [English]. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 - 3Di http://3di.space/32/
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

$lang = array_merge($lang, array(
	'EXTENSION_REQUIREMENTS_NOTICE'	=>	'Your phpBB installation doesn\'t meet the requirements of <strong>Quote Attachments Img in Posts</strong> extension.<br /><br />The presence of phpBB >= 3.1.6 is mandatory.<br />',
));
