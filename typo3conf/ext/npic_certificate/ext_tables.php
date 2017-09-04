<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'P1',
	'NPIC Certificate Search'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'NPIC Certificate Management (Web)');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_npiccertificate_domain_model_certificate', 'EXT:npic_certificate/Resources/Private/Language/locallang_csh_tx_npiccertificate_domain_model_certificate.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_npiccertificate_domain_model_certificate');
$GLOBALS['TCA']['tx_npiccertificate_domain_model_certificate'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate',
		'label' => 'name_english',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name_english,name_khmer,certificate_id,student_id,exam_date,major,certificate_bachelor,certificate_bachelor_temp,certificate_associate,certificate_associate_temp,certificate_foundation,transcript,dob,photo,pob,certificate_master,certficate_master_temp,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Certificate.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_npiccertificate_domain_model_certificate.gif'
	),
);
