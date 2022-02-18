<?php
    $controllers = array('pages'=>['home', 'error'],
                        'center'=>['search', 'vaccineDetail'],
                        'admin'=>['signInPage', 'editCenterIndex', 'editCenterPage'
                        , 'addCenterPage', 'addVaccinePage', 'editVaccinePage', 'VaccinedetailPage'
                        , 'addVaccineDetailPage', 'editVaccinedetailPage', 'VaccineIndex']); 
    function call($controller, $action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": $controller = new PagesController();
                        break;
            case "center": $controller = new CentersController();
                        break;
            case "admin": $controller = new AdminsController();
                        break;
        }
        $controller->{$action}();
    }
    if(array_key_exists($controller,$controllers)){
        if(in_array($action, $controllers[$controller])){
            call($controller, $action);
        }
        else{
            call('pages', 'error');
        }   
    } 
    else{
        call('pages', 'error');
    }
?>