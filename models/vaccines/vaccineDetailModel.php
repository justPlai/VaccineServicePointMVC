<?php
class VaccineDetail
{
    public $id;
    public $centerId;
    public $vaccineId;
    public $vaccineName;
    public $totalDose;
    public $walk_in;
    public $description;
    public $imgIcon;

    public function __construct($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description, $imgIcon)
    {
        $this->id = $id;
        $this->centerId = $centerId;
        $this->vaccineId = $vaccineId;
        $this->vaccineName = $vaccineName;
        $this->totalDose = $totalDose;
        $this->walk_in = $walk_in;
        $this->description = $description;
        $this->imgIcon = $imgIcon;
    }

    public static function getAll($centerId)
    {
        $vaccineDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT *  FROM vaccinedetail WHERE stationId = '$centerId';";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["id"];
            $centerId = $my_row["stationId"];
            $vaccineId = $my_row["vaccineId"];
            $vaccine = Vaccine::get($vaccineId);
            $vaccineName = $vaccine->vaccineName;
            $totalDose = $my_row["totalDose"];
            $walk_in = $my_row["walk_in"];
            $description = $my_row["description"];
            $imgIcon = $vaccine->imgIcon;

            $vaccineDetailList[] = new VaccineDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description, $imgIcon);
        }

        require("connection_close.php");
        return $vaccineDetailList;
    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM vaccineDetail WHERE id = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row["id"];
        $centerId = $my_row["stationId"];
        $vaccineId = $my_row["vaccineId"];
        $vaccine = Vaccine::get($vaccineId);
        $vaccineName = $vaccine->vaccineName;
        $totalDose = $my_row["totalDose"];
        $walk_in = $my_row["walk_in"];
        $description = $my_row["description"];
        $imgIcon = $vaccine->imgIcon;

        require("connection_close.php");
        return new VaccineDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description, $imgIcon);
    }

    public static function Add($StationId, $vaccineId, $Dosetotal, $Walkin, $Condition)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `vaccinedetail` ( `stationId`, `vaccineId`, `totalDose`, `walk_in`, `description`) VALUES ($StationId, '$vaccineId', '$Dosetotal', '$Walkin', '$Condition')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }

    public static function update($id, $vaccineId, $totalDose, $description, $walk_in)
    {
        require("connection_connect.php");
        $sql = "UPDATE vaccinedetail SET vaccineId = '$vaccineId', totalDose = '$totalDose', description = '$description', walk_in = '$walk_in' WHERE id = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM vaccinedetail WHERE id = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Delete success $result row";
    }
}
