<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\Requirable;
use DecodeLabs\Gadgets\Constraint\RequirableTrait;

class AnalyzeRequirableTrait implements Requirable
{
    use RequirableTrait;
}
