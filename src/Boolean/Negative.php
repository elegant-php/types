<?php

declare(strict_types=1);

namespace Elegant\Types\Boolean;

final class Negative extends BooleanType
{
    /**
     * @return bool
     */
    public function value(): bool
    {
        return false;
    }
}
