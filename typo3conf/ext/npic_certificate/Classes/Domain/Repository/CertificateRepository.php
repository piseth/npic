<?php
namespace NPIC\NpicCertificate\Domain\Repository;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Sok Piseth <sokpiseth777@gmail.com>, NPIC
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

/**
 * The repository for Certificates
 */
class CertificateRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * Gets events following by request
	 *
	 *
	 * @param string $request Keyword
	 * @return object
	 */
	
	public function findByRequest($request = NULL){
		$query = $this->createQuery();
		if($request['string']) {
			$result =  $query->matching(
					$query->logicalOr(
						$query->like('nameKhmer', '%'.$request['string'].'%'),
						$query->like('nameEnglish', '%'.$request['string'].'%'),
						$query->like('certificateId', '%'.$request['string'].'%'),
						$query->like('studentId', '%'.$request['string'].'%')
						)
					)->execute();
		}
		return $result;
	}
	
}