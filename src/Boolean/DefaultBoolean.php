<?php

declare(strict_types=1);

namespace Elegant\Types\Boolean;

final class DefaultBoolean extends BooleanType
{
    /**
     * @param bool $value
     */
    public function __construct(
        private readonly bool $value
    ) { }

    /**
     * @return bool
     */
    public function value(): bool
    {
        return $this->value;
    }
}
