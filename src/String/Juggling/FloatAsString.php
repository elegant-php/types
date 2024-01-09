<?php

declare(strict_types=1);

namespace Elegant\Types\String\Juggling;

use Elegant\Types\Float\FloatType;
use Elegant\Types\String\StringType;

final class FloatAsString extends StringType
{
    /**
     * @param FloatType $float
     */
    public function __construct(
        private readonly FloatType $float
    ) { }

    /**
     * @return string
     */
    public function value(): string
    {
        return (string)$this->float->value();
    }
}
