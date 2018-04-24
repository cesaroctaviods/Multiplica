<?php

namespace Multiplica\Exam;

use Multiplica\Exam\MessageGenerator;

class ChallengeTwo
{
    private $firstNumber;
    private $lastNumber;

    /** @var MessageGenerator  */
    private $generator;

    public function __construct(MessageGenerator $generator, $firstNumber, $lastNumber)
    {
        $this->generator=$generator;
        $this->firstNumber=$firstNumber;
        $this->lastNumber=$lastNumber;
    }

    public function execute()
    {
        for ($i=$this->firstNumber; $i<$this->lastNumber +1; $i++) {
            $message = $this->generator->generate($i);
            $this->printMessage($message);
        }
    }

    private function printMessage($message){
        echo $message."\n";

    }




}
