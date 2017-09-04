<?php
namespace FluidTYPO3\Flux\Utility;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Claus Due <claus@namelesscoder.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use FluidTYPO3\Flux\Service\WorkspacesAwareRecordService;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * ResolveUtility utility
 *
 * @package Flux
 * @subpackage Utility
 */
class ResolveUtility {

	/**
	 * @var boolean
	 */
	protected static $initialized = FALSE;

	/**
	 * @var boolean
	 */
	protected static $hasGridElementsVersionTwo = FALSE;

	/**
	 * @var WorkspacesAwareRecordService
	 */
	protected static $recordService;

	/**
	 * @return void
	 */
	private static function initialize() {
		if (FALSE === self::$initialized) {
			self::$hasGridElementsVersionTwo = VersionUtility::assertExtensionVersionIsAtLeastVersion('gridelements', 2);
			self::$recordService = GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager')->get('FluidTYPO3\Flux\Service\WorkspacesAwareRecordService');
		}
		self::$initialized = TRUE;
	}

	/**
	 * @param string $extensionKey
	 * @param string $action
	 * @param string $controllerObjectShortName
	 * @param boolean $failHardClass
	 * @param boolean $failHardAction
	 * @throws \RuntimeException
	 * @return string|NULL
	 */
	public static function resolveFluxControllerClassNameByExtensionKeyAndAction($extensionKey, $action, $controllerObjectShortName, $failHardClass = FALSE, $failHardAction = FALSE) {
		$potentialControllerClassName = self::buildControllerClassNameFromExtensionKeyAndControllerType($extensionKey, $controllerObjectShortName);
		if (FALSE === class_exists($potentialControllerClassName)) {
			if (TRUE === $failHardClass) {
				throw new \RuntimeException('Class ' . $potentialControllerClassName . ' does not exist. It was build from: ' . var_export($extensionKey, TRUE) .
				' but the resulting class name was not found.', 1364498093);
			}
			return NULL;
		}
		if (FALSE === method_exists($potentialControllerClassName, $action . 'Action')) {
			if (TRUE === $failHardAction) {
				throw new \RuntimeException('Class ' . $potentialControllerClassName . ' does not contain a method named ' . $action . 'Action', 1364498223);
			}
			return NULL;
		}
		return $potentialControllerClassName;
	}

	/**
	 * @param string $pluginSignature
	 * @return string|NULL
	 */
	public static function resolveOverriddenFluxControllerActionNameFromRequestParameters($pluginSignature) {
		$requestParameters = (array) GeneralUtility::_GET($pluginSignature);
		$overriddenControllerActionName = TRUE === isset($requestParameters['action']) ? $requestParameters['action'] : NULL;
		return $overriddenControllerActionName;
	}

	/**
	 * @return array
	 */
	public static function resolveCurrentPageRecord() {
		self::initialize();
		$recordUid = (integer) (TRUE === isset($GLOBALS['TSFE']->page)) ? $GLOBALS['TSFE']->id : GeneralUtility::_GET('id');
		return self::$recordService->getSingle('pages', '*', $recordUid);
	}

	/**
	 * @param string $path
	 * @return string
	 */
	public static function convertAllPathSegmentsToUpperCamelCase($path) {
		$pathSegments = explode('/', $path);
		$pathSegments = array_map('ucfirst', $pathSegments);
		$path = implode('/', $pathSegments);
		return $path;
	}

	/**
	 * @param array $paths
	 * @param string $controllerName
	 * @param string $controllerAction
	 * @param string $format
	 * @return string
	 */
	public static function resolveTemplatePathAndFilenameByPathAndControllerNameAndActionAndFormat(array $paths, $controllerName, $controllerAction, $format = 'html') {
		$templateRootPath = rtrim($paths['templateRootPath'], '/') . '/' . $controllerName . '/';
		$controllerActionPath = self::convertAllPathSegmentsToUpperCamelCase($controllerAction);
		$templatePathAndFilename = $templateRootPath . $controllerActionPath . '.' . $format;
		$overlayTemplateFileName = self::resolvePossibleOverlayTemplateFile($paths['overlays'], $controllerName, $controllerAction, $format);
		return GeneralUtility::getFileAbsFileName(NULL !== $overlayTemplateFileName ? $overlayTemplateFileName : $templatePathAndFilename);
	}

	/**
	 * @param array|NULL $overlays
	 * @param string $controllerName
	 * @param string $controllerActionName
	 * @param string $format
	 * @return null|string
	 */
	public static function resolvePossibleOverlayTemplateFile($overlays, $controllerName, $controllerActionName, $format = 'html') {
		$templatePathAndFilename = NULL;
		if (TRUE === is_array($overlays)) {
			$controllerActionPath = self::convertAllPathSegmentsToUpperCamelCase($controllerActionName);
			foreach ($overlays as $possibleOverlayPaths) {
				if (TRUE === isset($possibleOverlayPaths['templateRootPath'])) {
					$overlayTemplateRootPath = $possibleOverlayPaths['templateRootPath'];
					$overlayTemplateRootPath = rtrim($overlayTemplateRootPath, '/') . '/' . $controllerName . '/';
					$possibleOverlayFile = GeneralUtility::getFileAbsFileName($overlayTemplateRootPath . $controllerActionPath . '.' . $format);
					if (TRUE === file_exists($possibleOverlayFile)) {
						$templatePathAndFilename = $possibleOverlayFile;
						break;
					}
				}
			}
		}
		return $templatePathAndFilename;
	}

	/**
	 * @param string $templateRootPath
	 * @return string
	 */
	public static function resolveWidgetTemplateFileBasedOnTemplateRootPathAndEnvironment($templateRootPath) {
		self::initialize();
		$templateRootPath = rtrim($templateRootPath, '/');
		$templatePathAndFilename = $templateRootPath . '/ViewHelpers/Widget/Grid/Index.html';
		if (TRUE === self::$hasGridElementsVersionTwo) {
			$templatePathAndFilename = $templateRootPath . '/ViewHelpers/Widget/Grid/GridElements.html';
		}
		$templatePathAndFilename = GeneralUtility::getFileAbsFileName($templatePathAndFilename);
		return $templatePathAndFilename;
	}

	/**
	 * @param string $extensionKey
	 * @param string $controllerName
	 * @return boolean|string
	 */
	private static function buildControllerClassNameFromExtensionKeyAndControllerType($extensionKey, $controllerName) {
		if (TRUE === ExtensionNamingUtility::hasVendorName($extensionKey)) {
			list($vendorName, $extensionName) = ExtensionNamingUtility::getVendorNameAndExtensionName($extensionKey);
			$potentialClassName = $vendorName . '\\' . $extensionName . '\\Controller\\' . $controllerName . 'Controller';
		} else {
			$extensionName = ExtensionNamingUtility::getExtensionName($extensionKey);
			$potentialClassName = $extensionName . '\\Controller\\' . $controllerName . 'Controller';
			if (FALSE === class_exists($potentialClassName)) {
				$potentialClassName = 'Tx_' . $extensionName . '_Controller_' . $controllerName . 'Controller';
			}
		}
		return $potentialClassName;
	}

}
