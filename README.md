# Gadgets
## Useful tools for building PHP libraries


### Pipes
```php
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
