<?php
namespace Model;

class dbTest extends \Model{
	public static function get_results(){
		$result = \DB::query('SELECT * FROM patrol_user')->execute();
		return $result->as_array();
	}
}