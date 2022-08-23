<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets\Tests;

use DecodeLabs\Gadgets\Constraint\Writable;
use DecodeLabs\Gadgets\Constraint\WritableTrait;

class AnalyzeWritableTrait implements Writable
{
    use WritableTrait;
}
