short codegenerator
===================
This is short codegenerator. Can be used for various purposes

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist dastanaron/codegenerator "*"
```

or add

```
"dastanaron/codegenerator": "*"
```

to the require section of your `composer.json` file.


Usage
-----

To use, you must create an instance of the class and call the method **generate()**

```php
use dastanaron\extension\CodeGenerator;

$codegen = new CodeGenerator();

echo $codegen->generate();

```

To adjust the length of the code, you need to use the length property.

Property $length default value = 6;


```php
use dastanaron\extension\CodeGenerator;

$codegen = new CodeGenerator();

$codegen->length = 9;

echo $codegen->generate();

```
The symbols for code generation are found in the properties **$lat_symbols** and **$num_symbols**.

This properties take values in the form of arrays.

So you can specify specific symbols to generate.

```php
use dastanaron\extension\CodeGenerator;

$codegen = new CodeGenerator();

$codegen->length = 9;

$codegen->lat_symbols = ['a', 'b', 'c', 'd'];

$codegen->num_symbols = [1, 2, 3, 4];

echo $codegen->generate();

```

For the default properties, see the class code.

