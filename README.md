# Gadgets

[![PHP from Packagist](https://img.shields.io/packagist/php-v/decodelabs/gadgets?style=flat-square)](https://packagist.org/packages/decodelabs/gadgets)
[![Latest Version](https://img.shields.io/packagist/v/decodelabs/gadgets.svg?style=flat-square)](https://packagist.org/packages/decodelabs/gadgets)
[![Total Downloads](https://img.shields.io/packagist/dt/decodelabs/gadgets.svg?style=flat-square)](https://packagist.org/packages/decodelabs/gadgets)
[![Build Status](https://img.shields.io/travis/com/decodelabs/gadgets/main.svg?style=flat-square)](https://app.travis-ci.com/github/decodelabs/gadgets)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-44CC11.svg?longCache=true&style=flat-square)](https://github.com/phpstan/phpstan)
[![License](https://img.shields.io/packagist/l/decodelabs/gadgets?style=flat-square)](https://packagist.org/packages/decodelabs/gadgets)

Useful tools for building PHP libraries.

## Installation

Install via Composer:

```bash
composer require decodelabs/gadgets
```

### PHP version

_Please note, the final v1 releases of all Decode Labs libraries will target **PHP8** or above._

Current support for earlier versions of PHP will be phased out in the coming months.


## Usage

### Method chaining

The <code>Then</code> interface for structured method chaining has been moved to its own project, [Fluidity](https://github.com/decodelabs/fluidity/).


### Constraints
```php
namespace DecodeLabs\Gadgets\Constraint;

interface Disableable
{
    public function isDisabled(): bool;
    public function setDisabled(bool $disabled): Disableable;
}

interface Nullable
{
    public function isNullable(): bool;
    public function setNullable(bool $nullable): Nullable;
}

interface Immutable
{
    public function isImmutable(): bool;
    public function setImmutable(bool $immutable): Immutable;
}

interface Requirable
{
    public function isRequired(): bool;
    public function setRequired(bool $required): Requirable;
}
```

Add common constraints to your objects.


### Sanitizer
Add basic input value sanitizing to your objects by returning a <code>Sanitizer</code>.

```php
use DecodeLabs\Gadgets\Sanitizer;

$test = new class {

    public $value = 'my value';

    public function sanitizeValue(bool $required=true): Sanitizer
    {
        return new Sanitizer($this->value, $required);
    }
}



$myString = $test->sanitizeValue()->asString(); // All good
$myInt = $test->sanitizeValue()->asInt(); // Will try to convert to int
```


## Licensing
Gadgets is licensed under the MIT License. See [LICENSE](./LICENSE) for the full license text.
