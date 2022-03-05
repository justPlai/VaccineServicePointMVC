<?php
class CenterDetail
{
    public $StationId;
    public $date;
    public $totalDosed;
    public $filler;


    public function __construct($StationId, $date, $totalDosed, $filler)
    {
        $this->StationId = $StationId;
        $this->date = $date;
        $this->totalDosed = $totalDosed;
        $this->filler = $filler;
      
    }

    // public static function getAll($centerId)
    // {
    //     $vaccineDetailList = [];
    //     require("connection_connect.php");
    //     $sql = "SELECT *  FROM vaccinedetail WHERE stationId = '$centerId';";
    //     $result = $conn->query($sql);
    //     while ($my_row = $result->fetch_assoc()) {
    //         $id = $my_row["id"];
    //         $centerId = $my_row["stationId"];
    //         $vaccineId = $my_row["vaccineId"];
    //         $vaccine = Vaccine::get($vaccineId);
    //         $vaccineName = $vaccine->vaccineName;
    //         $totalDose = $my_row["totalDose"];
    //         $walk_in = $my_row["walk_in"];
    //         $description = $my_row["description"];
    //         $imgIcon = $vaccine->imgIcon;

    //         $vaccineDetailList[] = new CenterDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description, $imgIcon);
    //     }

    //     require("connection_close.php");
    //     return $vaccineDetailList;
    // }

    // public static function get($id)
    // {
    //     require("connection_connect.php");
    //     $sql = "SELECT * FROM vaccineDetail WHERE id = '$id'";
    //     $result = $conn->query($sql);
    //     $my_row = $result->fetch_assoc();
    //     $id = $my_row["id"];
    //     $centerId = $my_row["stationId"];
    //     $vaccineId = $my_row["vaccineId"];
    //     $vaccine = Vaccine::get($vaccineId);
    //     $vaccineName = $vaccine->vaccineName;
    //     $totalDose = $my_row["totalDose"];
    //     $walk_in = $my_row["walk_in"];
    //     $description = $my_row["description"];
    //     $imgIcon = $vaccine->imgIcon;

    //     require("connection_close.php");
    //     return new CenterDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description, $imgIcon);
    // }

    public static function Add($StationId, $date, $totalDosed, $filler)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `stationdetail` ( `stationId`, `date`, `totalDosed`, `filler`) VALUES ('$StationId', '$date', '$totalDosed', '$filler')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }

    // public static function update($id, $vaccineId, $totalDose, $description, $walk_in)
    // {
    //     require("connection_connect.php");
    //     $sql = "UPDATE vaccinedetail SET vaccineId = '$vaccineId', totalDose = '$totalDose', description = '$description', walk_in = '$walk_in' WHERE id = '$id'";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    //     return "update success $result row";
    // }

    // public static function delete($id)
    // {
    //     require("connection_connect.php");
    //     $sql = "DELETE FROM vaccinedetail WHERE id = '$id'";
    //     $result = $conn->query($sql);
    //     require("connection_close.php");
    //     return "Delete success $result row";
    // }
}
