<?php
    class PagesController{
        public function home(){
            if(isset($_GET['token'])){
                $token = $_GET['token'];
            }
            require_once('views/page/home.php');
        }
        public function error(){
            require_once('views/page/error.php');
        }
    }
