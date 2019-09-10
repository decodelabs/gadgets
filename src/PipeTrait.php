<?php
/**
 * This file is part of the Gadgets package
 * @license http://opensource.org/licenses/MIT
 */
declare(strict_types=1);
namespace DecodeLabs\Gadgets;

trait PipeTrait
{
    /**
     * Pass parent to callback
     */
    public function pipe(callable $callback): Pipe
    {
        $callback($this);
        return $this;
    }


    /**
     * For each value in $values, call callback with parent
     */
    public function pipeEach(array $values, callable $callback): Pipe
    {
        foreach ($values as $key => $value) {
            $callback($this, $value, $key);
        }

        return $this;
    }


    /**
     * If $truth, call $yes, otherwise call $no
     */
    public function when($truth, callable $yes, callable $no=null): Pipe
    {
        if ($truth) {
            $yes($this, $truth);
        } elseif ($no) {
            $no($this, $truth);
        }

        return $this;
    }


    /**
     * If !$truth, call $no, otherwise call $yes
     */
    public function unless($truth, callable $no, callable $yes=null): Pipe
    {
        if (!$truth) {
            $no($this, $truth);
        } elseif ($yes) {
            $yes($this, $truth);
        }

        return $this;
    }
}
