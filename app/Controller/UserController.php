<?php

namespace Controller;

use \W\Controller\Controller;

use Model\UserModel;

class UserController extends Controller
{


	public function signIn()
	{
		$this->show('user/inscription');

	}

  public function login()
	{
		var_dump($_GET);
		$truc = new UserModel();
		$test = $truc -> getUserByUsernameOrEmail($_GET['username']);

		var_dump($test);
		if ($test){
			if($truc -> emailExists($_GET['email'])) {
				if($truc -> passwordExists($_GET['password'])){
					$_SESSION['user']['id'] = $test['id'];

				}
			}
		}
		$this->show('user/connexion');

	}

  public function update()
  {
    $this->show('user/mise_a_jour');
  }
}
