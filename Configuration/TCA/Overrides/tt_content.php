<?php

defined('TYPO3') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'typoscript_ce';

    $layoutLabel = 'Decoration'; //'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',

    $tempLayoutColumns = [
        'layout' => [
            'label' => $layoutLabel,
            'exclude' => 1,
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'size' => 1,
                'default' => 600,
                'items' => [
                    // TODO remove options that are not used anymore
                    //      consider that values are perhaps not used in templates anymore
                    // TODO add items perhaps differently i.e with ExtensionManagementUtility::addTcaSelectItem ?
                    [
                        'None', // label
                        '0', // value
                        'tx-typoscript-blank-area', // Icon identifier (defined in ext_localconf.php)
                    ],
                    ['Hero Height', '--div--'],
                    [
                        '300px',
                        '300',
                        'tx-typoscript-ce-hero-600',
                    ],
                    [
                        '600px (Default)',
                        '600',
                        'tx-typoscript-ce-hero-300',
                    ],
                    [
                        '900px',
                        '900',
                        'tx-typoscript-ce-hero-900',
                    ],
                ],
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ],
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',  $tempLayoutColumns);



    // --- REMOVING field 'layout' from palette 'frames' ---
    $frameItems = explode(',', $GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem']);
    $GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] = '';
    foreach($frameItems as $count => $frameItem) {
        $frameItems[$count] = $frameItem = trim($frameItem);
        if (strpos($frameItem, 'layout;') === 0) {
            unset($frameItems[$count]);
        }
    }
    $GLOBALS['TCA']['tt_content']['palettes']['frames']['showitem'] = implode(', ', $frameItems);

    // --- ADDING field 'layout' to palette 'general' ---
    $GLOBALS['TCA']['tt_content']['palettes']['general']['showitem'] .= ', --linebreak--, layout;' . $layoutLabel . ''; // , select_key;select_key


    $GLOBALS['TCA']['tt_content']['palettes']['basic'] = [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general',
        'showitem' =>
            'CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel, ' .
            'colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel, ' .
            'sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent ' .
            ''
    ];
    $GLOBALS['TCA']['tt_content']['palettes']['basic_no_lang'] = [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general',
        'showitem' =>
            'CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel, ' .
            'colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel, ' .
            ''
    ];

    // TODO assign correct translation paths

    $basicTab = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, '
                . '--palette--;;basic, ';
    $basicTabNoLang = '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, '
                . '--palette--;;basic_no_lang, ';
    $defaultTabs =
            '--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance, ' .
            '--palette--;;frames, ' .
            '--palette--;;appearanceLinks, '.
            '--div--;Access, ' .
            '--palette--;Visibility;hidden, ' .
            '--palette--;Publish Dates and Access Rights;access, ';

    /*****************
     * HERO ELEMENT
     *****************/
    $GLOBALS['TCA']['tt_content']['palettes']['hero_styling']['showitem'] = 'layout;Image height, header_position;Text Sorting';
    $GLOBALS['TCA']['tt_content']['types']['tx_typoscriptce_hero']['showitem']
        = $basicTabNoLang // $basicTab
          . 'header;Header, '
          . 'subheader;Slogan, '
          . '--palette--;Styles;hero_styling, '
          . 'image,'
          . $defaultTabs;
    $heroSortingOptions = [
        [
            'label' => 'Hero Text Sorting',
            'value' => '--div--'
        ],
        [
            'label' => 'Headline top (default)',
               'value' => 'headerTop'
        ],
        [
            'label' => 'Slogan top',
            'value' => 'sloganTop'
        ]
    ];
    foreach ($heroSortingOptions as $count => $heroSortingOption) {
        // TODO restrict it to Hero only, but how?
        $GLOBALS['TCA']['tt_content']['columns']['header_position']['config']['items'][] = $heroSortingOption;
    }

    /** *******************************************************
     *  Add Content Elements fo selection in tt_content records
     ** *******************************************************/
    $groupID = 'Custom';
    $cTypes = [
        [
            '0' => 'Hero Element', // Plugin label
            '1' => 'tx_typoscriptce_hero', // Plugin identifier
            '2' => 'tx-typoscript-ce-hero', // Icon identifier (defined in Configuration/Icons.php)
            '3' => $groupID,
        ],
    ];

    $type = 'CType';
    foreach ($cTypes as $count => $itemArray) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin($itemArray, $type, $extensionKey);
    }
});
