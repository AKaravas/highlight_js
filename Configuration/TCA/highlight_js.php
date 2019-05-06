<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:highlightJs',
        'label' => 'select_language',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,select_language,code,disable_highlighting',
        'iconfile' => 'EXT:highlight_js/Resources/Public/Icons/HL.JS.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title,select_language,code,disable_highlighting',
    ],
    'palettes' => [
        'highlight_palette_0' => [
            'showitem' => '
                sys_language_uid, 
                l10n_parent, 
                l10n_diffsource, 
                hidden, 
            ',
        ],
        'highlight_palette_1' => [
            'showitem' => '
                title
            ',
        ],
        'highlight_palette_2' => [
            'showitem' => '
                select_language
            ',
        ],
        'highlight_palette_3' => [
            'showitem' => '
                code  
            ',
        ],
        'highlight_palette_4' => [
            'showitem' => '
                disable_highlighting  
            ',
        ],
    ],
    'types' => [
        '1' => [
            'showitem' => '
            --div--;LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:highlightJs_title,
                --palette--;;highlight_palette_0,
                --palette--;;highlight_palette_1,
                --palette--;;highlight_palette_2,
                --palette--;;highlight_palette_3,
                --palette--;;highlight_palette_4'
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'highlight_js',
                'foreign_table_where' => 'AND highlight_js.pid=###CURRENT_PID### AND highlight_js.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],
        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'disable_highlighting' => [
            'exclude' => true,
            'label' => 'LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:disable_highlighting',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'code' => [
            'exclude' => true,
            'label' => 'LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:code',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                //'enableTabulator' => true,
                //'renderType' => 't3editor'
            ],
        ],
        'select_language' => [
            'exclude' => true,
            'label' => 'LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:select_language',
            'config' => [
                'type' => 'select',
                'default' => '',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', ''],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:apache', 'apache'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:bash', 'bash'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:cs', 'cs'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:cpp', 'cpp'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:css', 'css'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:html_xml', 'xml'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:java', 'java'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:javascript', 'javascript'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:json', 'json'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:objectivec', 'objectivec'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:less', 'less'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:nginx', 'nginx'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:php', 'php'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:python', 'python'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:scss', 'scss'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:sql', 'sql'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:stylus', 'stylus'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:swift', 'swift'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:twig', 'twig'],
                    ['LLL:EXT:highlight_js/Resources/Private/Language/locallang.xlf:yaml', 'yaml'],
                ],
                'size' => 1,
                'maxitems' => 1
            ],
        ],
        'tt_content' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ]
];