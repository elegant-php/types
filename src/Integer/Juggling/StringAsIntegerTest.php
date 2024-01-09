<?php

declare(strict_types=1);

namespace Elegant\Types\Integer\Juggling;

use Elegant\Types\Integer\Zero;
use Elegant\Types\String\EmptyString;
use PHPUnit\Framework\TestCase;

final class StringAsIntegerTest extends TestCase
{
    public function testTypeCasting(): void
    {
        $this->assertSame(
            (new Zero())->value(),
            (new StringAsInteger(new EmptyString()))->value()
        );
    }
}
