<?php
/**
 * @author Roman Ozana <ozana@omdesign.cz>
 */
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

{ // init config by default value and config file
	config(
		[
			'default' => 'value',
			'overwrite' => false
		],
		[
			'overwrite' => true,
			'annonymous' => function () {
				return "yes it's working";
			}
		]
	);
	Assert::equal('value', config()->default);
	Assert::true(config()->overwrite);
}

{ // change some value
	config()->default = 'set value';
	config()->overwrite = 'yes';
	Assert::equal('set value', config()->default);
	Assert::equal('yes', config()->overwrite);
}

{ // add new value
	config()->new_key = 'set value';
	Assert::equal('set value', config()->new_key);
}