<?php

declare(strict_types=1);

namespace Elegant\Types\Float\Juggling;

use Elegant\Types\Float as FType;
use Elegant\Types\Integer as IType;
use PHPUnit\Framework\TestCase;

final class IntegerAsFloatTest extends TestCase
{
    public function testTypeCasting(): void
    {
        $this->assertSame(
            (new FType\Zero())->value(),
            (new IntegerAsFloat(new IType\Zero()))->value()
        );
    }
}
