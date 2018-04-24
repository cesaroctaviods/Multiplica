<?php

namespace Multiplica\Exam;

use Multiplica\Exam\MultiplesChecker;


class MessageGenerator
{
    /** @var MultiplesChecker */
    private  $checker;

    const NO_MULTIPLE_MESSAGE='';
    const MULTIPLE_3_MESSAGE='Linio';
    const MULTIPLE_5_MESSAGE='IT';
    const MULTIPLE_3_AND_5_MESSAGE='Linianos';

    public function __construct(MultiplesChecker $checker)
    {
        $this->checker=$checker;
    }

    public function generate($number){
        $returnedString=$this->checker->check(3, $number, $this::MULTIPLE_3_MESSAGE);
        $returnedString=$returnedString.$this->checker->check(5, $number, $this::MULTIPLE_5_MESSAGE);

        $msg='';
        switch ($returnedString) {
            case $this::NO_MULTIPLE_MESSAGE:
                $msg=$number;
                break;
            case $this::MULTIPLE_3_MESSAGE.$this::MULTIPLE_5_MESSAGE:
                $msg=$this::MULTIPLE_3_AND_5_MESSAGE;
                break;
            default:
                $msg= $returnedString;
                break;
        }

        return $msg;
    }
}