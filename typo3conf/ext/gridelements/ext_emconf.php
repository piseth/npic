<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "gridelements".
 *
 * Auto generated 16-01-2015 09:38
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Grid Elements',
	'description' => 'This extension integrates the grid layout concept also to regular content elements - the grid elements.
It offers a lot of new features like advanced drag & drop or real references, that improve the usability of the page and list module to speed up the daily work with the backend.',
	'category' => 'be',
	'shy' => false,
	'version' => '3.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => 'bottom',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => true,
	'createDirs' => '',
	'modify_tables' => 'tt_content',
	'clearcacheonload' => false,
	'lockType' => '',
	'author' => 'Grid Elements Team',
	'author_email' => 'info@cybercraft.de',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:101:{s:16:"Classes/Backend/";s:4:"d41d";s:29:"Classes/Backend/CmOptions.php";s:4:"1256";s:31:"Classes/Backend/ItemsProcFuncs/";s:4:"d41d";s:56:"Classes/Backend/ItemsProcFuncs/AbstractItemsProcFunc.php";s:4:"0f03";s:45:"Classes/Backend/ItemsProcFuncs/ColPosList.php";s:4:"1053";s:44:"Classes/Backend/ItemsProcFuncs/CTypeList.php";s:4:"bc2f";s:53:"Classes/Backend/ItemsProcFuncs/SysLanguageUidList.php";s:4:"898a";s:31:"Classes/Backend/LayoutSetup.php";s:4:"493b";s:29:"Classes/Backend/TtContent.php";s:4:"b34d";s:20:"Classes/DataHandler/";s:4:"d41d";s:43:"Classes/DataHandler/AbstractDataHandler.php";s:4:"c405";s:47:"Classes/DataHandler/AfterDatabaseOperations.php";s:4:"0b3f";s:34:"Classes/DataHandler/MoveRecord.php";s:4:"f00c";s:44:"Classes/DataHandler/PreProcessFieldArray.php";s:4:"f8a9";s:37:"Classes/DataHandler/ProcessCmdmap.php";s:4:"7073";s:15:"Classes/Helper/";s:4:"d41d";s:25:"Classes/Helper/Helper.php";s:4:"8e7f";s:14:"Classes/Hooks/";s:4:"d41d";s:44:"Classes/Hooks/AbstractDatabaseRecordList.php";s:4:"ccfb";s:32:"Classes/Hooks/BackendUtility.php";s:4:"0b6e";s:36:"Classes/Hooks/DatabaseRecordList.php";s:4:"96c0";s:29:"Classes/Hooks/DataHandler.php";s:4:"f5f5";s:26:"Classes/Hooks/DrawItem.php";s:4:"71e2";s:30:"Classes/Hooks/PageRenderer.php";s:4:"4ff8";s:37:"Classes/Hooks/PreHeaderRenderHook.php";s:4:"e331";s:29:"Classes/Hooks/WizardItems.php";s:4:"b202";s:15:"Classes/Plugin/";s:4:"d41d";s:31:"Classes/Plugin/Gridelements.php";s:4:"de56";s:13:"Classes/View/";s:4:"d41d";s:31:"Classes/View/AjaxRecordList.php";s:4:"5f1f";s:15:"Classes/Wizard/";s:4:"d41d";s:32:"Classes/Wizard/BackendLayout.php";s:4:"490d";s:23:"Classes/Wizard/conf.php";s:4:"9c10";s:24:"Classes/Wizard/index.php";s:4:"680e";s:15:"Classes/Xclass/";s:4:"d41d";s:37:"Classes/Xclass/DatabaseRecordList.php";s:4:"f826";s:24:"Configuration/FlexForms/";s:4:"d41d";s:58:"Configuration/FlexForms/default_flexform_configuration.xml";s:4:"7799";s:18:"Configuration/Tca/";s:4:"d41d";s:35:"Configuration/Tca/BackendLayout.php";s:4:"72d5";s:25:"Configuration/TypoScript/";s:4:"d41d";s:38:"Configuration/TypoScript/constants.txt";s:4:"d41d";s:34:"Configuration/TypoScript/setup.txt";s:4:"e531";s:24:"Documentation/manual.pdf";s:4:"5638";s:24:"Documentation/manual.sxw";s:4:"6e47";s:29:"Documentation/wizard_form.dat";s:4:"63f3";s:30:"Documentation/wizard_form.html";s:4:"4c87";s:18:"Resources/Private/";s:4:"d41d";s:27:"Resources/Private/Language/";s:4:"d41d";s:40:"Resources/Private/Language/locallang.xlf";s:4:"12e7";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"fd81";s:17:"Resources/Public/";s:4:"d41d";s:25:"Resources/Public/Backend/";s:4:"d41d";s:29:"Resources/Public/Backend/Css/";s:4:"d41d";s:43:"Resources/Public/Backend/Css/grideditor.css";s:4:"6e0f";s:34:"Resources/Public/Backend/Css/Skin/";s:4:"d41d";s:52:"Resources/Public/Backend/Css/Skin/GridElementsDD.css";s:4:"9e76";s:55:"Resources/Public/Backend/Css/Skin/GridElementsIcons.css";s:4:"f206";s:53:"Resources/Public/Backend/Css/Skin/t3skin_override.css";s:4:"3aa0";s:32:"Resources/Public/Backend/Images/";s:4:"d41d";s:64:"Resources/Public/Backend/Images/add copy (from another page).png";s:4:"acc4";s:41:"Resources/Public/Backend/Images/clear.gif";s:4:"cc11";s:55:"Resources/Public/Backend/Images/gridelements_sprite.png";s:4:"dae9";s:50:"Resources/Public/Backend/Images/new_content_el.gif";s:4:"efa2";s:46:"Resources/Public/Backend/Images/paste copy.png";s:4:"1a13";s:54:"Resources/Public/Backend/Images/paste reference to.png";s:4:"1712";s:45:"Resources/Public/Backend/Images/reference.png";s:4:"b409";s:47:"Resources/Public/Backend/Images/t3grid-edit.png";s:4:"f677";s:56:"Resources/Public/Backend/Images/t3grid-edit-inactive.png";s:4:"728d";s:58:"Resources/Public/Backend/Images/t3grid-edit-inactive-1.png";s:4:"728d";s:54:"Resources/Public/Backend/Images/t3grid-editor-down.png";s:4:"083d";s:63:"Resources/Public/Backend/Images/t3grid-editor-down-inactive.png";s:4:"33d4";s:54:"Resources/Public/Backend/Images/t3grid-editor-left.png";s:4:"12ff";s:63:"Resources/Public/Backend/Images/t3grid-editor-left-inactive.png";s:4:"bc52";s:55:"Resources/Public/Backend/Images/t3grid-editor-right.png";s:4:"a01f";s:64:"Resources/Public/Backend/Images/t3grid-editor-right-inactive.png";s:4:"328a";s:52:"Resources/Public/Backend/Images/t3grid-editor-up.png";s:4:"736a";s:61:"Resources/Public/Backend/Images/t3grid-editor-up-inactive.png";s:4:"3ae1";s:59:"Resources/Public/Backend/Images/t3grid-layer-icon-close.png";s:4:"c0aa";s:58:"Resources/Public/Backend/Images/t3grid-layer-icon-help.png";s:4:"8fa0";s:58:"Resources/Public/Backend/Images/t3grid-layer-icon-save.png";s:4:"fc92";s:52:"Resources/Public/Backend/Images/t3grid-tabledown.png";s:4:"24a5";s:52:"Resources/Public/Backend/Images/t3grid-tableleft.png";s:4:"e4d9";s:53:"Resources/Public/Backend/Images/t3grid-tableright.png";s:4:"592e";s:50:"Resources/Public/Backend/Images/t3grid-tableup.png";s:4:"6cf2";s:36:"Resources/Public/Backend/JavaScript/";s:4:"d41d";s:65:"Resources/Public/Backend/JavaScript/dbNewContentElWizardFixDTM.js";s:4:"79e9";s:49:"Resources/Public/Backend/JavaScript/grideditor.js";s:4:"ccdb";s:53:"Resources/Public/Backend/JavaScript/GridElementsDD.js";s:4:"4740";s:61:"Resources/Public/Backend/JavaScript/GridElementsDD_onReady.js";s:4:"c862";s:59:"Resources/Public/Backend/JavaScript/GridElementsListView.js";s:4:"6614";s:23:"Resources/Public/Icons/";s:4:"d41d";s:41:"Resources/Public/Icons/backend_layout.gif";s:4:"8275";s:9:"ChangeLog";s:4:"fe47";s:21:"ext_conf_template.txt";s:4:"5d42";s:12:"ext_icon.gif";s:4:"8275";s:17:"ext_localconf.php";s:4:"ee4c";s:14:"ext_tables.php";s:4:"81f6";s:14:"ext_tables.sql";s:4:"3f41";s:9:"README.md";s:4:"ce80";s:10:"README.txt";s:4:"2db6";}',
);

?>