<?php
    class CentersController{
        public function search(){
            $key = $_GET['key'];
            $center = center::search($key);
            require_once('views/center/index.php');
        }

        public function index(){
            $centerList = Center::getAll();
            require_once('views/center/index.php');
        }

        public function updateCenterIndex(){
            require_once('views/center/updateCenterIndex.php');
        }

        public function updateFormCenter(){
            $id = $_GET['id'];
            $center = Center::get($id);
            require_once('views/center/updateCenterPage.php');
        }

        public function addCenterPage(){
            require_once('views/center/addCenterPage.php');
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
            CentersController::index();
            

        }

    }
?>