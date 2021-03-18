<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

trait DisableableTrait
{
    protected $disabled = false;

    /**
     * Is this disabled?
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * Set disabled
     */
    public function setDisabled(bool $disabled): Disableable
    {
        $this->disabled = $disabled;
        return $this;
    }
}
