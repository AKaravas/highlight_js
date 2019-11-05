<?php
defined('TYPO3_MODE') || die ('Access denied.');

/***************
 * Add User-TSconfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSConfig/Page.typoscript">
');
// Register for hook to show preview of tt_content element of CType="highlight_js" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['highlight_js'] = \Karavas\HighlightJs\Hooks\PageLayoutView\HighlightPreviewRenderer::class;
