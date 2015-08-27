<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'AndreasKiessling.' . $_EXTKEY,
	'Html',
	array(
		'Content' => 'html'
	),
	// non-cacheable actions
	array(

	),
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
