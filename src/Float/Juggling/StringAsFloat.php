<?php

declare(strict_types=1);

namespace Elegant\Types\Float\Juggling;

use Elegant\Types\Float\FloatType;
use Elegant\Types\String\StringType;

final class StringAsFloat extends FloatType
{
    /**
     * @param StringType $string
     */
    public function __construct(
        private readonly StringType $string
    ) { }

    /**
     * @return float
     */
    public function value(): float
    {
        return (float)$this->string->value();
    }
}
