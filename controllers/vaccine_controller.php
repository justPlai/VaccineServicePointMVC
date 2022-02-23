<?php
    class VaccinesController{
        public function index(){//plai
            $vaccineList = Vaccine::getAll();
            require_once('views/vaccine/updateVaccineIndex.php');
        }

        public function updateFormVaccine(){//plai
            $id = $_GET['id'];
            $vaccine = Vaccine::get($id);
            require_once('views/vaccine/updateVaccinePage.php');
        }

        public function updateVaccine(){
            $id = $_GET['id'];
            $vaccineName = $_GET['vaccineName'];
            $imgIcon = $_GET['imgIcon'];
            Vaccine::update($id, $vaccineName, $imgIcon);
            VaccinesController::index();
        }

        public function addVaccinePage(){
            require_once('views/vaccine/addVaccinePage.php');
        }
        public function addVaccine(){
            $vaccineName = $_GET['vaccineName'];
            $imgIcon = $_GET['imgIcon'];
            Vaccine::add($vaccineName, $imgIcon);
            VaccinesController::index();

        }

        public function VaccineDelete(){
            //alert comfirm delete
            require_once('views/vaccine/index.php');
        }
    }
?>