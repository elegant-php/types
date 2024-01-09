<?php

declare(strict_types=1);

namespace Elegant\Types\String\Juggling;

use Elegant\Types\Float\Zero;
use PHPUnit\Framework\TestCase;

final class FloatAsStringTest extends TestCase
{
    public function testTypeCasting(): void
    {
        $this->assertSame(
            '0',
            (new FloatAsString(new Zero()))->value()
        );
    }
}
