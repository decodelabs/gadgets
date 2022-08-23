<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

trait ReadOnlyableTrait
{
    protected bool $readOnly = false;

    /**
     * Is this read only?
     */
    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * Set read only
     *
     * @return $this
     */
    public function setReadOnly(bool $readOnly): ReadOnlyable
    {
        $this->readOnly = $readOnly;
        return $this;
    }
}
