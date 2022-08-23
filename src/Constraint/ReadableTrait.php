<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

trait ReadableTrait
{
    protected bool $readable = false;

    /**
     * Is this readable?
     */
    public function isReadable(): bool
    {
        return $this->readable;
    }

    /**
     * Set readable
     *
     * @return $this
     */
    public function setReadable(bool $readable): Readable
    {
        $this->readable = $readable;
        return $this;
    }
}
