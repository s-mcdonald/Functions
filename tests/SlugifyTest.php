<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\slugify;

/**
 * @covers \SamMcDonald\Functions\slugify
 */
class SlugifyTest extends TestCase
{
    public function testSomething(): void
    {
        $input = 'this is_the   slug';
        $expected = 'this-is-the-slug';

        self::assertEquals(
            $expected,
            slugify($input)
        );
    }
}
