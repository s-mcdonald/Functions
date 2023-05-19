# Functions
[![Source](https://img.shields.io/badge/source-S_McDonald-blue.svg)](https://github.com/s-mcdonald/Functions)
[![Source](https://img.shields.io/badge/license-MIT-gold.svg)](https://github.com/s-mcdonald/Functions)

`Functions` is a set of small php functions that can be imported via composer.


`$random_value` will be a value from the array picked at random, however there is a bias 
towards the start of the array.

```php
$random_value = array_rand_bias($array);
```

For example, take the following array of names;
```php
$myarray = [
    'David',
    'Matthew',
    'Mark',
    'James',
    'John',
    'Paul',
    'Michael',
    'Daniel',
    'Robert',
    'Andrew',
    'Thomas',
    'Joseph',
    'Anthony',
    'William',
    'Christopher',
    'Steven',
    'Richard',
    'Benjamin',
    'Charles',
    'George',
];
```
The names towards the start of the index such as David, David and David are more likely to be plucked.
However, all values have a chance, and with enough iterations will be selected.

```
composer require s-mcdonald/functions
```

<a name="dependencies"></a>
## Dependencies

*  Php 8.0

## License

Functions is licensed under the terms of the [MIT License](http://opensource.org/licenses/MIT)
(See LICENSE file for details).
