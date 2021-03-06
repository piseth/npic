<?php
namespace TYPO3\CMS\Beuser\ViewHelpers\Display;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Converts comma separated list of sys_filemounts uids to html unordered list (<ul>) with speaking titles
 *
 * @author Felix Kopp <felix-source@phorax.com>
 */
class SysFileMountsViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Render unordered list for sys_filemounts
	 *
	 * @param string $uids
	 * @return string
	 */
	public function render($uids = '') {
		if (!$uids) {
			return '';
		}

		$content = '';
		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
			'uid, title',
			'sys_filemounts',
			'uid IN (' . $GLOBALS['TYPO3_DB']->cleanIntList($uids) . ')',
			'title ASC'
		);
		while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			$content .= '<li>' . htmlspecialchars($row['title']) . ' [' . htmlspecialchars($row['uid']) . ']</li>';
		}
		$GLOBALS['TYPO3_DB']->sql_free_result($res);
		return '<ul>' . $content . '</ul>';
	}

}
