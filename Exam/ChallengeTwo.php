<?php

namespace Multiplica\Exam;

class ChallengeTwo
{

    /** @var MessageSelector  */
    private $messageSelector;

    /**
     * ChallengeTwo constructor.
     */
    public function __construct()
    {
        $checker = new MultiplesChecker();
        $this->messageSelector = new MessageSelector($checker);
    }

    /**
     * @param $firstNumber
     * @param $lastNumber
     */
    public function execute($firstNumber, $lastNumber)
    {
        for ($i=$firstNumber; $i<$lastNumber +1; $i++) {
            $message = $this->messageSelector->select($i);
            $this->printMessage($message);
        }
    }

    /**
     * @param $message
     */
    private function printMessage($message)
    {
        echo $message."\n";
    }
}
