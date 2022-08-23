<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

trait WritableTrait
{
    protected bool $writable = false;

    /**
     * Is this writable?
     */
    public function isWritable(): bool
    {
        return $this->writable;
    }

    /**
     * Set writable
     *
     * @return $this
     */
    public function setWritable(bool $writable): Writable
    {
        $this->writable = $writable;
        return $this;
    }
}
