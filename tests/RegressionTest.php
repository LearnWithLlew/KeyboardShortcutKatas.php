<?php
declare(strict_types=1);

namespace LearningWithLlew\Tests;

use ApprovalTests\Approvals;

use LearnWithLlew\Navigation;
use PHPUnit\Framework\TestCase;

class RegressionTest extends TestCase
{
    /** @test */
    public function navigation_compiles()
    {
        Navigation::startHere();
    }


}
