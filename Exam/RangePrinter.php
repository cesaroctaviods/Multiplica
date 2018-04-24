<?php

namespace Multiplica\Exam;

use Multiplica\Exam\MessageSelector;

class RangePrinter
{

    /** @var MessageSelector  */
    private $messageSelector;

    public function __construct(MessageSelector $messageSelector)
    {
        $this->messageSelector=$messageSelector;

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
