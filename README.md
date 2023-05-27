# Functions
[![Source](https://img.shields.io/badge/source-S_McDonald-blue.svg)](https://github.com/s-mcdonald/Functions)
[![Source](https://img.shields.io/badge/license-MIT-gold.svg)](https://github.com/s-mcdonald/Functions)

### Setup.
First install via composer, then import the function in the using statements.
eg:
```php
use function SamMcDonald\Functions\random_bool;
```


### `random_bool`

```php
random_bool() ? 'foo' : 'bar';
```

### `array_rand_bias`

```php
echo array_rand_bias($array);
```

For example, take the following array of names;
```php
$myarray = [
    'David',
    'Matthew',
     ...
    'George',
];
```
There is a descending trend in the names from the start of the index such as David.
So David will be picked mostly, then Mathew and so on until the last element.


### `array_entry_exist`

```php
if (array_entry_exist($array, 'foo', 'bar')) {...}

// Which is a more convenient way of typing 
if (isset($array['foo']) && $array['foo'] === 'bar') {}
```


### `like_int`

```php
$like_int = "55";

if(like_int($like_int)) {
    echo "Yes this is could certainly be cast to an int.", PHP_EOL;
}
```


### `slugify`

```php
echo slugify("My friends long weekend at Bernie's");
```


## Install via composer

```
composer require s-mcdonald/functions
```

<a name="dependencies"></a>
## Dependencies

*  Php 8.0

## License

Functions is licensed under the terms of the [MIT License](http://opensource.org/licenses/MIT)
(See LICENSE file for details).
