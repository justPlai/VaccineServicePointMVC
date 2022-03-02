<?php
class CenterDetailController
{

    public function index()
    {
        $centerId = $_GET['id'];
        $center = Center::get($centerId);
        $vaccineDetailList = CenterDetail::getAll($centerId);
        require_once('views/centerDetail/index.php');
    }

    // public function updateCenterIndex()
    // {
    //     $centerList = CenterDetail::getAll();
    //     require_once('views/center/updateCenterIndex.php');
    // }

    // public function updateFormCenter()
    // {
    //     $id = $_GET['id'];
    //     $center = Center::get($id);
    //     require_once('views/center/updateCenterPage.php');
    // }

    // public function updateCenter()
    // {
    //     $id = $_GET['id'];
    //     $CenterName = $_GET['CenterName'];
    //     $DateStart = $_GET['DateStart'];
    //     $DateStop = $_GET['DateStop'];
    //     $TimeStart = $_GET['TimeStart'];
    //     $TimeStop = $_GET['TimeStop'];
    //     $Websitelink = $_GET['Websitelink'];
    //     $Imagelink = $_GET['Imagelink'];
    //     $Locationlink = $_GET['Locationlink'];
    //     Center::update($id, $CenterName, $DateStart, $DateStop, $TimeStart, $TimeStop, $Websitelink, $Imagelink, $Locationlink);
    //     CentersController::updateCenterIndex();
    // }


    // public function addCenterPage()
    // {
    //     require_once('views/center/addCenterPage.php');
    // }

    // public function addCenter()
    // {
    //     //echo " in addCenter";
    //     $CenterName = $_GET['CenterName'];
    //     $DateStart = $_GET['DateStart'];
    //     $DateStop = $_GET['DateStop'];
    //     $TimeStart = $_GET['TimeStart'];
    //     $TimeStop = $_GET['TimeStop'];
    //     $Websitelink = $_GET['Websitelink'];
    //     $Imagelink = $_GET['Imagelink'];
    //     $Locationlink = $_GET['Locationlink'];
    //     $filler = $_GET['filler'];

    //     //echo $CenterName." ".$DateStart." ".$DateStop." ".$TimeStart." ".$TimeStop." ".$Websitelink." ".$Imagelink." ".$Locationlink." ".$filler;

    //     Center::Add($CenterName, $DateStart, $DateStop, $TimeStart, $TimeStop, $Websitelink, $Imagelink, $Locationlink, $filler);
    //     CentersController::updateCenterIndex();
    // }

}
