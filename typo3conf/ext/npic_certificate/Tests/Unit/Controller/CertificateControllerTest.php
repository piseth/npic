<?php
namespace NPIC\NpicCertificate\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Sok Piseth <sokpiseth777@gmail.com>, NPIC
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

/**
 * Test case for class NPIC\NpicCertificate\Controller\CertificateController.
 *
 * @author Sok Piseth <sokpiseth777@gmail.com>
 */
class CertificateControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \NPIC\NpicCertificate\Controller\CertificateController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('NPIC\\NpicCertificate\\Controller\\CertificateController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllCertificatesFromRepositoryAndAssignsThemToView() {

		$allCertificates = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$certificateRepository = $this->getMock('NPIC\\NpicCertificate\\Domain\\Repository\\CertificateRepository', array('findAll'), array(), '', FALSE);
		$certificateRepository->expects($this->once())->method('findAll')->will($this->returnValue($allCertificates));
		$this->inject($this->subject, 'certificateRepository', $certificateRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('certificates', $allCertificates);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenCertificateToView() {
		$certificate = new \NPIC\NpicCertificate\Domain\Model\Certificate();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('certificate', $certificate);

		$this->subject->showAction($certificate);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenCertificateToView() {
		$certificate = new \NPIC\NpicCertificate\Domain\Model\Certificate();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newCertificate', $certificate);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($certificate);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenCertificateToCertificateRepository() {
		$certificate = new \NPIC\NpicCertificate\Domain\Model\Certificate();

		$certificateRepository = $this->getMock('NPIC\\NpicCertificate\\Domain\\Repository\\CertificateRepository', array('add'), array(), '', FALSE);
		$certificateRepository->expects($this->once())->method('add')->with($certificate);
		$this->inject($this->subject, 'certificateRepository', $certificateRepository);

		$this->subject->createAction($certificate);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenCertificateToView() {
		$certificate = new \NPIC\NpicCertificate\Domain\Model\Certificate();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('certificate', $certificate);

		$this->subject->editAction($certificate);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenCertificateInCertificateRepository() {
		$certificate = new \NPIC\NpicCertificate\Domain\Model\Certificate();

		$certificateRepository = $this->getMock('NPIC\\NpicCertificate\\Domain\\Repository\\CertificateRepository', array('update'), array(), '', FALSE);
		$certificateRepository->expects($this->once())->method('update')->with($certificate);
		$this->inject($this->subject, 'certificateRepository', $certificateRepository);

		$this->subject->updateAction($certificate);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenCertificateFromCertificateRepository() {
		$certificate = new \NPIC\NpicCertificate\Domain\Model\Certificate();

		$certificateRepository = $this->getMock('NPIC\\NpicCertificate\\Domain\\Repository\\CertificateRepository', array('remove'), array(), '', FALSE);
		$certificateRepository->expects($this->once())->method('remove')->with($certificate);
		$this->inject($this->subject, 'certificateRepository', $certificateRepository);

		$this->subject->deleteAction($certificate);
	}
}
