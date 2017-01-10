<?php

namespace Controller;

use \W\Controller\Controller;

class ArticleController extends Controller
{


	public function afficher()
	{
		$this->show('article/voir');
	}

  public function update()
	{
		$this->show('article/mise_a_jour');
	}

  public function written()
  {
    $this->show('article/ecrire');
  }
}
