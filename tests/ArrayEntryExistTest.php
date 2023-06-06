<?php

namespace Tests\SamMcDonald\Functions;

use PHPUnit\Framework\TestCase;
use function SamMcDonald\Functions\array_entry_exist;

/**
 * @covers \SamMcDonald\Functions\array_entry_exist
 */
class ArrayEntryExistTest extends TestCase
{
    public function testArrayEntryExist(): void
    {
        $array = [
          0 => 'buz',
          'a' => 'foo',
          'b' => 'bar',
          'c' => 'baz',
        ];

        self::assertTrue(array_entry_exist($array, 'a', 'foo' ));
        self::assertFalse(array_entry_exist($array, 'b', 'foo' ));
        self::assertFalse(array_entry_exist($array, 0, 'foo' ));
        self::assertTrue(array_entry_exist($array, 0, 'buz' ));
    }
}
