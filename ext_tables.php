<?php

defined('TYPO3') || die();

(static function() {
    $extensionKey = 'mr_sitepackage';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
        'tx_mrsitepackage_domain_model_faqitem',
        'EXT:tx_mrsitepackage/Resources/Private/Language/locallang_csh_tx_mrsitepackage_domain_model_faqitem.xlf'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_mrsitepackage_domain_model_faqitem');
});
