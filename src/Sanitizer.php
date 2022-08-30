<?php

/**
 * @package Gadgets
 * @license http://opensource.org/licenses/MIT
 */

declare(strict_types=1);

namespace DecodeLabs\Gadgets;

use Closure;

use DecodeLabs\Exceptional;
use DecodeLabs\Tightrope\Manifest\Requirable;
use DecodeLabs\Tightrope\Manifest\RequirableTrait;

class Sanitizer implements Requirable
{
    use RequirableTrait;

    protected mixed $value;

    /**
     * Init with raw value
     *
     * @param mixed $value
     */
    public function __construct(
        mixed $value,
        bool $required = true
    ) {
        $this->value = $value;
        $this->required = $required;
    }


    /**
     * Get original value
     */
    public function asIs(): mixed
    {
        return $this->value;
    }

    /**
     * Get value as boolean
     */
    public function asBool(mixed $default = null): ?bool
    {
        if (null === ($value = $this->prepareValue($default))) {
            return null;
        }

        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }

    /**
     * Get value as int
     */
    public function asInt(mixed $default = null): ?int
    {
        if (null === ($value = $this->prepareValue($default))) {
            return null;
        }

        if (!is_numeric($value)) {
            throw Exceptional::UnexpectedValue(
                'Value is not numeric',
                null,
                $value
            );
        }

        return (int)$value;
    }

    /**
     * Get value as float
     */
    public function asFloat(mixed $default = null): ?float
    {
        if (null === ($value = $this->prepareValue($default))) {
            return null;
        }

        if (!is_numeric($value)) {
            throw Exceptional::UnexpectedValue(
                'Value is not numeric',
                null,
                $value
            );
        }

        return (float)$value;
    }

    /**
     * Get value as string
     */
    public function asString(mixed $default = null): ?string
    {
        if (null === ($value = $this->prepareValue($default))) {
            return null;
        }

        if (
            is_scalar($value) ||
            (
                is_object($value) &&
                method_exists($value, '__toString')
            )
        ) {
            return (string)$value;
        }

        return null;
    }

    /**
     * Get value as slug string
     */
    public function asSlug(mixed $default = null): ?string
    {
        if (null === ($value = $this->asString($default))) {
            return null;
        }

        $value = strtolower($value);

        if (!preg_match('/^[a-z0-9]([a-z0-9-_]*[a-z0-9])?$/', $value)) {
            throw Exceptional::UnexpectedValue(
                'Value is not a valid slug',
                null,
                $value
            );
        }

        return $value;
    }

    /**
     * Get value as Guid string
     */
    public function asGuid(mixed $default = null): ?string
    {
        if (null === ($value = $this->asString($default))) {
            return null;
        }

        $value = strtolower($value);

        if (!preg_match('/^[a-z0-9]{8}-(?:[a-z0-9]{4}-){3}[a-z0-9]{12}$/', $value)) {
            throw Exceptional::UnexpectedValue(
                'Value is not a valid GUID',
                null,
                $value
            );
        }

        return $value;
    }

    /**
     * Prepare output value
     */
    protected function prepareValue(mixed $default = null): mixed
    {
        $value = $this->value ?? $default;

        if ($value instanceof Closure) {
            $value = $value();
        }

        if ($this->required && $value === null) {
            throw Exceptional::UnexpectedValue(
                'Value is required'
            );
        }

        return $value;
    }

    /**
     * Sanitize value using callback
     */
    public function with(callable $callback): mixed
    {
        $value = $callback($this->value);

        if ($this->required && $value === null) {
            throw Exceptional::UnexpectedValue(
                'Value is required'
            );
        }

        return $value;
    }
}
