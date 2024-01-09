<?php

declare(strict_types=1);

namespace Elegant\Types\Float\Juggling;

use Elegant\Types\Float\Zero;
use Elegant\Types\String\EmptyString;
use PHPUnit\Framework\TestCase;

final class StringAsFloatTest extends TestCase
{
    public function testTypeCasting(): void
    {
        $this->assertSame(
            (new Zero())->value(),
            (new StringAsFloat(new EmptyString()))->value()
        );
    }
}
