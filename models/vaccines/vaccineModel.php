<?php
class Vaccine
{
    public $id;
    public $vaccineName;
    public $imgIcon;

    public function __construct($id, $vaccineName, $imgIcon)
    {
        $this->id = $id;
        $this->vaccineName = $vaccineName;
        $this->imgIcon = $imgIcon;
    }

    public static function getAll()
    {
        $vaccineList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM vaccine";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["id"];
            $vaccineName = $my_row["vaccineName"];
            $imgIcon = $my_row["imgIcon"];
            $vaccineList[] = new vaccine($id, $vaccineName, $imgIcon);
        }
        require("connection_close.php");
        return $vaccineList;
    }

    public static function get($id){
        require("connection_connect.php");
        $sql = "SELECT * FROM vaccine WHERE id = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row["id"];
        $vaccineName = $my_row["vaccineName"];
        $imgIcon = $my_row["imgIcon"];

        require("connection_close.php");
        return new vaccine($id, $vaccineName, $imgIcon);
    }
}
