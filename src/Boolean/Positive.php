<?php

declare(strict_types=1);

namespace Elegant\Types\Boolean;

final class Positive extends BooleanType
{
    /**
     * @return bool
     */
    public function value(): bool
    {
        return true;
    }
}
