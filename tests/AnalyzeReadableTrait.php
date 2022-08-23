<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\Readable;
use DecodeLabs\Gadgets\Constraint\ReadableTrait;

class AnalyzeReadableTrait implements Readable
{
    use ReadableTrait;
}
