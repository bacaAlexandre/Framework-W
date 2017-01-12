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
		if (!empty($_POST)){
			var_dump($_POST);
			$truc = new UserModel();
			if(($truc -> emailExists($_POST['email'])) && ($truc -> passwordExists($_POST['password']))) {
				$test = $truc -> getUserByUsernameOrEmail($_POST['username']);
				var_dump($test);
				$_SESSION['user']['id'] = $test['id'];
				var_dump($_SESSION);
			}

		}
		$this->show('user/connexion');

	}

  public function update()
  {
    $this->show('user/mise_a_jour');
  }
}

	public function logout(){
		if (!empty($_SESSION)){
			session_unset();
		}
	}
