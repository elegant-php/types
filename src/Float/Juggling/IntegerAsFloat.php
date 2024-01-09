<?php

declare(strict_types=1);

namespace Elegant\Types\Float\Juggling;

use Elegant\Types\Float\FloatType;
use Elegant\Types\Integer\IntegerType;

final class IntegerAsFloat extends FloatType
{
    /**
     * @param IntegerType $integer
     */
    public function __construct(
        private readonly IntegerType $integer
    ) { }

    /**
     * @return float
     */
    public function value(): float
    {
        return (float)$this->integer->value();
    }
}
