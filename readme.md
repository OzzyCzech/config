# Sphido / Config

[![Build Status](https://travis-ci.org/sphido/config.svg?branch=master)] (https://travis-ci.org/sphido/config)[![Latest Stable Version](https://poser.pugx.org/sphido/config/v/stable.svg)](https://packagist.org/packages/sphido/config) [![Total Downloads](https://poser.pugx.org/sphido/config/downloads.svg)](https://packagist.org/packages/sphido/config) [![Latest Unstable Version](https://poser.pugx.org/sphido/config/v/unstable.svg)](https://packagist.org/packages/sphido/config) [![License](https://poser.pugx.org/sphido/config/license.svg)](https://packagist.org/packages/sphido/config)

Sphido config loading configurations as pure PHP arrays/objects it's doing only `array_replace_recursive`!

- no obscure config file parsers
- no extra config file formats
- no unnecessary code
- no power loss

## Setup values

It's simple, just call `config()` in your `index.php` to setup values

```php
config(
	[],
	include __DIR__ . '/config.base.php',
	include __DIR__ . '/config.stable.php'
);
```

Your `config.base.php` need return some array values e.g.:

```php
return [
	'example' => 'value',
	'invokeme' => function() {}
	'constant' => PHP_VERSION,
	'execute' => $a + $b
	'object' => (object)['a' => 'b', 'c' => 'd']
	'array' => ['a' => 'b', 'c' => 'd']
];
```

## Read and Write

Then simply read and write any values:

```php
config()->example = 'save'
echo config()->example; // will print save
```

It's pure PHP you can store whatever you need:

```php
config()->invokeme = function() { return 'something'};
call_user_func(config()->invokeme);
```