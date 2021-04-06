<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\Nullable;
use DecodeLabs\Gadgets\Constraint\NullableTrait;

class AnalyzeNullableTrait implements Nullable
{
    use NullableTrait;
}
