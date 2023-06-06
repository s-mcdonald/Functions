<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\random_bool;

/**
 * @covers \SamMcDonald\Functions\random_bool
 */
class RandomBoolTest extends TestCase
{
    public function testRandomBool(): void
    {
        $true = [];
        $false = [];

        for($i = 0; $i < 1000; $i++) {
            $b = random_bool();
            if ($b === true) {
                $true[] = $b;
            } else {
                $false[] = $b;
            }
            self::assertIsBool(
                $b
            );
        }

        self::assertGreaterThan(0, $true);
        self::assertGreaterThan(0, $false);
    }
}
