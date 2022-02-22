<?php
    class Center{
        public $id;
        public $centerName;
        public $date_start;
        public $date_end;
        public $time_start;
        public $time_end;
        public $websiteOfficial;
        public $imgIcon;
        public $filler;
        public function __construct($id,$centerName,$date_start,$date_end,$time_start,$time_end,$websiteOfficial,$imgIcon,$filler){
            $this->id=$id;
            $this->centerName=$centerName;
            $this->date_start=$date_start;
            $this->date_start=$date_end;
            $this->date_start=$time_start;
            $this->date_start=$time_end;
            $this->date_start=$websiteOfficial;
            $this->date_start=$imgIcon;
            $this->date_start=$filler;

        }
        public static function getAll(){
            $centerList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM Center";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["id"];
                $centerName=$my_row["centerName"];
                $date_start=$my_row["date_start"];
                $date_end=$my_row["date_end"];
                $time_start=$my_row["time_start"];
                $time_end=$my_row["time_end"];
                $websiteOfficial=$my_row["websiteOfficial"];
                $imgIcon=$my_row["imgIcon"];
                $imgIcon=$my_row["imgIcon"];
                $filler=$my_row["filler"];
                $centerList[]=new Center($id,$centerName,$date_start,$date_end,$time_start,$time_end,$websiteOfficial,$imgIcon,$filler);
            }
            require("connection_close.php");
            return $centerList;
        }
    }
?>