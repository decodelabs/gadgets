<?php
/**
 * This file is part of the Gadgets package
 * @license http://opensource.org/licenses/MIT
 */
declare(strict_types=1);
namespace DecodeLabs\Gadgets;

trait ThenTrait
{
    /**
     * Pass parent to callback
     */
    public function then(callable $callback): Then
    {
        $callback($this);
        return $this;
    }


    /**
     * For each value in $values, call callback with parent
     */
    public function thenEach(array $values, callable $callback): Then
    {
        foreach ($values as $key => $value) {
            $callback($this, $value, $key);
        }

        return $this;
    }


    /**
     * If $truth, call $yes, otherwise call $no
     */
    public function thenIf($truth, callable $yes, callable $no=null): Then
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
    public function thenUnless($truth, callable $no, callable $yes=null): Then
    {
        if (!$truth) {
            $no($this, $truth);
        } elseif ($yes) {
            $yes($this, $truth);
        }

        return $this;
    }
}
