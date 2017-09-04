<?php
$rootPids = array(
		'www.npic.edu.kh' => 1,
		'npic.edu.kh' => 1,
		'www.cs.npic.edu.kh' => 64,
		'cs.npic.edu.kh' => 64,
);
$host = $_SERVER['HTTP_HOST'];
$defaultConf = array(
	'init' => array(
		'enableCHashCache' => TRUE,
		'appendMissingSlash' => 'ifNotFile,redirect[301]',
		'enableUrlDecodeCache' => TRUE,
		'enableUrlEncodeCache' => TRUE,
		'emptyUrlReturnValue' => '/',
		'disableErrorLog' => TRUE
	),
	'preVars' => array(
		'0' => array(
			'GETvar' => 'L',
			'valueMap' => array(
				'en' => '1'
			),
			'noMatch' => 'bypass'
		)
	),
	'pagePath' => array(
		'type' => 'user',
		'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
		'spaceCharacter' => '-',
		'languageGetVar' => 'L',
		'expireDays' => '7',
		'rootpage_id' => $rootPids[$host],
		'error404_id' => '51'
	)
);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
	'_DEFAULT' => $defaultConf,
	'local.npic.edu.kh' => '_DEFAULT',
	'www.local.npic.edu.kh' => 'local.npic.edu.kh',
	'local.cs.npic.edu.kh' => '_DEFAULT',
	'www.local.cs.npic.edu.kh' => 'local.cs.npic.edu.kh',

	'npic.edu.kh' => '_DEFAULT',
	'www.npic.edu.kh' => 'npic.edu.kh',
		
	'cs.npic.edu.kh' => '_DEFAULT',
	'www.cs.npic.edu.kh' => 'cs.npic.edu.kh',
		
	'mechanic.npic.edu.kh' => '_DEFAULT',
	'www.mechanic.npic.edu.kh' => 'mechanic.npic.edu.kh',
		
	'foundation.npic.edu.kh' => '_DEFAULT',
	'www.foundation.npic.edu.kh' => 'foundation.npic.edu.kh',
		
	'electrical.npic.edu.kh' => '_DEFAULT',
	'www.electrical.npic.edu.kh' => 'electrical.npic.edu.kh',
	
	'electronic.npic.edu.kh' => '_DEFAULT',
	'www.electronic.npic.edu.kh' => 'electronic.npic.edu.kh',
		
	'civil.npic.edu.kh' => '_DEFAULT',
	'www.civil.npic.edu.kh' => 'civil.npic.edu.kh',
		
	'tour.npic.edu.kh' => '_DEFAULT',
	'www.tour.npic.edu.kh' => 'tour.npic.edu.kh'
);
?>