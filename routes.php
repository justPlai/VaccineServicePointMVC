<?php
$controllers = array(
    'pages' => ['home', 'error'],
    'admin' => ['index', 'signIn', 'signOut'],
    'center' => ['search', 'delete', 'index', 'updateCenterIndex', 'updateFormCenter', 'addCenterPage', 'addCenter', 'searchupdateCenter', 'updateCenter'],
    'vaccine' => ['index', 'updateFormVaccine', 'updateVaccine', 'addVaccinePage', 'addVaccine', 'delete'],
    'vaccineDetail' => ['index', 'updateIndex', 'delete', 'updateVaccineDetail', 'updateFormVaccineDetail', 'addVaccineDetailPage', 'addVaccineDetail'],
    'about' => ['index'],
    'centerDetail' => ['index','addCenterDetail','updateFormCenterDetail','updateCenterDetail']
);
function call($controller, $action)
{
    require_once("controllers/" . $controller . "_controller.php");
    switch ($controller) {
        case "pages":
            $controller = new PagesController();
            break;
        case "center":
            require_once("models/center/centerModel.php");
            $controller = new CentersController();
            break;
        case "admin":
            $controller = new AdminsController();
            require_once('models/vaccines/vaccineModel.php');
            require_once('models/accounts/accountModel.php');
            break;
        case "vaccine":
            $controller = new VaccinesController();
            require_once('models/vaccines/vaccineModel.php');
            break;
        case "vaccineDetail":
            $controller = new VaccineDetailController();
            require_once('models/center/centerModel.php');
            require_once('models/vaccines/vaccineModel.php');
            require_once('models/vaccines/vaccineDetailModel.php');
            break;
        case "about":
            $controller = new AboutController();
            break;
        case "centerDetail":
            require_once('models/center/centerModel.php');
            require_once('models/centerDetail/centerDetailModel.php');
            $controller = new CenterDetailController();
            break;  
    }
    $controller->{$action}();
}
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
