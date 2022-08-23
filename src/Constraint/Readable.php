<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Constraint;

interface Readable
{
    public function isReadable(): bool;

    /**
     * @return $this
     */
    public function setReadable(bool $readable): Readable;
}
