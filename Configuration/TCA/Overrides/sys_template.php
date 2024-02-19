<?php
defined('TYPO3') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'typoscript_ce';

    /**
     * Default TypoScript for TypoScript CE
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/ContentElements/Hero',
        'TypoScript CE: Hero'
    );
});
