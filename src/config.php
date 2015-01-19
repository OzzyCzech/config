<?php
/**
 * Basic config function.
 *
 * @return object
 */
function config() {
	static $config;
	if ($config) return $config;
	return $config = (object)call_user_func_array('\array_replace_recursive', func_get_args());
}