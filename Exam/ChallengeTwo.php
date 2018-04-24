<?php

namespace Multiplica\Exam;

$challengeTwo = new ChallengeTwo();
$challengeTwo->execute();

class ChallengeTwo
{
    const FIRST_NUMBER=1;
    const MAX_NUMBER=100;
    const NO_MULTIPLE_MESSAGE='';
    const MULTIPLE_3_MESSAGE='Linio';
    const MULTIPLE_5_MESSAGE='IT';
    const MULTIPLE_3_AND_5_MESSAGE='Linianos';

    public function execute()
    {
        for ($i=$this::FIRST_NUMBER; $i<$this::MAX_NUMBER+1; $i++) {
            $returnedString=$this->returnStringIfMultiple(3, $i, $this::MULTIPLE_3_MESSAGE);
            $returnedString=$returnedString.$this->returnStringIfMultiple(5, $i, $this::MULTIPLE_5_MESSAGE);

            switch ($returnedString) {
                case $this::NO_MULTIPLE_MESSAGE:
                    echo $i."\n";
                    break;
                case $this::MULTIPLE_3_MESSAGE.$this::MULTIPLE_5_MESSAGE:
                    echo $this::MULTIPLE_3_AND_5_MESSAGE."\n";
                    break;
                default:
                    echo $returnedString."\n";
                    break;
            }
        }
    }

    private function returnStringIfMultiple($multiple, $number, $message)
    {
        if (($number % $multiple) == 0) {
            return $message;
        }
        return $this::NO_MULTIPLE_MESSAGE;
    }
}
