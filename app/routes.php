<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

		['GET', '/user_signIn/', 'User#signIn', 'User_signIn'],
		['GET', '/user_login/', 'User#login', 'User_login'],
		['GET', '/user_update/', 'User#update', 'User_update'],

		['GET', '/article_show/', 'Article#afficher', 'Article_afficher'],
		['GET', '/article_update/', 'Article#update', 'Article_update'],
		['GET', '/article_written/', 'Article#written', 'Article_written'],
	);
