<?php
namespace NPIC\NpicCertificate\Domain\Model;


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
 * Certificate Object
 */
class Certificate extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * nameEnglish
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $nameEnglish = '';

	/**
	 * nameKhmer
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $nameKhmer = '';

	/**
	 * certificateId
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $certificateId = '';

	/**
	 * studentId
	 * 
	 * @var string
	 */
	protected $studentId = '';

	/**
	 * examDate
	 * 
	 * @var \DateTime
	 */
	protected $examDate = NULL;

	/**
	 * major
	 * 
	 * @var integer
	 */
	protected $major = 0;

	/**
	 * certificateBachelor
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $certificateBachelor = NULL;

	/**
	 * certificateBachelorTemp
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $certificateBachelorTemp = NULL;

	/**
	 * certificateAssociate
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $certificateAssociate = NULL;

	/**
	 * certificateAssociateTemp
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $certificateAssociateTemp = NULL;

	/**
	 * certificateFoundation
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $certificateFoundation = NULL;

	/**
	 * transcript
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $transcript = NULL;

	/**
	 * dob
	 * 
	 * @var \DateTime
	 */
	protected $dob = NULL;

	/**
	 * photo
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $photo = NULL;

	/**
	 * pob
	 * 
	 * @var string
	 */
	protected $pob = '';

	/**
	 * certificateMaster
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $certificateMaster = NULL;

	/**
	 * certficateMasterTemp
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $certficateMasterTemp = NULL;

	/**
	 * Returns the nameEnglish
	 * 
	 * @return string $nameEnglish
	 */
	public function getNameEnglish() {
		return $this->nameEnglish;
	}

	/**
	 * Sets the nameEnglish
	 * 
	 * @param string $nameEnglish
	 * @return void
	 */
	public function setNameEnglish($nameEnglish) {
		$this->nameEnglish = $nameEnglish;
	}

	/**
	 * Returns the nameKhmer
	 * 
	 * @return string $nameKhmer
	 */
	public function getNameKhmer() {
		return $this->nameKhmer;
	}

	/**
	 * Sets the nameKhmer
	 * 
	 * @param string $nameKhmer
	 * @return void
	 */
	public function setNameKhmer($nameKhmer) {
		$this->nameKhmer = $nameKhmer;
	}

	/**
	 * Returns the certificateId
	 * 
	 * @return string $certificateId
	 */
	public function getCertificateId() {
		return $this->certificateId;
	}

	/**
	 * Sets the certificateId
	 * 
	 * @param string $certificateId
	 * @return void
	 */
	public function setCertificateId($certificateId) {
		$this->certificateId = $certificateId;
	}

	/**
	 * Returns the studentId
	 * 
	 * @return string $studentId
	 */
	public function getStudentId() {
		return $this->studentId;
	}

	/**
	 * Sets the studentId
	 * 
	 * @param string $studentId
	 * @return void
	 */
	public function setStudentId($studentId) {
		$this->studentId = $studentId;
	}

	/**
	 * Returns the examDate
	 * 
	 * @return \DateTime $examDate
	 */
	public function getExamDate() {
		return $this->examDate;
	}

	/**
	 * Sets the examDate
	 * 
	 * @param \DateTime $examDate
	 * @return void
	 */
	public function setExamDate(\DateTime $examDate) {
		$this->examDate = $examDate;
	}

	/**
	 * Returns the major
	 * 
	 * @return integer $major
	 */
	public function getMajor() {
		return $this->major;
	}

	/**
	 * Sets the major
	 * 
	 * @param integer $major
	 * @return void
	 */
	public function setMajor($major) {
		$this->major = $major;
	}

	/**
	 * Returns the certificateBachelor
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateBachelor
	 */
	public function getCertificateBachelor() {
		return $this->certificateBachelor;
	}

	/**
	 * Sets the certificateBachelor
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateBachelor
	 * @return void
	 */
	public function setCertificateBachelor(\TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateBachelor) {
		$this->certificateBachelor = $certificateBachelor;
	}

	/**
	 * Returns the certificateBachelorTemp
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateBachelorTemp
	 */
	public function getCertificateBachelorTemp() {
		return $this->certificateBachelorTemp;
	}

	/**
	 * Sets the certificateBachelorTemp
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateBachelorTemp
	 * @return void
	 */
	public function setCertificateBachelorTemp(\TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateBachelorTemp) {
		$this->certificateBachelorTemp = $certificateBachelorTemp;
	}

	/**
	 * Returns the certificateAssociate
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateAssociate
	 */
	public function getCertificateAssociate() {
		return $this->certificateAssociate;
	}

	/**
	 * Sets the certificateAssociate
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateAssociate
	 * @return void
	 */
	public function setCertificateAssociate(\TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateAssociate) {
		$this->certificateAssociate = $certificateAssociate;
	}

	/**
	 * Returns the certificateAssociateTemp
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateAssociateTemp
	 */
	public function getCertificateAssociateTemp() {
		return $this->certificateAssociateTemp;
	}

	/**
	 * Sets the certificateAssociateTemp
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateAssociateTemp
	 * @return void
	 */
	public function setCertificateAssociateTemp(\TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateAssociateTemp) {
		$this->certificateAssociateTemp = $certificateAssociateTemp;
	}

	/**
	 * Returns the certificateFoundation
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateFoundation
	 */
	public function getCertificateFoundation() {
		return $this->certificateFoundation;
	}

	/**
	 * Sets the certificateFoundation
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateFoundation
	 * @return void
	 */
	public function setCertificateFoundation(\TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateFoundation) {
		$this->certificateFoundation = $certificateFoundation;
	}

	/**
	 * Returns the transcript
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $transcript
	 */
	public function getTranscript() {
		return $this->transcript;
	}

	/**
	 * Sets the transcript
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $transcript
	 * @return void
	 */
	public function setTranscript(\TYPO3\CMS\Extbase\Domain\Model\FileReference $transcript) {
		$this->transcript = $transcript;
	}

	/**
	 * Returns the dob
	 * 
	 * @return \DateTime $dob
	 */
	public function getDob() {
		return $this->dob;
	}

	/**
	 * Sets the dob
	 * 
	 * @param \DateTime $dob
	 * @return void
	 */
	public function setDob(\DateTime $dob) {
		$this->dob = $dob;
	}

	/**
	 * Returns the photo
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * Sets the photo
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
	 * @return void
	 */
	public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo) {
		$this->photo = $photo;
	}

	/**
	 * Returns the pob
	 * 
	 * @return string $pob
	 */
	public function getPob() {
		return $this->pob;
	}

	/**
	 * Sets the pob
	 * 
	 * @param string $pob
	 * @return void
	 */
	public function setPob($pob) {
		$this->pob = $pob;
	}

	/**
	 * Returns the certificateMaster
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateMaster
	 */
	public function getCertificateMaster() {
		return $this->certificateMaster;
	}

	/**
	 * Sets the certificateMaster
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateMaster
	 * @return void
	 */
	public function setCertificateMaster(\TYPO3\CMS\Extbase\Domain\Model\FileReference $certificateMaster) {
		$this->certificateMaster = $certificateMaster;
	}

	/**
	 * Returns the certficateMasterTemp
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $certficateMasterTemp
	 */
	public function getCertficateMasterTemp() {
		return $this->certficateMasterTemp;
	}

	/**
	 * Sets the certficateMasterTemp
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $certficateMasterTemp
	 * @return void
	 */
	public function setCertficateMasterTemp(\TYPO3\CMS\Extbase\Domain\Model\FileReference $certficateMasterTemp) {
		$this->certficateMasterTemp = $certficateMasterTemp;
	}

}