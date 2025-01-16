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
	'ACP_HEADERBANNER_CONFIG_EXPLAIN'				=> 'Aceasta este pagina de configurare pentru extensia Header Banner',
	'ACP_HEADERBANNER_CONFIG_SET'					=> 'Configurare',

	'HEADERBANNER_CONFIG'							=> 'Setări Header Banner',
	'HEADERBANNER_SAVED'							=> 'Setările au fost salvate',

	'HEADERBANNER'									=> 'Adresa URL pentru Header Banner cu lățime completă',
	'HEADERBANNER_EXPLAIN'							=> 'Acest banner se va afișa pe dispozitivele de dimensiune completă.',
	'HEADERBANNER_RESPONSIVE'						=> 'Adresa URL Header Banner a dispozitivului mobil',
	'HEADERBANNER_RESPONSIVE_EXPLAIN'				=> 'Acest banner se va afișa pe dispozitivele mobile.',
	'HEADERBANNER_PLACEHOLDER'						=> 'https://pagina-mea.com/images/banner.jpg',
	'HEADERBANNER_SELECT'							=> 'Doriți să activați extensia Header Banner?',

	'HEADERBANNER_DESTINATION'						=> 'Doriți ca bannerul să indice o destinație alternativă?',
	'HEADERBANNER_DESTINATION_NAME'					=> 'Numele site-ului alternativ către care indică bannerul',
	'HEADERBANNER_URL'								=> 'Destinație alternativă',
	'HEADERBANNER_OPEN'								=> 'Doriți ca linkul de mai sus să se deschidă într-o filă/fereastra nouă?',
	'HEADERBANNER_URL_EXPLAIN'						=> 'Introduceți adresa URL COMPLETĂ a destinației alternative când faceți clic pe banner',
	'HEADERBANNER_URL_PLACEHOLDER'					=> 'https://ioforos.com/',
	
	'HEADERBANNER_LOGO'								=> 'Doriți să plasați Logo site-ului peste banner?',
	
	'HEADERBANNER_MOBILE'							=> 'Doriți să aveți un banner alternativ pentru ecranele mici?',

	'HEADERBANNER_CORNER'							=> 'Raza de colț',
	'HEADERBANNER_CORNER_EXPLAIN'					=> 'Doriți să faceți raza colțului imaginii de mai sus?',
	'HEADERBANNER_PX'								=> 'px',

	'HEADERBANNER_BACKGROUND'						=> 'Doriți să ascundeți culoarea fundalului?',

	'HEADERBANNER_SIZE'								=> 'Lățimea bannerului la dimensiune completă.',
	'HEADERBANNER_RESPONSIVE_SIZE'					=> 'Lățimea bannerului dispozitivului mobil.',
	'HEADERBANNER_SIZE_EXPLAIN'						=> 'Bannerul dvs. va fi afișat la lățimea antetului forumului sau la lățimea bannerului (oricare este mai mică) Dacă doriți să setați o lățime maximă, puteți face acest lucru aici. Implicit 1500px.',
	'HEADERBANNER_RESPONSIVE_SIZE_EXPLAIN'			=> 'Bannerul dvs. va fi afișat la lățimea antetului forumului sau la lățimea bannerului (oricare este mai mică) Dacă doriți să setați o lățime maximă, puteți face acest lucru aici. Implicit 700px.',
	'HEADERBANNER_REQUIRED'							=> 'Necesar',

	'HEADERBANNER_SEARCH'							=> 'Unde ați dori să fie afișată căutarea?',
	'HEADERBANNER_SEARCH_HEADER_TOP_LEFT'			=> 'Header stânga sus',
	'HEADERBANNER_SEARCH_HEADER_TOP_RIGHT'			=> 'Header dreapta sus',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_LEFT'		=> 'Header stânga jos',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_RIGHT'		=> 'Header dreapta jos',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_MIDDLE'		=> 'Header jos în centru',
	'HEADERBANNER_SEARCH_NAVBAR'					=> 'Pe bara de navigație (Navigavtion Bar)',
	'HEADERBANNER_SEARCH_REMOVE'					=> 'Nicăieri (Nu se afișează)',
));
