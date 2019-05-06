<?php
defined('TYPO3_MODE') or die();
$_EXTKEY = $GLOBALS['_EXTKEY'] = 'highlight_js';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $_EXTKEY,
    'Configuration/TSConfig/Page.typoscript',
    'Highlight.js - PageTS'
);