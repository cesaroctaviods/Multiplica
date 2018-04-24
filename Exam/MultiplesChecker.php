<?php

namespace Multiplica\Exam;

class MultiplesChecker
{
    /**
     * @param $multiple
     * @param $number
     * @param $message
     * @return string
     */
    public function check($multiple, $number, $message)
    {
        if (($number % $multiple) == 0) {
            return $message;
        }
        return '';
    }
}
