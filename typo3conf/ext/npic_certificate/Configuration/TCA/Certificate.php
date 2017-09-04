<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_npiccertificate_domain_model_certificate'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_npiccertificate_domain_model_certificate']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name_english, name_khmer, certificate_id, student_id, exam_date, major, certificate_bachelor, certificate_bachelor_temp, certificate_associate, certificate_associate_temp, certificate_foundation, transcript, dob, photo, pob, certificate_master, certficate_master_temp',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name_english, name_khmer, certificate_id, student_id, exam_date, major, certificate_bachelor, certificate_bachelor_temp, certificate_associate, certificate_associate_temp, certificate_foundation, transcript, dob, photo, pob, certificate_master, certficate_master_temp, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_npiccertificate_domain_model_certificate',
				'foreign_table_where' => 'AND tx_npiccertificate_domain_model_certificate.pid=###CURRENT_PID### AND tx_npiccertificate_domain_model_certificate.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name_english' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.name_english',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'name_khmer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.name_khmer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'certificate_id' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certificate_id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'student_id' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.student_id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'exam_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.exam_date',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'major' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.major',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Major --', 0),
                    array('1. Foundation Year', 1),
                    array('2. Electronic Engineering', 2),
                    array('3. Electrical Engineering', 3),
                    array('4. Civil Engineering', 4),
                    array('5. Computer Science', 5),
                    array('6. Mechanical Engineering', 6),
                    array('7. Tourism & Hospitality', 7),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'certificate_bachelor' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certificate_bachelor',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'certificateBachelor',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'certificate_bachelor_temp' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certificate_bachelor_temp',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'certificateBachelorTemp',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'certificate_associate' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certificate_associate',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'certificateAssociate',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'certificate_associate_temp' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certificate_associate_temp',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'certificateAssociateTemp',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'certificate_foundation' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certificate_foundation',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'certificateFoundation',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'transcript' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.transcript',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'transcript',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'dob' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.dob',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'photo' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.photo',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'photo',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'pob' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.pob',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'certificate_master' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certificate_master',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'certificateMaster',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'certficate_master_temp' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:npic_certificate/Resources/Private/Language/locallang_db.xlf:tx_npiccertificate_domain_model_certificate.certficate_master_temp',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'certficateMasterTemp',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		
	),
);
