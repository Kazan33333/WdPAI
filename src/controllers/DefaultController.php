<?php

require_once 'AppController.php';


class DefaultController extends AppController
{
    public function login()
    {
        $this->render('login');
    }

    public function register()
    {
        $this->render('register');
    }

    public function friends()
    {
        $this->render('friends');
    }

    public function home()
    {
        $this->render('home');
    }

    public function settings()
    {
        $this->render('settings');
    }

    public function my_team()
    {
        $this->render('my_team');
    }

    public function laliga_table()
    {
        $this->render('laliga_table');
    }
}