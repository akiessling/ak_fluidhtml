<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Html',
    'Fluid HTML'
);

// remove header output of our file
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
tt_content.akfluidhtml_html.10 >
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
mod.wizards {
    newContentElement {
        wizardItems {
            special {
                elements {
                    akfluidhtml_html {
                        icon = ../../../sysext/t3skin/icons/gfx/c_wiz/html.gif
                        iconIdentifier = content-special-html
                        title = Fluid Html
                        description =
                        tt_content_defValues {
                            CType = akfluidhtml_html
                        }
                    }
                }
                show := addToList(akfluidhtml_html)
            }
            
        }
    }
}
');
