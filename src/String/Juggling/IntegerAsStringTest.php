<?php

declare(strict_types=1);

namespace Elegant\Types\String\Juggling;

use Elegant\Types\Integer\Zero;
use PHPUnit\Framework\TestCase;

final class IntegerAsStringTest extends TestCase
{
    public function testTypeCasting(): void
    {
        $this->assertSame(
            '0',
            (new IntegerAsString(new Zero()))->value()
        );
    }
}
