<?php

declare(strict_types=1);

namespace Elegant\Types\String\Juggling;

use Elegant\Types\Integer\IntegerType;

class IntegerAsString
{
    /**
     * @param IntegerType $integer
     */
    public function __construct(
        private readonly IntegerType $integer
    ) { }

    /**
     * @return string
     */
    public function value(): string
    {
        return (string)$this->integer->value();
    }
}
