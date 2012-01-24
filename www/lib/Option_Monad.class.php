<?php

class Option_Monad {
	public function __construct(){}
	static function ret($x) {
		return com_mindrocks_monads_Option::Some($x);
	}
	static function map($x, $f) {
		$퍁 = ($x);
		switch($퍁->index) {
		case 1:
		$x1 = $퍁->params[0];
		{
			return com_mindrocks_monads_Option::Some(call_user_func_array($f, array($x1)));
		}break;
		default:{
			return com_mindrocks_monads_Option::$None;
		}break;
		}
	}
	static function flatMap($x, $f) {
		$퍁 = ($x);
		switch($퍁->index) {
		case 1:
		$x1 = $퍁->params[0];
		{
			return call_user_func_array($f, array($x1));
		}break;
		default:{
			return com_mindrocks_monads_Option::$None;
		}break;
		}
	}
	function __toString() { return 'Option_Monad'; }
}
