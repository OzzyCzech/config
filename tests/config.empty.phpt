<?php
/**
 * @author Roman Ozana <ozana@omdesign.cz>
 */
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

use function app\config as config;

config(); // init empty config
Assert::equal(config(), new stdClass());
config()->abc = 'def';
Assert::equal(config()->abc, 'def');

// reinit config value
config(['aaa' => 'bcd']);
Assert::equal(config()->aaa, 'bcd');

// reinit config check full init
config()->abc = 'aaa';
config()->old = true;
config(['abc' => 'bbb', 'old' => false]);
Assert::same(config()->abc, 'bbb');
Assert::false(config()->old);


// reinit combination of values
config(['a' => true], ['a' => false]);
Assert::false(config()->a);