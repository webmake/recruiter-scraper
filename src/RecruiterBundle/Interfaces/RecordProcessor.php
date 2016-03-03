<?php
/**
 * Created by PhpStorm.
 * User: Nerijus
 * Date: 2016.03.03
 * Time: 02:34
 * Version: recruiter_1.0.1
 */
namespace RecruiterBundle\Interfaces;

/**
 * Interface RecordProcessor
 * @package RecruiterBundle\Interfaces
 */
interface RecordProcessor
{
    /**
     * @param SimpleRecord $type
     * @param string $data
     */
    public function fillInData(SimpleRecord $type, $data = '');
}
