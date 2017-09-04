<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "crawler".
 *
 * Auto generated 16-02-2015 10:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Site Crawler',
	'description' => 'Libraries and scripts for crawling the TYPO3 page tree. Used for re-caching, re-indexing, publishing applications etc.',
	'category' => 'module',
	'shy' => 0,
	'version' => '3.5.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Kasper Skaarhoj, Daniel Poetzinger, Fabrizio Branca, Tolleiv Nietsch, Timo Schmidt, Michael Klapper',
	'author_email' => 'dev@aoemedia.de',
	'author_company' => 'AOE media GmbH',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.1.0-0.0.0',
			'typo3' => '4.2.0-0.0.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:73:{s:24:"class.tx_crawler_api.php";s:4:"bc13";s:25:"class.tx_crawler_auth.php";s:4:"8b90";s:32:"class.tx_crawler_contextMenu.php";s:4:"1287";s:24:"class.tx_crawler_lib.php";s:4:"7510";s:28:"class.tx_crawler_tcaFunc.php";s:4:"c463";s:16:"ext_autoload.php";s:4:"11c6";s:21:"ext_conf_template.txt";s:4:"08aa";s:12:"ext_icon.gif";s:4:"a434";s:17:"ext_localconf.php";s:4:"450b";s:14:"ext_tables.php";s:4:"4bee";s:14:"ext_tables.sql";s:4:"160a";s:33:"icon_tx_crawler_configuration.gif";s:4:"7a69";s:16:"locallang_db.xml";s:4:"5be9";s:7:"tca.php";s:4:"0b10";s:17:"cli/bootstrap.php";s:4:"b235";s:28:"cli/class.tx_crawler_cli.php";s:4:"afcd";s:34:"cli/class.tx_crawler_cli_flush.php";s:4:"e0a8";s:31:"cli/class.tx_crawler_cli_im.php";s:4:"3ca1";s:12:"cli/conf.php";s:4:"7d9f";s:19:"cli/crawler_cli.php";s:4:"5c75";s:21:"cli/crawler_cli.phpsh";s:4:"e110";s:21:"cli/crawler_flush.php";s:4:"e2ed";s:18:"cli/crawler_im.php";s:4:"dfa7";s:28:"cli/crawler_multiprocess.php";s:4:"ca92";s:14:"doc/manual.sxw";s:4:"95ae";s:12:"doc/TODO.txt";s:4:"dac8";s:59:"domain/events/class.tx_crawler_domain_events_dispatcher.php";s:4:"fb38";s:61:"domain/events/interface.tx_crawler_domain_events_observer.php";s:4:"ce0d";s:60:"domain/lib/class.tx_crawler_domain_lib_abstract_dbobject.php";s:4:"dcb3";s:62:"domain/lib/class.tx_crawler_domain_lib_abstract_repository.php";s:4:"acf7";s:50:"domain/process/class.tx_crawler_domain_process.php";s:4:"43c0";s:61:"domain/process/class.tx_crawler_domain_process_collection.php";s:4:"4414";s:58:"domain/process/class.tx_crawler_domain_process_manager.php";s:4:"2039";s:61:"domain/process/class.tx_crawler_domain_process_repository.php";s:4:"b4ee";s:52:"domain/queue/class.tx_crawler_domain_queue_entry.php";s:4:"5135";s:57:"domain/queue/class.tx_crawler_domain_queue_repository.php";s:4:"6803";s:48:"domain/reason/class.tx_crawler_domain_reason.php";s:4:"31d3";s:37:"hooks/class.tx_crawler_hooks_tsfe.php";s:4:"3783";s:38:"modfunc1/class.tx_crawler_modfunc1.php";s:4:"725b";s:22:"modfunc1/locallang.xml";s:4:"a0cd";s:46:"scheduler/class.tx_crawler_scheduler_crawl.php";s:4:"68d8";s:69:"scheduler/class.tx_crawler_scheduler_crawlAdditionalFieldProvider.php";s:4:"af4e";s:58:"scheduler/class.tx_crawler_scheduler_crawlMultiProcess.php";s:4:"1f81";s:81:"scheduler/class.tx_crawler_scheduler_crawlMultiProcessAdditionalFieldProvider.php";s:4:"83d9";s:46:"scheduler/class.tx_crawler_scheduler_flush.php";s:4:"cdf4";s:69:"scheduler/class.tx_crawler_scheduler_flushAdditionalFieldProvider.php";s:4:"47bd";s:43:"scheduler/class.tx_crawler_scheduler_im.php";s:4:"7460";s:66:"scheduler/class.tx_crawler_scheduler_imAdditionalFieldProvider.php";s:4:"b4a9";s:44:"system/class.tx_crawler_system_validator.php";s:4:"ebdd";s:23:"template/pagination.php";s:4:"a519";s:16:"template/res.css";s:4:"e202";s:25:"template/process/list.php";s:4:"c23b";s:32:"template/process/res/img/add.png";s:4:"1988";s:37:"template/process/res/img/arrow_in.png";s:4:"d6c2";s:38:"template/process/res/img/arrow_out.png";s:4:"578e";s:42:"template/process/res/img/arrow_refresh.png";s:4:"6b95";s:41:"template/process/res/img/bullet_green.png";s:4:"0aa5";s:42:"template/process/res/img/bullet_orange.png";s:4:"5cfa";s:39:"template/process/res/img/bullet_red.png";s:4:"d24b";s:42:"template/process/res/img/control_pause.png";s:4:"9c20";s:41:"template/process/res/img/control_play.png";s:4:"3170";s:41:"template/process/res/img/control_stop.png";s:4:"edf6";s:46:"template/process/res/img/control_stop_blue.png";s:4:"2aee";s:33:"template/process/res/img/stop.png";s:4:"1488";s:39:"tests/class.tx_crawler_api_testcase.php";s:4:"aa6b";s:39:"tests/class.tx_crawler_lib_testcase.php";s:4:"682c";s:59:"tests/data/canCreateQueueEntrysUsingConfigurationRecord.xml";s:4:"bc3d";s:45:"tests/data/canNotAddDuplicatePagesToQueue.xml";s:4:"837e";s:67:"tests/events/class.tx_crawler_domain_events_dispatcher_testcase.php";s:4:"a361";s:57:"tests/events/data/class.tx_crawler_domain_events_test.php";s:4:"3046";s:69:"tests/process/class.tx_crawler_domain_process_collection_testcase.php";s:4:"e00a";s:41:"view/class.tx_crawler_view_pagination.php";s:4:"30e6";s:51:"view/process/class.tx_crawler_view_process_list.php";s:4:"e98a";}',
);

?>