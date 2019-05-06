<?php
defined('TYPO3_MODE') || die ('Access denied.');



#########################################
#										#
#				Images					#
#										#
#########################################

$registerImage = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$registerImage->registerIcon('HighlightIcon',\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:highlight_js/Resources/Public/Icons/HL.JS.png']);

#########################################
#										#
#	     Allow external tables			#
#										#
#########################################
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('highlight_js');


$GLOBALS['TBE_STYLES']['skins']['highlight_js'] = array();
$GLOBALS['TBE_STYLES']['skins']['highlight_js']['name'] = 'Highlight JS ';
$GLOBALS['TBE_STYLES']['skins']['highlight_js']['stylesheetDirectories'] = array(
    'visual' => 'EXT:highlight_js/Resources/Public/Css/Backend'
);
