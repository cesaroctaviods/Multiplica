<?php

namespace Multiplica\Exam;

require_once  dirname(__FILE__). '/MultiplesChecker.php';

use  Multiplica\Exam\MultiplesChecker;

$checker = new MultiplesChecker();
$challengeTwo = new ChallengeTwo($checker);
$challengeTwo->execute();

class ChallengeTwo
{
    const FIRST_NUMBER=1;
    const MAX_NUMBER=100;
    const NO_MULTIPLE_MESSAGE='';
    const MULTIPLE_3_MESSAGE='Linio';
    const MULTIPLE_5_MESSAGE='IT';
    const MULTIPLE_3_AND_5_MESSAGE='Linianos';

    /** @var MultiplesChecker */
    private  $checker;

    public function __construct(MultiplesChecker $checker)
    {
        $this->checker=$checker;
    }

    public function execute()
    {
        for ($i=$this::FIRST_NUMBER; $i<$this::MAX_NUMBER+1; $i++) {
            $returnedString=$this->checker->check(3, $i, $this::MULTIPLE_3_MESSAGE);
            $returnedString=$returnedString.$this->checker->check(5, $i, $this::MULTIPLE_5_MESSAGE);

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


}
