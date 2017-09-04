<?php

namespace NPIC\NpicCertificate\Tests\Unit\Domain\Model;

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
 * Test case for class \NPIC\NpicCertificate\Domain\Model\Certificate.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Sok Piseth <sokpiseth777@gmail.com>
 */
class CertificateTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \NPIC\NpicCertificate\Domain\Model\Certificate
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \NPIC\NpicCertificate\Domain\Model\Certificate();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameEnglishReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNameEnglish()
		);
	}

	/**
	 * @test
	 */
	public function setNameEnglishForStringSetsNameEnglish() {
		$this->subject->setNameEnglish('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nameEnglish',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNameKhmerReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNameKhmer()
		);
	}

	/**
	 * @test
	 */
	public function setNameKhmerForStringSetsNameKhmer() {
		$this->subject->setNameKhmer('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nameKhmer',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertificateIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCertificateId()
		);
	}

	/**
	 * @test
	 */
	public function setCertificateIdForStringSetsCertificateId() {
		$this->subject->setCertificateId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'certificateId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStudentIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStudentId()
		);
	}

	/**
	 * @test
	 */
	public function setStudentIdForStringSetsStudentId() {
		$this->subject->setStudentId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'studentId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getExamDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getExamDate()
		);
	}

	/**
	 * @test
	 */
	public function setExamDateForDateTimeSetsExamDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setExamDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'examDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMajorReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMajor()
		);
	}

	/**
	 * @test
	 */
	public function setMajorForIntegerSetsMajor() {
		$this->subject->setMajor(12);

		$this->assertAttributeEquals(
			12,
			'major',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertificateBachelorReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCertificateBachelor()
		);
	}

	/**
	 * @test
	 */
	public function setCertificateBachelorForFileReferenceSetsCertificateBachelor() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCertificateBachelor($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'certificateBachelor',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertificateBachelorTempReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCertificateBachelorTemp()
		);
	}

	/**
	 * @test
	 */
	public function setCertificateBachelorTempForFileReferenceSetsCertificateBachelorTemp() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCertificateBachelorTemp($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'certificateBachelorTemp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertificateAssociateReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCertificateAssociate()
		);
	}

	/**
	 * @test
	 */
	public function setCertificateAssociateForFileReferenceSetsCertificateAssociate() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCertificateAssociate($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'certificateAssociate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertificateAssociateTempReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCertificateAssociateTemp()
		);
	}

	/**
	 * @test
	 */
	public function setCertificateAssociateTempForFileReferenceSetsCertificateAssociateTemp() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCertificateAssociateTemp($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'certificateAssociateTemp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertificateFoundationReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCertificateFoundation()
		);
	}

	/**
	 * @test
	 */
	public function setCertificateFoundationForFileReferenceSetsCertificateFoundation() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCertificateFoundation($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'certificateFoundation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTranscriptReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getTranscript()
		);
	}

	/**
	 * @test
	 */
	public function setTranscriptForFileReferenceSetsTranscript() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setTranscript($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'transcript',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDobReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDob()
		);
	}

	/**
	 * @test
	 */
	public function setDobForDateTimeSetsDob() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDob($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'dob',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhotoReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getPhoto()
		);
	}

	/**
	 * @test
	 */
	public function setPhotoForFileReferenceSetsPhoto() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPhoto($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'photo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPobReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPob()
		);
	}

	/**
	 * @test
	 */
	public function setPobForStringSetsPob() {
		$this->subject->setPob('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'pob',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertificateMasterReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCertificateMaster()
		);
	}

	/**
	 * @test
	 */
	public function setCertificateMasterForFileReferenceSetsCertificateMaster() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCertificateMaster($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'certificateMaster',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCertficateMasterTempReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getCertficateMasterTemp()
		);
	}

	/**
	 * @test
	 */
	public function setCertficateMasterTempForFileReferenceSetsCertficateMasterTemp() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setCertficateMasterTemp($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'certficateMasterTemp',
			$this->subject
		);
	}
}
