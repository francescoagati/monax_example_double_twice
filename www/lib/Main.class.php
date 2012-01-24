<?php

class Main {
	public function __construct(){}
	static function main() {
		$res = call_user_func_array(NodeM::flatMap(array(new _hx_lambda(array(), "Main_0"), 'execute'), array(new _hx_lambda(array(), "Main_1"), 'execute')), array(array(new _hx_lambda(array(), "Main_2"), 'execute')));
	}
	static function pippa($name, $cb) {
		call_user_func_array($cb, array(null, 222));
	}
	static function pippa2($value, $cb) {
		call_user_func_array($cb, array(null, $value + 222));
	}
	function __toString() { return 'Main'; }
}
function Main_0($_) {
	{
		Main::pippa("ciao", $_);
		return;
	}
}
function Main_1($value) {
	{
		return NodeM::map(array(new _hx_lambda(array(&$value), "Main_3"), 'execute'), array(new _hx_lambda(array(&$value), "Main_4"), 'execute'));
	}
}
function Main_2($err, $res) {
	{
		haxe_Log::trace($res, _hx_anonymous(array("fileName" => "Main.hx", "lineNumber" => 22, "className" => "Main", "methodName" => "main")));
	}
}
function Main_3(&$value, $_) {
	{
		Main::pippa2($value, $_);
		return;
	}
}
function Main_4(&$value, $value2) {
	{
		return $value2;
	}
}
