<?php 
    class VaccineDetail{
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

        public static function getAll($centerId){
            $vaccineDetailList = [];
            require("connection_connect.php");
            $sql = "SELECT * ,IF(vaccinedetail.walk_in = 1, 'Yes', 'No') AS walk_in FROM vaccinedetail JOIN vaccine WHERE vaccinedetail.stationId = '$centerId' AND vaccineId = vaccine.id;";
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
                $imgIcon = $my_row["imgIcon"];

                $vaccineDetailList[] = new VaccineDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description,$imgIcon);
            }

            require("connection_close.php");
            return $vaccineDetailList;
        }

        public static function get($id){
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
            $imgIcon = $my_row["imgIcon"];
            
            require("connection_close.php");
            return new VaccineDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description, $imgIcon);
        }


    }
