<?php

namespace Multiplica;

require_once __DIR__ . '/vendor/autoload.php';

use Multiplica\Exam\MessageSelector;
use Multiplica\Exam\MultiplesChecker;
use Multiplica\Exam\RangePrinter;

const FIRST_NUMBER=1;
const LAST_NUMBER=100;
$checker = new MultiplesChecker();
$generator = new MessageSelector($checker);
$rangePrinter = new RangePrinter($generator, FIRST_NUMBER, LAST_NUMBER);
$rangePrinter->execute();