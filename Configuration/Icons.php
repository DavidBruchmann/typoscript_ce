<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

$extensionKey = 'typoscript_ce';

/***************
 * ICONS
 */

return [
    'tx-typoscript-blank-area' => [
        'provider' => BitmapIconProvider::class,
        'source' => 'EXT:' . $extensionKey . '/Resources/Public/Icons/blank-area.gif',
    ],
    'tx-typoscript-ce-hero' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:' . $extensionKey . '/Resources/Public/Icons/tx_typoscript_ce_hero.svg',
    ],
    'tx-typoscript-ce-hero-300' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:' . $extensionKey . '/Resources/Public/Icons/tx_typoscript_ce_hero_300.svg',
    ],
    'tx-typoscript-ce-hero-600' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:' . $extensionKey . '/Resources/Public/Icons/tx_typoscript_ce_hero_600.svg',
    ],
    'tx-typoscript-ce-hero-900' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:' . $extensionKey . '/Resources/Public/Icons/tx_typoscript_ce_hero_900.svg',
    ],
];
