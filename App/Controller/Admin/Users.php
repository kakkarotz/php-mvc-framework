<?php

namespace App\Controller\Admin;
/*
	User Admin controller
*/

class Users extends \Core\Controller
{
	/*
		Before filter

		@return void
	*/

	protected function before()
	{
		//Make sure an admin user is logged in for example
		//return false;
	}

	/*
		After filter

		@return void
	*/

	protected function after()
	{
		echo "(action)";
	}


	//Show the index page
	//@return void

	public function indexAction()
	{
		echo 'User admin index';
	}
}