<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

trait ImmutableTrait
{
    protected bool $immutable = false;

    /**
     * Is this immutable?
     */
    public function isImmutable(): bool
    {
        return $this->immutable;
    }

    /**
     * Set immutable
     *
     * @return $this
     */
    public function setImmutable(bool $immutable): Immutable
    {
        $this->immutable = $immutable;
        return $this;
    }
}
