# Gadgets

[![PHP from Packagist](https://img.shields.io/packagist/php-v/decodelabs/gadgets?style=flat)](https://packagist.org/packages/decodelabs/gadgets)
[![Latest Version](https://img.shields.io/packagist/v/decodelabs/gadgets.svg?style=flat)](https://packagist.org/packages/decodelabs/gadgets)
[![Total Downloads](https://img.shields.io/packagist/dt/decodelabs/gadgets.svg?style=flat)](https://packagist.org/packages/decodelabs/gadgets)
[![GitHub Workflow Status](https://img.shields.io/github/workflow/status/decodelabs/gadgets/Integrate)](https://github.com/decodelabs/gadgets/actions/workflows/integrate.yml)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-44CC11.svg?longCache=true&style=flat)](https://github.com/phpstan/phpstan)
[![License](https://img.shields.io/packagist/l/decodelabs/gadgets?style=flat)](https://packagist.org/packages/decodelabs/gadgets)

Useful tools for building PHP libraries.

## Installation

Install via Composer:

```bash
composer require decodelabs/gadgets
```

## Usage

### Method chaining

The <code>Then</code> interface for structured method chaining has been moved to its own project, [Fluidity](https://github.com/decodelabs/fluidity/).


### Constraints

The <code>Constraints</code> interfaces have been moved to their own project, [Tightrope](https://github.com/decodelabs/tightrope/).


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
