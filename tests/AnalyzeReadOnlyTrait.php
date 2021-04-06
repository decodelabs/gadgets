<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\ReadOnly;
use DecodeLabs\Gadgets\Constraint\ReadOnlyTrait;

class AnalyzeReadOnlyTrait implements ReadOnly
{
    use ReadOnlyTrait;
}
