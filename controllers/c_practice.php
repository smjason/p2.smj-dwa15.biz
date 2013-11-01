<?php
class practice_controller extends base_controller {
	
	public function test_db(){


			/*
			#INSERT PRACTICE
			$q = 'INSERT INTO users 
			SET first_name = "Albert",
			last_name = "Giraldo"';

			echo $q;
			DB::instance(DB_NAME)->query($q);
			*/
			/*
			$q = 'UPDATE users 
				SET email ="agiraldo@outlook.com"
				WHERE first_name = "Albert"';
			*/

			/*
			$new_user = Array(
				'first_name' => 'Albert',
				'last_name' => 'Jones',
				'email' => 'ajones@hotmail.com'
			);


			DB::instance(DB_NAME)->insert('users',$new_user);
			*/
			$_POST['first_name'] = 'Scott';
			$_POST = DB::instance(DB_NAME)->sanitize($_POST);

			$q = 'SELECT email
				FROM users 
				WHERE first_name = "'.$_POST['first_name'].'"';

			echo DB::instance(DB_NAME)->select_field($q);






		/*
		$imageObj = new Image('http://placekitten.com/1000/1000');

		$imageObj->resize(500,500);
		$imageObj->display();
		*/
		#Static
		//echo Time::now();
		
	}



}