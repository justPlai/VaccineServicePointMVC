<?php
    class CentersController{
        public function search(){
            require_once('views/center/search.php');
        }

        public function vaccineDetail(){
            require_once('views/center/VaccineDetail.php');
        }

        // public function newCenter()
        // {
        //     $Center_list = ::getAll();
    
        //     require_once("views/admin/addCenterPage.php");
        // }
        
        public function addCenter()
        {
            /*$QDID = $_GET['QID']."_".$_GET['procID'];
            $QID = $_GET['QID'];
            $PID = $_GET['procID'];
            $QtyScr = $_GET['QtyScr'];
            $Unit = $_GET['Unit'];
            
            echo $QID." ".$PID." ".$QtyScr." ".$Unit;*/

            //QuotationDetail::Add($QDID,$QID,$PID,$QtyScr,$Unit);
            AdminsController::editCenterIndex();

        }

    }
?>