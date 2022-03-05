<?php
class CentersController
{
    public function search()
    {
        $key = $_GET['key'];
        $centerList = center::search($key);
        require_once('views/center/index.php');
    }
    public function searchupdateCenter()
    {
        $key = $_GET['key'];
        echo $key;
        $centerList = center::search($key);
        require_once('views/center/updateCenterIndex.php');
    }

    public function index()
    {
        $key = "";
        $centerList = Center::getAll();
        require_once('views/center/index.php');
    }

    public function updateCenterIndex()
    {
        $centerList = Center::getAll();
        require_once('views/center/updateCenterIndex.php');
    }

    public function updateFormCenter()
    {
        $id = $_GET['id'];
        $center = Center::get($id);
        require_once('views/center/updateCenterPage.php');
    }

    public function updateCenter()
    {
        $id = $_GET['id'];
        $CenterName = $_GET['CenterName'];
        $DateStart = $_GET['DateStart'];
        $DateStop = $_GET['DateStop'];
        $TimeStart = $_GET['TimeStart'];
        $TimeStop = $_GET['TimeStop'];
        $Websitelink = $_GET['Websitelink'];
        $Imagelink = $_GET['Imagelink'];
        $Locationlink = $_GET['Locationlink'];
        Center::update($id, $CenterName, $DateStart, $DateStop, $TimeStart, $TimeStop, $Websitelink, $Imagelink, $Locationlink);
        CentersController::updateCenterIndex();
    }


    public function addCenterPage()
    {
        require_once('views/center/addCenterPage.php');
    }

    public function addCenter()
    {
        //echo " in addCenter";
        $stationdetailID = Center::getlastID();


        $CenterName = $_GET['CenterName'];
        $DateStart = $_GET['DateStart'];
        $DateStop = $_GET['DateStop'];
        $TimeStart = $_GET['TimeStart'];
        $TimeStop = $_GET['TimeStop'];
        $Websitelink = $_GET['Websitelink'];
        $Imagelink = $_GET['Imagelink'];
        $Locationlink = $_GET['Locationlink'];
        $filler = $_GET['filler'];

        Center::Add($CenterName, $DateStart, $DateStop, $TimeStart, $TimeStop, $Websitelink, $Imagelink, $Locationlink, $filler);
        CentersController::updateCenterIndex();

        $IntstationdetailID = (int)$stationdetailID;
        $IntstationdetailID = $IntstationdetailID + 1;
        $stationdetailID = (string)$IntstationdetailID;

        $startTimeStamp = strtotime($DateStart);
        $endTimeStamp = strtotime($DateStop);
        $timeDiff = abs($endTimeStamp - $startTimeStamp);
        $numberDays = $timeDiff / 86400;  // 86400 seconds in one day
        $numberDays = intval($numberDays);
        $DateStartupdate = $DateStart;

        CenterDetail::Add($stationdetailID, $DateStartupdate, '0', $filler);
        for ($y = 0; $y < $numberDays; $y++) {
            $dateupdate =  date('Y-m-d', strtotime($DateStartupdate . '+ 1 days'));
            CenterDetail::Add($stationdetailID, $dateupdate, '0', $filler);
            $DateStartupdate =  $dateupdate;
        };

        
    }

    public function delete()
    {
        $id = $_GET['id'];
        Center::delete($id);
        CentersController::updateCenterIndex();
    }
}
