<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

interface Immutable
{
    public function isImmutable(): bool;

    /**
     * @return $this
     */
    public function setImmutable(bool $immutable): Immutable;
}
