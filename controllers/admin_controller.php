<?php
    class AdminsController{
        public function index(){
            require_once('views/admin/index.php');
        }

        public function signIn(){
            $baseUsername = $_GET['username'];
            $basePassword = $_GET['password'];
            
            $account = Account::signIn($baseUsername, $basePassword);
            echo "<- token=$account->token ->";
            $token = $account->token;

            require_once('views/page/home.php');
        }

    }
