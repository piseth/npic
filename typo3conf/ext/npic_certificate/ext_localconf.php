<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'NPIC.' . $_EXTKEY,
	'P1',
	array(
		'Certificate' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Certificate' => 'list, show',
		
	)
);
