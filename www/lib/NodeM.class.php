<?php

class NodeM {
	public function __construct(){}
	static function specialOpt($m, $position) {
		return null;
	}
	static function ret($i) {
		return array(new _hx_lambda(array(&$i), "NodeM_0"), 'execute');
	}
	static function flatMap($m, $k) {
		return array(new _hx_lambda(array(&$k, &$m), "NodeM_1"), 'execute');
	}
	static function map($m, $k) {
		return array(new _hx_lambda(array(&$k, &$m), "NodeM_2"), 'execute');
	}
	function __toString() { return 'NodeM'; }
}
function NodeM_0(&$i, $cont) {
	{
		return call_user_func_array($cont, array(null, $i));
	}
}
function NodeM_1(&$k, &$m, $cont) {
	{
		return call_user_func_array($m, array(array(new _hx_lambda(array(&$cont, &$k, &$m), "NodeM_3"), 'execute')));
	}
}
function NodeM_2(&$k, &$m, $cont) {
	{
		return call_user_func_array($m, array(array(new _hx_lambda(array(&$cont, &$k, &$m), "NodeM_4"), 'execute')));
	}
}
function NodeM_3(&$cont, &$k, &$m, $err, $a) {
	{
		if($err !== null) {
			return call_user_func_array($cont, array($err, null));
		} else {
			return call_user_func_array(call_user_func_array($k, array($a)), array($cont));
		}
	}
}
function NodeM_4(&$cont, &$k, &$m, $err, $a) {
	{
		if($err !== null) {
			return call_user_func_array($cont, array($err, null));
		} else {
			return call_user_func_array($cont, array(null, call_user_func_array($k, array($a))));
		}
	}
}
