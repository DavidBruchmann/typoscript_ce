<?php

$extKey = 'typoscript_ce';

return [
    'dependencies' => [
        'backend',
    ],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        #'@typo3/rte-ckeditor/' => [
        #    'path' => 'EXT:rte_ckeditor/Resources/Public/JavaScript/',
        #    'exclude' => [
        #        'EXT:core/Resources/Public/JavaScript/legacy/',
        #    ],
        #],
        '@typo3/ckeditor5/translations/' => 'EXT:' . $extKey . '/Resources/Public/Contrib/translations/',
        # '@ckeditor/ckeditor5-alignment' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-alignment.js',
        # '@ckeditor/ckeditor5-autoformat' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-autoformat.js',
        # '@ckeditor/ckeditor5-basic-styles' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-basic-styles.js',
        # '@ckeditor/ckeditor5-block-quote' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-block-quote.js',
        # '@ckeditor/ckeditor5-clipboard' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-clipboard.js',
        '@ckeditor/ckeditor5-code-block' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/ckeditor5-code-block.js',
        # '@ckeditor/ckeditor5-core' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-core.js',
        # '@ckeditor/ckeditor5-editor-classic' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-editor-classic.js',
        # '@ckeditor/ckeditor5-engine' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-engine.js',
        # '@ckeditor/ckeditor5-enter' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-enter.js',
        # '@ckeditor/ckeditor5-essentials' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-essentials.js',
        # '@ckeditor/ckeditor5-find-and-replace' => 'EXT:' . $extKey . '/Resources/Public/Contrib/default/@ckeditor/ckeditor5-find-and-replace.js',
        '@ckeditor/ckeditor5-font' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/ckeditor5-font.js',
        # '@ckeditor/ckeditor5-heading' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-heading.js',
        '@ckeditor/ckeditor5-highlight' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/ckeditor5-highlight.js',
        # '@ckeditor/ckeditor5-horizontal-line' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-horizontal-line.js',
        # '@ckeditor/ckeditor5-html-support' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-html-support.js',
        # '@ckeditor/ckeditor5-indent' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-indent.js',
        # '@ckeditor/ckeditor5-inspector' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-inspector.js',
        '@ckeditor/ckeditor5-language' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/ckeditor5-language.js',
        # '@ckeditor/ckeditor5-link' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-link.js',
        # '@ckeditor/ckeditor5-list' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-list.js',
        # '@ckeditor/ckeditor5-paragraph' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-paragraph.js',
        # '@ckeditor/ckeditor5-paste-from-office' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-paste-from-office.js',
        # '@ckeditor/ckeditor5-remove-format' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-remove-format.js',
        # '@ckeditor/ckeditor5-select-all' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-select-all.js',
        '@ckeditor/ckeditor5-show-blocks' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/ckeditor5-show-blocks.js',
        # '@ckeditor/ckeditor5-source-editing' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-source-editing.js',
        # '@ckeditor/ckeditor5-special-characters' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-special-characters.js',
        # '@ckeditor/ckeditor5-style' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-style.js',
        '@ckeditor/ckeditor5-table' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/ckeditor5-table.js',
        # '@ckeditor/ckeditor5-theme-lark' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-theme-lark.js',
        # '@ckeditor/ckeditor5-typing' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-typing.js',
        # '@ckeditor/ckeditor5-ui' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-ui.js',
        # '@ckeditor/ckeditor5-undo' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-undo.js',
        # '@ckeditor/ckeditor5-upload' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-upload.js',
        # '@ckeditor/ckeditor5-utils' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-utils.js',
        # '@ckeditor/ckeditor5-watchdog' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-watchdog.js',
        # '@ckeditor/ckeditor5-widget' => 'EXT:' . $extKey . '/Resources/Public/Contrib/@ckeditor/default/ckeditor5-widget.js',
        # '@ckeditor/ckeditor5-word-count' => 'EXT:' . $extKey . '/Resources/Public/Ckeditor/Contrib/@ckeditor/default/ckeditor5-word-count.js',
        // Provided for backwards compatibility reasons
        # '@typo3/ckeditor5-bundle.js' => 'EXT:' . $extKey . '/Resources/Public/Ckeditor/Contrib/legacy/ckeditor5-bundle.js',
        # '@typo3/ckeditor5-inspector.js' => 'EXT:' . $extKey . '/Resources/Public/Ckeditor/Contrib/ckeditor5-inspector.js',
    ],
];
