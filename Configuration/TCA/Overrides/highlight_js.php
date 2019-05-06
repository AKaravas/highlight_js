<?php
/*******************************************
 *                                         *
 *           Highlight JS                  *
 *                                         *
 *******************************************/
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Highlight JS','highlight_js','EXT:highlight_js/Resources/Public/Icons/HL.JS.png'),'CType','highlight_js');
// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['highlight_js'] = array(
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
    --div--;LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:highlightJs,
        --palette--;--linebreak--,highlight_settings_relation,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
         --palette--;;hidden,
         --palette--;;access,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended',
);
$originalHighlightContent = $GLOBALS['TCA']['tt_content'];
$overridesForHighlightContent = [
    'ctrl' => [
        'typeicon_classes' => [
            'highlight_js' => 'HighlightIcon',
        ]
    ]
];
$GLOBALS['TCA']['tt_content'] = array_merge_recursive($originalHighlightContent, $overridesForHighlightContent);
$foundationHighlightOptions = array(
    'highlight_settings_relation' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:highlightJs_description',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'highlight_js',
            'foreign_field' => 'tt_content',
            'maxitems' => 1,
            'appearance' => [
                'collapseAll' => 0,
                'levelLinksPosition' => 'top',
                'showSynchronizationLink' => 1,
                'showPossibleLocalizationRecords' => 1,
                'showAllLocalizationLink' => 1
            ],
        ],
    ],
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$foundationHighlightOptions);
