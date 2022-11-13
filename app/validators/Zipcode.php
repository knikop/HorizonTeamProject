<?php
namespace app\validators;

#[\Attribute]
class Zipcode extends \app\core\Validator{

	public function isValidData($data){
        $pattern = "/^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][ -]?\d[ABCEGHJ-NPRSTV-Z]\d$/i";
		if (preg_match($data, $pattern) == 1){
			return $data;
		}
	}

}