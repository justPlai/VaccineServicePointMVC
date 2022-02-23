<?php
    class Account{
        public $id;
        public $username;
        public $password;
        public $firstname;
        public $lastname;
        public $token;

        public function __construct($id, $username, $password, $firstname, $lastname){
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->token = false;
        }

        public static function signIn($baseUsername, $basePassword){
            $accountList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM account WHERE username = $username ORDER BY id";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id = $my_row["id"];
                $username = $my_row["username"];
                $password = $my_row["password"];
                $firstname = $my_row["firstName"];
                $lastname = $my_row["lastName"];

                $accountList[] = new Account($id, $username, $password, $firstname, $lastname);
            }
            require("connection_close.php");
            if($accountList[0]->password == $basePassword){
                $accountList[0]->token = true;
                return $accountList[0];
            }

            return $accountList[0];
        }

        
    }

?>