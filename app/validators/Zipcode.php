<?php
namespace app\validators;

#[\Attribute]
class Zipcode extends \app\core\Validator{

	public function isValidData($data){
        $pattern = "^((\d{5}-\d{4})|(\d{5})|([A-Z]\d[A-Z]\s\d[A-Z]\d))$";
		if (preg_match($data, $pattern) == 1){
			return $data;
		}
	}
}