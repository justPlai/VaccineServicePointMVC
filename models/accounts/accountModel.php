<?php
class Account
{
    public $id;
    public $user;
    public $pwd;
    public $firstname;
    public $lastname;
    public $token = false;

    public function __construct($id, $user, $pwd, $firstname, $lastname)
    {
        $this->id = $id;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public static function signIn($baseUsername, $basePassword)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM account WHERE username = '$baseUsername'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        if (isset($my_row["id"])) {
            $id = $my_row["id"];
            $user = $my_row["username"];
            $pwd = $my_row["password"];
            $firstname = $my_row["firstName"];
            $lastname = $my_row["lastName"];
            $account = new Account($id, $user, $pwd, $firstname, $lastname);
            require("connection_close.php");
            if ($account != null) {
                if ($account->user == $baseUsername && $account->pwd == $basePassword) {
                    $account->token = true;
                    return $account;
                } else {
                    require("connection_close.php");
                    return new Account(0, "null", "null", "null", "null");
                }
            }
        } else {
            require("connection_close.php");
            return new Account(0, "null", "null", "null", "null");
        }
    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM account WHERE id = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row["id"];
        $user = $my_row["username"];
        $pwd = $my_row["password"];
        $firstname = $my_row["firstName"];
        $lastname = $my_row["lastName"];
        require("connection_close.php");
        $account = new Account($id, $user, $pwd, $firstname, $lastname);
        $account->token = true;
        return $account;
    }

    
}
