<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\Disableable;
use DecodeLabs\Gadgets\Constraint\DisableableTrait;

class AnalyzeDisableableTrait implements Disableable
{
    use DisableableTrait;
}
