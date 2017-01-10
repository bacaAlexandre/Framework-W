<?php

namespace Controller;

use \W\Controller\Controller;

class UserController extends Controller
{


	public function signIn()
	{
		$this->show('user/inscription');
	}

  public function login()
	{
		$this->show('user/connexion');
	}

  public function update()
  {
    $this->show('user/mise_a_jour');
  }
}
