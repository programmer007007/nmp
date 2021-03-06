<?php

declare(strict_types=1);

namespace Arrayy\Type;

use Arrayy\Collection\Collection;

/**
 * @extends Collection<array-key,float>
 */
final class FloatCollection extends Collection implements TypeInterface
{
    /**
     * The type (FQCN) associated with this collection.
     *
     * @return string
     */
    public function getType()
    {
        return 'float';
    }
}
