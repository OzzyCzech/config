<?php
/**
 * @author Roman Ozana <ozana@omdesign.cz>
 */
use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

{ // overwrite by own function and add default value

	function config() {
		return config(['value' => false], ['value' => true]);
	}

	Assert::true(config()->value);

	// try overwrite again
	config(['value' => false]);
	Assert::true(config()->value);

}
