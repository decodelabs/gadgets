<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\ReadOnlyable;
use DecodeLabs\Gadgets\Constraint\ReadOnlyableTrait;

class AnalyzeReadOnlyableTrait implements ReadOnlyable
{
    use ReadOnlyableTrait;
}
