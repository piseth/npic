<?php
namespace NPIC\NpicCertificate\Controller;


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
 * CertificateController
 */
class CertificateController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * certificateRepository
	 * 
	 * @var \NPIC\NpicCertificate\Domain\Repository\CertificateRepository
	 * @inject
	 */
	protected $certificateRepository = NULL;

	/**
	 * action list
	 * 
	 * @return void
	 */
	public function listAction() {
		$isSearch = FALSE;
		if ($this->request->hasArgument('query')) {
			$isSearch = TRUE;
			$search = $this->request->getArgument('query');
			$certificates = $this->certificateRepository->findByRequest($search);
			
		}
		$this->view->assign('certificates', $certificates);
		$this->view->assign('key',$search['string'] );
		$this->view->assign('isSearch', $isSearch);
		$this->view->assign('pluginPid', $this->settings['pluginPid']);
	}

	/**
	 * action show
	 * 
	 * @param \NPIC\NpicCertificate\Domain\Model\Certificate $certificate
	 * @return void
	 */
	public function showAction(\NPIC\NpicCertificate\Domain\Model\Certificate $certificate) {
		$hasImage= FALSE;
		if ($certificate->getCertificateMaster()
				|| $certificate->getCertficateMasterTemp()
				|| $certificate->getCertificateBachelor()
				|| $certificate->getCertificateBachelorTemp()
				|| $certificate->getCertificateAssociate()
				|| $certificate->getCertificateFoundation()
				|| $certificate->getTranscript()
			) {
			$hasImage = TRUE;
		}
		//die($hasImage);
		$this->view->assign('hasImage', $hasImage);
		$this->view->assign('certificate', $certificate);
	}

}