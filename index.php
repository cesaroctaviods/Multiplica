<?php

namespace Multiplica;

require_once __DIR__ . '/vendor/autoload.php';

use Multiplica\Exam\ChallengeTwo;

const FIRST_NUMBER=1;
const LAST_NUMBER=100;

$challengeTwo = new ChallengeTwo();
$challengeTwo->execute(FIRST_NUMBER, LAST_NUMBER);
