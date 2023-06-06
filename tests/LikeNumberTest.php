<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\like_number;

/**
 * @covers \SamMcDonald\Functions\dilike_number
 */
class LikeNumberTest extends TestCase
{
    public function testLikeNumber(): void
    {
        self::assertFalse(like_number("a0123456"));
        self::assertTrue(like_number("0123456"));
        self::assertTrue(like_number("123456.78"));
        self::assertTrue(like_number(123456));
        self::assertTrue(like_number(123456.789));
    }
}
