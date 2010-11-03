<?php
/**
*
* @version $id: k_acronym.php 320 2009-01-14 05:04:26Z nexur $
* @copyright (c) 2008 phpbbireland.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* DO NOT CHANGE
*/
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
	'ACRONYMS'				=> 'Acronyms',
	'ACRONYM_EXPLAIN'		=> 'From this control panel you can add, edit, and remove acronyms that will be automatically added to posts on your forums.',
	'ALLOW_ACRONYM_EXPLAIN'	=> 'You can enable or disable this feature here.',
	'ADD_ACRONYM'			=> 'Add Acronym',
	'MEANING'				=> 'Enter the full meaning',
	'ACRONYM_EDIT_EXPLAIN'	=> 'The acronym:',
	'ACRONYM_UPDATED'		=> 'Acronym Updated...',
	'ACRONYM_ADDED'			=> 'Acronym added',

	'ACRONYM_REMOVED'			=> 'Acronym removed',
	'NO_ACRONYM'				=> 'No acronym given',
	'SWITCHING_TO_ACRONYM_VARS'	=> 'Switching to acronym vars.',
	'ACRONYM_WARN'				=> 'The acronyms you entered already appears (as text) as part of another acronyms meaning...<br />The current mod configuration does not support this, perhaps later...<br /><br />For the moment try rewording the meaning or changing the case of the offending word, for example... \'MOD\' to \'Mod\'.<br />',
	'ACRONYM_WARN_2'			=> 'You did not enter an acronym or meaning... please try again...',
));

?>