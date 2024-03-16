<?php

require_once '../app/services/AuthServices.php';

class LoginController
{
    private $authServices;

    public function __construct()
    {
        $this->authServices = new AuthServices();
    }

    public function index()
    {
        include_once '../app/views/auth/login.php';
    }

    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->authServices->login($username, $password);
        }
    }


    public function logout()
    {
        $this->authServices->logout();
    }
}