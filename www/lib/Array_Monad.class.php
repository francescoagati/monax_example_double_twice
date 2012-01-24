<?php

class Array_Monad {
	public function __construct(){}
	static function ret($x) {
		return new _hx_array(array($x));
	}
	static function flatMap($xs, $f) {
		$res = new _hx_array(array());
		{
			$_g = 0;
			while($_g < $xs->length) {
				$x = $xs[$_g];
				++$_g;
				{
					$_g1 = 0; $_g2 = call_user_func_array($f, array($x));
					while($_g1 < $_g2->length) {
						$y = $_g2[$_g1];
						++$_g1;
						$res->push($y);
						unset($y);
					}
					unset($_g2,$_g1);
				}
				unset($x);
			}
		}
		return $res;
	}
	static function map($xs, $f) {
		$res = new _hx_array(array());
		{
			$_g = 0;
			while($_g < $xs->length) {
				$x = $xs[$_g];
				++$_g;
				$res->push(call_user_func_array($f, array($x)));
				unset($x);
			}
		}
		return $res;
	}
	function __toString() { return 'Array_Monad'; }
}
