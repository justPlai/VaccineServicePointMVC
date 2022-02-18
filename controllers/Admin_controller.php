<?php
    class AdminsController{
        public function signInPage(){
            require_once('views/admin/signIn.php');
        }
        
        public function editCenterIndex(){
            require_once('views/admin/editCenterIndex.php');
        }

        public function editCenterPage(){
            require_once('views/admin/editCenterPage.php');
        }

        public function addCenterPage(){
            require_once('views/admin/addCenterPage.php');
        }

        public function editVaccinePage(){
            require_once('views/admin/editVaccinePage.php');
        }

        public function editVaccinedetailPage(){
            require_once('views/admin/editVaccinedetailPage.php');
        }

    }
?>