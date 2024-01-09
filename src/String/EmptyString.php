<?php

declare(strict_types=1);

namespace Elegant\Types\String;

final class EmptyString extends StringType
{
    /**
     * @return string
     */
    public function value(): string
    {
        return '';
    }
}
