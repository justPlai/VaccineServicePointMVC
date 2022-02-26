<?php
    class AdminsController{
        public function index(){
            require_once('views/admin/index.php');
        }

        public function signIn(){
            $baseUsername = $_GET['baseUsername'];
            $basePassword = $_GET['basePassword'];
            $account = Account::signIn($baseUsername, $basePassword);
            if($account != null){
                if($account->token == true){
                    CentersController::index();
                }
            }
            AdminsController::index();
        }

    }
