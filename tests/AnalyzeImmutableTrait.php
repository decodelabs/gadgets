<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\Immutable;
use DecodeLabs\Gadgets\Constraint\ImmutableTrait;

class AnalyzeImmutableTrait implements Immutable
{
    use ImmutableTrait;
}
