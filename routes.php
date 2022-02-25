<?php
    $controllers = array('pages'=>['home', 'error'],
                        'admin'=>['index', 'signIn'],
                        'center'=>['search', 'index', 'updateCenterIndex', 'updateFormCenter', 'addCenterPage', 'addCenter', 'searchupdateCenter'],
                        'vaccine'=>['index', 'updateFormVaccine', 'updateVaccine', 'addVaccinePage', 'addVaccine', 'VaccineDelete'],
                        'vaccineDetail'=>['index', 'updateFormVaccineDetail', 'addVaccineDetailPage', 'addVaccineDetail']); 
    function call($controller, $action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages":   $controller = new PagesController();
                        break;

            case "center":  require_once("models/center/centerModel.php");
                            $controller = new CentersController();
                        break;

            case "admin":   $controller = new AdminsController();
                            require_once('models/vaccines/vaccineModel.php');
                        break;
            case "vaccine":   $controller = new VaccinesController();
                            require_once('models/vaccines/vaccineModel.php');
                        break;
            case "vaccineDetail":   
                            require_once('models/center/centerModel.php');
                            require_once('models/vaccines/vaccineModel.php');
                            require_once('models/vaccines/vaccineDetailModel.php');
                            $controller = new VaccineDetailController();
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
