<?php
    class AdminsController{
        public function index(){
            require_once('views/admin/index.php');
        }

        public function signIn(){
            $baseUsername = $_GET['username'];
            $basePassword = $_GET['password'];
            
            $account = Account::signIn($baseUsername, $basePassword);
            $token = $account->token;
            $_SESSION['username'] = $account->user;
            $_SESSION['token'] = "1";
            header("Location: index.php");
            
        }

        public function signOut(){
            session_destroy();
            header("Location: index.php");
            // require_once('views/page/home.php');
        }

    }
