<?php
/**
 * @author Roman Ozana <roman@ozana.cz>
 */

namespace my { // overwrite by own function and add default value

	require __DIR__ . '/../vendor/autoload.php';

	use Tester\Assert;

	function config() {
		return \app\config(['value' => false], ['value' => true]);
	}

	Assert::true(config()->value);

	// try overwrite again
	config(['value' => false]);
	Assert::true(config()->value);
}
