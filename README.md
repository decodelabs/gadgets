# Gadgets
Useful tools for building PHP libraries.


## Pipes
```php
namespace DecodeLabs\Gadgets;

interface Pipe
{
    public function pipe(callable $callback): Pipe;
    public function pipeEach(array $values, callable $callback): Pipe;
    public function when($truth, callable $yes, callable $no=null): Pipe;
    public function unless($truth, callable $no, callable $yes=null): Pipe;
}
```

Create fluent object interfaces with basic generic logic structure support.

```php
use DecodeLabs\Gadgets\Pipe;
use DecodeLabs\Gadgets\PipeTrait;

$test = new class() implements Pipe {
    use PipeTrait;

    public function doThing(int $value=null) {}
};

$truth = true;

$test
    ->pipe(function($test) {
        $test->doThing();
    })

    ->pipeEach([1, 2, 3], function($test, $value) {
        // Called three times
        $test->doThing($value);
    })

    ->when($truth, function($test) {
        // This gets called if($truth)
    }, function($test) {
        // This get called otherwise
    })

    ->unless($truth, function($test) {
        // This gets called if(!$truth)
    }, function($test) {
        // This get called otherwise
    });
```


## Constraints
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

interface ReadOnly
{
    public function isReadOnly(): bool;
    public function setReadOnly(bool $readOnly): ReadOnly;
}

interface Requirable
{
    public function isRequired(): bool;
    public function setRequired(bool $required): Requirable;
}
```

Add common constraints to your objects.


## Sanitizer
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
