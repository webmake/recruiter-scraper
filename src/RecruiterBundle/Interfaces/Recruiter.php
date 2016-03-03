<?php
/**
 * Created by PhpStorm.
 * User: Nerijus
 * Date: 2016.03.03
 * Time: 02:21
 * Version: recruiter_1.0.1
 */
namespace RecruiterBundle\Interfaces;

use DOMDocument;

/**
 * Interface Recruiter
 * @package RecruiterBundle\Interfaces
 */
interface Recruiter
{
    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchRecruiter(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchLocation(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchSalary(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchPosted(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchCloses(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchIndustry(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchJobFunction(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchJobLevel(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchHours(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchContract(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchListingType(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchEducationLevel(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return string
     */
    public function fetchDescription(DOMDocument $document);
}
