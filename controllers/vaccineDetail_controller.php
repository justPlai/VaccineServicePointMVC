<?php
    class VaccineDetailController{
        public function index(){
            $centerId = $_GET['id'];
            $center = Center::get($centerId);
            $vaccineDetailList = VaccineDetail::getAll($centerId);
            require_once('views/vaccineDetail/index.php');
        }

        public function updateFormVaccineDetail(){
            require_once('views/vaccineDetail/updateVaccinedetailPage.php');
        }

    }
?>