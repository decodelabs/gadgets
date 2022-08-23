<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

interface Writable
{
    public function isWritable(): bool;

    /**
     * @return $this
     */
    public function setWritable(bool $writable): Writable;
}
