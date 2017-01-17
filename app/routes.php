<?php

	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'default_home'],

		['GET|POST', '/user_signIn/', 'User#signIn', 'User_signIn'],
		['GET|POST', '/user_login/', 'User#login', 'User_login'],
		['GET|POST', '/user_logout/', 'User#logout', 'User_logout'],
		['GET|POST', '/user_update/', 'User#update', 'User_update'],

		['GET|POST', '/article_show/', 'Article#afficher', 'Article_afficher'],
		['GET|POST', '/article_update/', 'Article#update', 'Article_update'],
		['GET|POST', '/article_written/', 'Article#written', 'Article_written'],
	);
