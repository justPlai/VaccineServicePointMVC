<?php
    class VaccineDetailController{
        public function index(){
            $centerId = $_GET['id'];
            $center = Center::get($centerId);
            $vaccineDetailList = VaccineDetail::getAll($centerId);
            require_once('views/vaccineDetail/index.php');
        }

        public function updateFormVaccineDetail(){
            $vaccineDetail_id = $_GET['id'];
            $vaccineDetail = VaccineDetail::get($vaccineDetail_id);
            $vaccineList = Vaccine::getAll();
            $center = Center::get($vaccineDetail->centerId);
            $id = $center->id;
            require_once('views/vaccineDetail/updateVaccinedetailPage.php');
        }

        public function updateVaccineDetail(){
            $id = $_GET['id'];

            VaccineDetailController::index();
        }

    }
?>