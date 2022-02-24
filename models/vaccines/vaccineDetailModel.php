<?php 
    class VaccineDetail{
        public $id;
        public $centerId;
        public $vaccineId;
        public $vaccineName;
        public $totalDose;
        public $walk_in;
        public $description;

        public function __construct($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description)
        {
            $this->id = $id;
            $this->centerId = $centerId;
            $this->vaccineId = $vaccineId;
            $this->vaccineName = $vaccineName;
            $this->totalDose = $totalDose;
            $this->walk_in = $walk_in;
            $this->description = $description;
        }

        public static function getAll($centerId){
            $vaccineDetailList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM vaccinedetail WHERE stationId = '$centerId'";
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

                $vaccineDetailList[] = new VaccineDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description);
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
            
            require("connection_close.php");
            return new VaccineDetail($id, $centerId, $vaccineId, $vaccineName, $totalDose, $walk_in, $description);
        }


    }
