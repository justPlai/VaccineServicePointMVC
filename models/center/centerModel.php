<?php
class Center
{
    public $id;
    public $centerName;
    public $date_start;
    public $date_end;
    public $time_start;
    public $time_end;
    public $websiteOfficial;
    public $imgIcon;
    public $locationlink;
    public $filler;

    public function __construct($id, $centerName, $date_start, $date_end, $time_start, $time_end, $websiteOfficial, $imgIcon, $locationlink, $filler)
    {
        $this->id = $id;
        $this->centerName = $centerName;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->time_start = $time_start;
        $this->time_end = $time_end;
        $this->websiteOfficial = $websiteOfficial;
        $this->imgIcon = $imgIcon;
        $this->locationlink = $locationlink;
        $this->filler = $filler;
    }
    public static function getAll()
    {
        $centerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM station";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row['id'];
            $centerName = $my_row['stationName'];
            $date_start = $my_row['date_start'];
            $date_end = $my_row['date_end'];
            $time_start = $my_row['time_start'];
            $time_end = $my_row['time_end'];
            $websiteOfficial = $my_row['websiteOfficial'];
            $imgIcon = $my_row['imgIcon'];
            $locationlink = $my_row['locationlink'];
            $filler = $my_row['filler'];
            $centerList[] = new Center($id, $centerName, $date_start, $date_end, $time_start, $time_end, $websiteOfficial, $imgIcon, $locationlink, $filler);
        }
        require("connection_close.php");
        return $centerList;
    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM station WHERE id = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row['id'];
        $centerName = $my_row['stationName'];
        $date_start = $my_row['date_start'];
        $date_end = $my_row['date_end'];
        $time_start = $my_row['time_start'];
        $time_end = $my_row['time_end'];
        $websiteOfficial = $my_row['websiteOfficial'];
        $imgIcon = $my_row['imgIcon'];
        $locationlink = $my_row['locationlink'];
        $filler = $my_row['filler'];

        require("connection_close.php");
        return new Center($id, $centerName, $date_start, $date_end, $time_start, $time_end, $websiteOfficial, $imgIcon, $locationlink, $filler);
    }

    public static function getlastID()
    {
        require("connection_connect.php");
        $sql = "SELECT MAX(id) AS id FROM station";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row['id'];
        $centerID = $id;
        require("connection_close.php");
        return $centerID;
    }

    public static function Add($CenterName, $DateStart, $DateStop, $TimeStart, $TimeStop, $Websitelink, $Imagelink, $locationlink, $filler)
    {
        // echo "in Add filler = $filler";
        require("connection_connect.php");
        $sql = "INSERT INTO `station` ( `stationName`, `date_start`, `date_end`, `time_start`, `time_end`, `websiteOfficial`, `imgIcon`, `filler`, `locationlink`) VALUES ( '$CenterName', '$DateStart', '$DateStop', '$TimeStart', '$TimeStop', '$Websitelink', '$Imagelink', '$filler', '$locationlink');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }

    public static function search($key)
    {
        $centerList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM station where stationName like '%$key%' ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row['id'];
            $centerName = $my_row['stationName'];
            $date_start = $my_row['date_start'];
            $date_end = $my_row['date_end'];
            $time_start = $my_row['time_start'];
            $time_end = $my_row['time_end'];
            $websiteOfficial = $my_row['websiteOfficial'];
            $imgIcon = $my_row['imgIcon'];
            $locationlink = $my_row['locationlink'];
            $filler = $my_row['filler'];
            $centerList[] = new Center($id, $centerName, $date_start, $date_end, $time_start, $time_end, $websiteOfficial, $imgIcon, $locationlink, $filler);
        }
        require("connection_close.php");
        return $centerList;
    }

    public static function update($id, $CenterName, $DateStart, $DateStop, $TimeStart, $TimeStop, $Websitelink, $Imagelink, $Locationlink)
    {
        require("connection_connect.php");
        $sql = "UPDATE station SET id = '$id' ,stationName = '$CenterName', date_start = '$DateStart', date_end = '$DateStop', time_start = '$TimeStart', time_end = '$TimeStop', websiteOfficial = '$Websitelink', imgIcon = '$Imagelink', locationlink = '$Locationlink' WHERE station.id = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
    }

    public static function delete($id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM station WHERE id = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Delete success $result row";
    }
}
