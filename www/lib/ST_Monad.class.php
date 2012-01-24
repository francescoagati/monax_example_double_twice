<?php

class ST_Monad {
	public function __construct(){}
	static function ret($i) {
		return array(new _hx_lambda(array(&$i), "ST_Monad_0"), 'execute');
	}
	static function flatMap($a, $f) {
		return array(new _hx_lambda(array(&$a, &$f), "ST_Monad_1"), 'execute');
	}
	static function gets() {
		return array(new _hx_lambda(array(), "ST_Monad_2"), 'execute');
	}
	static function puts($s) {
		return array(new _hx_lambda(array(&$s), "ST_Monad_3"), 'execute');
	}
	static function runState($f, $s) {
		return call_user_func_array($f, array($s))->value;
	}
	function __toString() { return 'ST_Monad'; }
}
function ST_Monad_0(&$i, $s) {
	{
		return _hx_anonymous(array("state" => $s, "value" => $i));
	}
}
function ST_Monad_1(&$a, &$f, $state) {
	{
		$s = call_user_func_array($a, array($state));
		return call_user_func_array(call_user_func_array($f, array($s->value)), array($s->state));
	}
}
function ST_Monad_2($s) {
	{
		return _hx_anonymous(array("state" => $s, "value" => $s));
	}
}
function ST_Monad_3(&$s, $_) {
	{
		return _hx_anonymous(array("state" => $s, "value" => null));
	}
}
