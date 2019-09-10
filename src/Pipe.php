<?php
/**
 * This file is part of the Gadgets package
 * @license http://opensource.org/licenses/MIT
 */
declare(strict_types=1);
namespace DecodeLabs\Gadgets;

interface Pipe
{
    public function pipe(callable $callback): Pipe;
    public function pipeEach(array $values, callable $callback): Pipe;
    public function when($truth, callable $yes, callable $no=null): Pipe;
    public function unless($truth, callable $no, callable $yes=null): Pipe;
}
