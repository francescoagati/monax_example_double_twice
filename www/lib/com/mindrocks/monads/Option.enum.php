<?php

class com_mindrocks_monads_Option extends Enum {
	public static $None;
	public static function Some($v) { return new com_mindrocks_monads_Option("Some", 1, array($v)); }
	public static $__constructors = array(0 => 'None', 1 => 'Some');
	}
com_mindrocks_monads_Option::$None = new com_mindrocks_monads_Option("None", 0);
