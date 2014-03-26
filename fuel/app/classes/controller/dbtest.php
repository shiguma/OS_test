<?php
use \Model\dbTest;

class Controller_Dbtest extends Controller_Template
{

	public function action_index(){
		$data['test'] = dbTest::get_results();
		return Response::forge(View::forge('dbtest/index',$data));
	}

}
