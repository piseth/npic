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
	),

       'fixedPostVars' => array(
		'newsDetailConfiguration' => array(
			array(
				'GETvar' => 'tx_news_pi1[news]',
				'lookUpTable' => array(
					'table' => 'tx_news_domain_model_news',
					'id_field' => 'uid',
					'alias_field' => 'title',
					'addWhereClause' => ' AND NOT deleted',
					'useUniqueCache' => 1,
					'useUniqueCache_conf' => array(
						'strtolower' => 1,
						'spaceCharacter' => '-'
					),
					'autoUpdate' => 1,
					'expireDays' => 180,
				)
			)
		),
		'19' => 'newsDetailConfiguration'
	),


'postVarSets' => array(
	'_DEFAULT' => array(
		'news' => array(
			array(
				'GETvar' => 'tx_news_pi1[controller]',
				'valueMap' => array(
					'news' => 'News',
				)
			),
			array(
				'GETvar' => 'tx_news_pi1[action]',
			),
			array(
				'GETvar' => 'tx_news_pi1[news]',
				'lookUpTable' => array(
					'table' => 'tx_news_domain_model_news',
					'id_field' => 'uid',
					'alias_field' => 'title',
					'useUniqueCache' => 1,
					'useUniqueCache_conf' => array(
						'strtolower' => 1,
						'spaceCharacter' => '-',
					),
				),
			),
		),
	),
),

	'fileName' => array(
		'defaultToHTMLsuffixOnPrev' => 0,
		'index' => array(
			'rss.xml' => array(
				'keyValues' => array(
					'type' => '100'
				)
			),
			'print' => array(
				'keyValues' => array(
					'type' => 98,
				)
			),
			// tqSeoSitemapXml
			'sitemap.xml' => array(
				'keyValues' => array(
					'type' => 841132,
				),
			),
			// tqSeoSitemapTxt
			'sitemap.txt' => array(
				'keyValues' => array(
					'type' => 841131,
				),
			),
			// tqSeoRobotsTxt
			'robots.txt' => array(
				'keyValues' => array(
					'type' => 841133,
				),
			),
		)
	),

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