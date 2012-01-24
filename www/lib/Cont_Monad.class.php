<?php

class Cont_Monad {
	public function __construct(){}
	static function ret($i) {
		return array(new _hx_lambda(array(&$i), "Cont_Monad_0"), 'execute');
	}
	static function flatMap($m, $k) {
		return array(new _hx_lambda(array(&$k, &$m), "Cont_Monad_1"), 'execute');
	}
	static function map($m, $k) {
		return array(new _hx_lambda(array(&$k, &$m), "Cont_Monad_2"), 'execute');
	}
	function __toString() { return 'Cont_Monad'; }
}
function Cont_Monad_0(&$i, $cont) {
	{
		return call_user_func_array($cont, array($i));
	}
}
function Cont_Monad_1(&$k, &$m, $cont) {
	{
		return call_user_func_array($m, array(array(new _hx_lambda(array(&$cont, &$k, &$m), "Cont_Monad_3"), 'execute')));
	}
}
function Cont_Monad_2(&$k, &$m, $cont) {
	{
		return call_user_func_array($m, array(array(new _hx_lambda(array(&$cont, &$k, &$m), "Cont_Monad_4"), 'execute')));
	}
}
function Cont_Monad_3(&$cont, &$k, &$m, $a) {
	{
		return call_user_func_array(call_user_func_array($k, array($a)), array($cont));
	}
}
function Cont_Monad_4(&$cont, &$k, &$m, $a) {
	{
		return call_user_func_array($cont, array(call_user_func_array($k, array($a))));
	}
}
