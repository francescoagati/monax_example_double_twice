<?php

class Option extends Enum {
	public static $None;
	public static function Some($x) { return new Option("Some", 1, array($x)); }
	public static $__constructors = array(0 => 'None', 1 => 'Some');
	}
Option::$None = new Option("None", 0);
