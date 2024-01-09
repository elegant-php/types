<?php

declare(strict_types=1);

namespace Elegant\Types\Integer\Juggling;

use Elegant\Types\Integer\IntegerType;
use Elegant\Types\String\StringType;

final class StringAsInteger extends IntegerType
{
    /**
     * @param StringType $string
     */
    public function __construct(
        private readonly StringType $string
    ) { }

    /**
     * @return int
     */
    public function value(): int
    {
        return (int)$this->string->value();
    }
}
