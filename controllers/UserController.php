<?php
require 'BaseController.php';

class UserController extends BaseController
{
    function __construct()
    {
        $this->folder = 'user';
    }
    public function login()
    {
        $this->render('view-usernam-password');
    }
    public function register(){
        $this->render('register');
    }
}