<?php
class CenterDetailController
{

    public function index()
    {
        $centerId = $_GET['id'];
        $center = Center::get($centerId);
        $centerDetailList = CenterDetail::getAll($centerId);
        require_once('views/centerDetail/index.php');
    }

    // public function updateCenterIndex()
    // {
    //     $centerList = CenterDetail::getAll();
    //     require_once('views/center/updateCenterIndex.php');
    // }

    public function updateFormCenterDetail()
    {
        $id = $_GET['id'];
        $centerName = $_GET['centerName'];
        $centerdetail = centerDetail::get($id);
        require_once('views/centerDetail/updateCenterDetailPage.php');
    }

    public function updateCenterDetail()
    {
        $centerId = $_GET['id'];
        $id = $_GET['idcenterDetail'];
        $totalDosed = $_GET['totalDosed'];
        $filler = $_GET['filler'];
        centerDetail::update($id,$centerId,$totalDosed,$filler);
        CenterDetailController::index();
    }


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

    public function generateDate(){
        $stationId = $_GET['stationId'];
        $station = Center::get($stationId);
        $DateStart = $station->date_start;
        $DateStop = $station->date_end;

        $startTimeStamp = strtotime($DateStart);
        $endTimeStamp = strtotime($DateStop);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day
        $numberDays = intval($numberDays);
        $DateStartupdate = $DateStart;

        CenterDetail::Add($stationId, $DateStartupdate, '0', $_SESSION['accountId']);
        for ($y = 0; $y < $numberDays; $y++) {
            $dateupdate =  date('Y-m-d', strtotime($DateStartupdate . '+ 1 days'));
            CenterDetail::Add($stationId, $dateupdate, '0', $_SESSION['accountId']);
            $DateStartupdate =  $dateupdate;
        };

        CentersController::updateCenterIndex();
    }

}
