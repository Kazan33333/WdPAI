<?php

require 'Routing.php';

$path = $_SERVER['REQUEST_URI'];
$path = trim($path, '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('friends', 'DefaultController');
Router::get('home', 'DefaultController');
Router::get('settings', 'DefaultController');
Router::get('my_team', 'DefaultController');
Router::get('laliga_table', 'DefaultController');


Router::post('login', 'SecurityController');
Router::post('logout', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path);