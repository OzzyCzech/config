# Sphido / Config

## Default value

Sphido config loading configurations as pure PHP arrays/objects it's doing only `array_replace_recursive`!

- no obscure config file parsers
- no extra config file formats
- no unnecessary code
- no power loss

It's simple, just call `config()` in your `index.php` to setup basic values

```php
config([], include __DIR__ . '/config.base.php', include __DIR__ . '/config.stable.php')
```

Your `config.php` need contain:

```php
return ['example' => 'value', 'invokeme' => function() {}];
```

## Read and write value

```php
config()->example = 'save'
echo config()->example; // will print save
```

It's pure PHP you can invoke whatever you need:

```php
config()->invokeme
```