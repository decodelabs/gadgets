<?php
/**
 * This file is part of the Gadgets package
 * @license http://opensource.org/licenses/MIT
 */
declare(strict_types=1);
namespace DecodeLabs\Gadgets\Constraint;

trait ReadOnlyTrait
{
    protected $required = false;

    /**
     * Is this readOnly?
     */
    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * Set readOnly
     */
    public function setReadOnly(bool $readOnly): ReadOnly
    {
        $this->readOnly = $readOnly;
        return $this;
    }
}
