<?php

/**
 * Extension Manager/Repository config file for ext "typoscript_ce".
 */
$EM_CONF['typoscript_ce'] = [
    'title' => 'TypoScript Content Element: Hero',
    'description' => '`Hero` Content Element only by TypoScript',
    'version' => '1.0.0',
    'state' => 'stable',
    'category' => 'Content Element',
    'author' => 'David Bruchmann',
    'author_email' => 'david.bruchmann@gmail.com',
    'author_company' => 'Webdevelopment Barlian',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.4-12.4.99',
            'fluid_styled_content' => '12.4.4-12.4.99',
            'rte_ckeditor' => '12.4.4-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    #'autoload' => [
    #    'psr-4' => [
    #        'WDB\\TypoScriptCe\\' => 'Classes',
    #    ],
    #],
];
