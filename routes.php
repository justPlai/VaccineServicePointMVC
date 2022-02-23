<?php
    $controllers = array('pages'=>['home', 'error'],
                        'center'=>['search', 'vaccineDetail'],
                        'admin'=>['signInPage', 'editCenterIndex', 'editCenterPage'
                        , 'addCenterPage', 'addVaccinePage', 'editVaccinePage', 'updateVaccine'
                        , 'VaccinedetailPage', 'addVaccineDetailPage', 'editVaccinedetailPage', 'VaccineIndex'],
                        'center'=>['search', 'vaccineDetail', 'editCenterIndex', 'addCenter']); 
    function call($controller, $action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages":   $controller = new PagesController();
                        break;

            case "center":  require_once("models/centerModel.php");
                            $controller = new CentersController();
                        break;

            case "admin":   $controller = new AdminsController();
                            require_once('models/vaccines/vaccineModel.php');
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
