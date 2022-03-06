<?php
class centerDetail
{
    public $id;
    public $date;
    public $totalDosed;
    public $centerId;
    public $centerName;
    public $filler;
 

    public function __construct($id,$centerId,$centerName,$date,$totalDosed,$filler)
    {
        $this->id = $id;
        $this->centerId = $centerId;
        $this->centerName = $centerName;
        $this->date = $date;
        $this->totalDosed = $totalDosed;
        $this->filler = $filler;
      
    }

    public static function getAll($centerId)
    {
        $vaccineDetailList = [];
        require("connection_connect.php");
        $sql = "SELECT *  FROM stationdetail WHERE stationId = '$centerId';";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["id"];
            $centerId = $my_row["stationId"];
            $centerName = Center::get($centerId);
            $date = $my_row["date"];
            $totalDosed = $my_row["totalDosed"];
            $filler = $my_row["filler"];
            
            $vaccineDetailList[] = new CenterDetail($id,$centerId,$centerName,$date,$totalDosed,$filler);
        }

        require("connection_close.php");
        return $vaccineDetailList;
    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM stationdetail WHERE id = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row["id"];
        $centerId = $my_row["stationId"];
        $centerName = Center::get($centerId);
        $date = $my_row["date"];
        $totalDosed = $my_row["totalDosed"];
        $filler = $my_row["filler"];
      
        require("connection_close.php");
        return new CenterDetail($id,$centerId,$centerName,$date,$totalDosed,$filler);
    }

    public static function Add($StationId, $date, $totalDosed, $filler)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `stationdetail` ( `stationId`, `date`, `totalDosed`, `filler`) VALUES ('$StationId', '$date', '$totalDosed', '$filler')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }

    public static function update($id,$centerId,$totalDosed,$filler)
    {
        require("connection_connect.php");
        $sql = "UPDATE stationdetail SET id = '$id', stationId = '$centerId', totalDosed = '$totalDosed', filler = '$filler' WHERE id = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }


}
