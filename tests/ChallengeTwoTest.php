<?php

namespace Multiplica\Tests;

use Multiplica\Exam\ChallengeTwo;
use PHPUnit\Framework\TestCase;

class ChallengeTwoTest extends TestCase
{
    /** @var ChallengeTwo */
    private static $challengeTwo;

    const MAX_NUMBER=100;

    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass()
    {
        self::$challengeTwo = new ChallengeTwo();
    }

    public function testRage()
    {

        self::$challengeTwo->execute(1, 3);
        $this->expectOutputString('1'."\n".'2'."\n".'Linio'."\n");
    }
}
