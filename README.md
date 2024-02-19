# Extension TYPO3-CE

## Main functionality

This extension for TYPO3 demonstrates a Content Element
that relies only on TypoScript.
Beside configuration files it doesn't include any PHP,
so there doesn't exist a folder 'Classes', neither fluid-templates.

The extension comes with some default style in TypoScript,
a css-file is not provided.

### Caveats

The TypoScript isn't working by default as there is a bug
in the official releases.
A patch is available on https://forge.typo3.org/issues/100849.

## Additional feature: plugins for CKEditor

The extension includes several plugins for the CKEditor which are
not included by default in TYPO3.
