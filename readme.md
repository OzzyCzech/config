# Sphido / Config

## Default value

```php
function config() {
	retrun \phi\config([], include __DIR__ . '/config.php') 
}
```

## Read and write value

```php
config()->value = 'save'
echo config()->value; // will print save 
```