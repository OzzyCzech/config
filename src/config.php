<?php
namespace app {
	function config() {
		static $config;
		if ($config && !func_num_args()) return $config;
		return $config = (object)call_user_func_array('\array_replace_recursive', func_get_args() ?: [[]]);
	}
}
