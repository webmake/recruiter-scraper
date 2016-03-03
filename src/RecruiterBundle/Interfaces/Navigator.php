<?php
/**
 * Created by PhpStorm.
 * User: Nerijus
 * Date: 2016.03.03
 * Time: 02:28
 * Version: recruiter_1.0.1
 */
namespace RecruiterBundle\Interfaces;

use DOMDocument;

/**
 * Interface Navigator
 * @package RecruiterBundle\Interfaces
 */
interface Navigator
{
    /**
     * @param DOMDocument $document
     * @return string
     */
    public function getNextPage(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return DOMDocument
     */
    public function getNextRow(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return bool
     */
    public function isLastPage(DOMDocument $document);

    /**
     * @param DOMDocument $document
     * @return bool
     */
    public function isLastRow(DOMDocument $document);
}
