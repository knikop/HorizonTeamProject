<?php
namespace app\validators;

#[\Attribute]
class Country extends \app\core\Validator{
    private static $file = 'app/resources/foods.txt';
	public function isValidData($data){

	}
}