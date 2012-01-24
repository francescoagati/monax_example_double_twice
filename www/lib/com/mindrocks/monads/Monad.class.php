<?php

class com_mindrocks_monads_Monad {
	public function __construct(){}
	static function noOpt($m, $position) {
		return $m;
	}
	static $validNames;
	static function dO($monadTypeName, $body, $context, $optimize) {
	}
	function __toString() { return 'com.mindrocks.monads.Monad'; }
}
com_mindrocks_monads_Monad::$validNames = new Hash();
