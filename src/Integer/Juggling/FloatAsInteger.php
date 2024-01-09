<?php

declare(strict_types=1);

namespace Elegant\Types\Integer\Juggling;

use Elegant\Types\Float\FloatType;
use Elegant\Types\Integer\IntegerType;

final class FloatAsInteger extends IntegerType
{
    /**
     * @param FloatType $float
     */
    public function __construct(
        private readonly FloatType $float
    ) { }

    /**
     * @return int
     */
    public function value(): int
    {
        return (int)$this->float->value();
    }
}
