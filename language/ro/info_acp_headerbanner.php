<?php
/**
*
* @package phpBB Extension - Header Banner
* @copyright (c) 2015 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_HEADERBANNER'						=> 'Header Banner',
	'ACP_HEADERBANNER_CONFIG'				=> 'Header Banner',

	'ACP_HEADERBANNER_SAVED'				=> 'Setările Header Banner au fost salvate',
));
