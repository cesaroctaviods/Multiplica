<?php

namespace Multiplica\Exam;

use Multiplica\Exam\MessageSelector;

class ChallengeTwo
{

    /** @var MessageSelector  */
    private $messageSelector;

    public function __construct( )
    {
        $checker = new MultiplesChecker();
        $this->messageSelector = new MessageSelector($checker);
    }

    public function execute($firstNumber, $lastNumber)
    {
        for ($i=$firstNumber; $i<$lastNumber +1; $i++) {
            $message = $this->messageSelector->select($i);
            $this->printMessage($message);
        }
    }

    private function printMessage($message){
        echo $message."\n";

    }




}
