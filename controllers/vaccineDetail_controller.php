<?php
    class VaccineDetailController{
        public function index(){
            $centerId = $_GET['id'];
            $center = Center::get($centerId);
            $vaccineDetailList = VaccineDetail::getAll($centerId);
            require_once('views/vaccineDetail/index.php');
        }

        public function updateFormVaccineDetail(){
            $vaccineDetail_id = $_GET['vaccineDetailID'];
            echo "vaccineDetail_id = ".$vaccineDetail_id;
            $vaccineDetail = VaccineDetail::get($vaccineDetail_id);
            $vaccineList = Vaccine::getAll();
            $center = Center::get($vaccineDetail->centerId);
            $id = $center->id;
            require_once('views/vaccineDetail/updateVaccinedetailPage.php');
        }

        public function updateVaccineDetail(){
            $id = $_GET['id'];
            $center = Center::get($id);
            $vaccineId = $_GET['vaccineId'];
            $totalDose = $_GET['Dosetotal'];
            $description = $_GET['Condition'];
            $walk_in = $_GET['walk_in'];
            VaccineDetail::update($id, $vaccineId, $totalDose, $description, $walk_in);
            VaccineDetailController::index();
        }

        public function addVaccineDetailPage(){
            $vaccineList = Vaccine::getAll();
            $id = $_GET['id'];
            $center = Center::get($id);
            $vaccineDetail = VaccineDetail::get($id);
            require_once('views/vaccineDetail/addVaccineDetail.php');
        }

        public function addVaccineDetail(){
            $StationId = $_GET['StationId'];
            $vaccineId = $_GET['vaccineId'];
            $Dosetotal = $_GET['Dosetotal'];
            $Condition= $_GET['Condition'];
            $Walkin = $_GET['Walkin'];   
            // echo $StationId.$vaccineId.$Dosetotal.$Condition.$Walkin;
            VaccineDetail::Add($StationId,$vaccineId,$Dosetotal,$Walkin,$Condition);
            VaccineDetailController::index();
        }

        public function delete(){
            $id = $_GET['id'];
            $vaccineDetail_id = $_GET['vaccineDetail_id'];
            VaccineDetail::delete($vaccineDetail_id);
            VaccineDetailController::index();
        }

    }
?>