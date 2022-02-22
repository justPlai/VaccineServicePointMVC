<?php
    class CentersController{
        public function search(){
            require_once('views/center/search.php');
        }

        public function vaccineDetail(){
            require_once('views/center/VaccineDetail.php');
        }

        public function editCenterIndex(){
            require_once('views/admin/editCenterIndex.php');
        }

        
        public function addCenter()
        {

            //echo " in addCenter";
            $CenterName = $_GET['CenterName'];
            $DateStart = $_GET['DateStart'];
            $DateStop = $_GET['DateStop'];
            $TimeStart = $_GET['TimeStart'];
            $TimeStop = $_GET['TimeStop'];
            $Websitelink = $_GET['Websitelink'];
            $Imagelink = $_GET['Imagelink'];
            $Locationlink = $_GET['Locationlink'];
            $filler = $_GET['filler'];
            
            //echo $CenterName." ".$DateStart." ".$DateStop." ".$TimeStart." ".$TimeStop." ".$Websitelink." ".$Imagelink." ".$Locationlink." ".$filler;

            Center::Add($CenterName,$DateStart,$DateStop,$TimeStart,$TimeStop,$Websitelink,$Imagelink,$Locationlink,$filler);
            CentersController::editCenterIndex();
            

        }

    }
?>