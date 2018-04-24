<?php
/**
 * Created by PhpStorm.
 * User: cesaroctavio
 * Date: 24/04/18
 * Time: 10:16
 */

namespace Multiplica\Exam;

class MultiplesChecker
{
    public function check($multiple, $number, $message)
    {
        if (($number % $multiple) == 0) {
            return $message;
        }
        return '';
    }
}