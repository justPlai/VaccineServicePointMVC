<?php
    class AdminsController{
        public function signInPage(){
            require_once('views/admin/signIn.php');
        }

        public function signIn(){
            
        }
        
        public function editCenterIndex(){
            $centerList = Center::getAll();
            require_once('views/admin/editCenterIndex.php');
        }

        public function editCenterPage(){
            $id = $_GET['id'];
            $center = Center::get($id);
            require_once('views/admin/editCenterPage.php');
        }

        public function addCenterPage(){
            require_once('views/admin/addCenterPage.php');
        }

        public function VaccineIndex(){//plai
            $vaccineList = Vaccine::getAll();
            require_once('views/admin/VaccineIndex.php');
        }

        public function editVaccinePage(){//plai
            $id = $_GET['id'];
            $vaccine = Vaccine::get($id);
            require_once('views/admin/editVaccinePage.php');
        }

        public function updateVaccine(){
            $id = $_GET['id'];
            $vaccineName = $_GET['vaccineName'];
            $imgIcon = $_GET['imgIcon'];
            Vaccine::update($id, $vaccineName, $imgIcon);
            AdminsController::VaccineIndex();
        }

        public function addVaccinePage(){
            require_once('views/admin/addVaccinePage.php');
        }
        public function addVaccine(){
            $vaccineName = $_GET['vaccineName'];
            $imgIcon = $_GET['imgIcon'];
            Vaccine::add($vaccineName, $imgIcon);
            AdminsController::VaccineIndex();

        }

        public function VaccineDelete(){
            //alert comfirm delete
            require_once('views/admin/VaccineIndex.php');
        }

        public function VaccinedetailPage(){
            require_once('views/admin/VaccinedetailPage.php');
        }

        public function editVaccinedetailPage(){
            require_once('views/admin/editVaccinedetailPage.php');
        }

        


    }
?>
