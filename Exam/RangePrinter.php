<?php

namespace Multiplica\Exam;

use Multiplica\Exam\MessageSelector;

class RangePrinter
{
    private $firstNumber;
    private $lastNumber;

    /** @var MessageSelector  */
    private $messageSelector;

    public function __construct(MessageSelector $messageSelector, $firstNumber, $lastNumber)
    {
        $this->messageSelector=$messageSelector;
        $this->firstNumber=$firstNumber;
        $this->lastNumber=$lastNumber;
    }

    public function execute()
    {
        for ($i=$this->firstNumber; $i<$this->lastNumber +1; $i++) {
            $message = $this->messageSelector->select($i);
            $this->printMessage($message);
        }
    }

    private function printMessage($message){
        echo $message."\n";

    }




}
