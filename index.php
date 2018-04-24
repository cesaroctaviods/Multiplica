<?php

namespace Multiplica;

require_once __DIR__ . '/vendor/autoload.php';

use Multiplica\Exam\MultiplesChecker;
use Multiplica\Exam\ChallengeTwo;
use Multiplica\Exam\MessageGenerator;

const FIRST_NUMBER=1;
const LAST_NUMBER=100;
$checker = new MultiplesChecker();
$generator = new MessageGenerator($checker);
$challengeTwo = new ChallengeTwo($generator, FIRST_NUMBER, LAST_NUMBER);
$challengeTwo->execute();