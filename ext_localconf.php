<?php

defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(function () {

    $extensionKey = 'typoscript_ce';

    /***************
     * Add default RTE configuration
     */
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][$extensionKey] =
        'EXT:' . $extensionKey . '/Configuration/RTE/Default.yaml';

    /***************
     * PageTS
     */
    ExtensionManagementUtility::addPageTSConfig(
        '@import "EXT:' . $extensionKey . '/Configuration/TsConfig/Page/All.tsconfig">'
    );


    // ----------------------------------------------------------------
    // wizards
    // ----------------------------------------------------------------

    $singleWizards = [];

    $singleWizards['hero'] = '
    hero {
        iconIdentifier = tx-typoscript-ce-hero
        title = LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tx_typoscriptce_hero.name
        description = LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tx_typoscriptce_hero.description
        tt_content_defValues {
            CType = tx_typoscriptce_hero
        }
    }
';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.common {
                elements {'
                    . $singleWizards['hero']
                . '}
                show = *
            }
            wizards.newContentElement.wizardItems.custom {
                header = Custom
                elements {'
                    . $singleWizards['hero']
                . '}
                show = *
            }
       }'
    );
});
