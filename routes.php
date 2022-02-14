<?php
    $controllers = array('pages'=>['home', 'error'],
                            'center'=>['search']);
    function call($controller, $action){
        require_once("controllers/".$controller."_controller.php");
        switch($controller){
            case "pages": $controller = new PagesController();
                        break;
            case "center": $controller = new CentersController();
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