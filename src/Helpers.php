<?php

namespace Wpextend\Package;

/**
 *
 */
class Helpers {


    /**
	* Check if array is assocative or not
	*
	* @return boolean
	*/
	static public function isAssoc(array $arr) {
		if (array() === $arr) return false;
		return array_keys($arr) !== range(0, count($arr) - 1);
	}

}