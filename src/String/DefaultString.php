<?php

declare(strict_types=1);

namespace Elegant\Types\String;

final class DefaultString extends StringType
{
    /**
     * @param string $value
     */
    public function __construct(
        private readonly string $value
    ) { }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }
}
