<?php
/**
 * This file is part of the Gadgets package
 * @license http://opensource.org/licenses/MIT
 */
declare(strict_types=1);
namespace DecodeLabs\Gadgets\Constraint;

interface Requirable
{
    public function isRequired(): bool;
    public function setRequired(bool $required): Requirable;
}