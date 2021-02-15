<?php   
//===============================================
class GTimesheet {
    //===============================================
    private static $m_instance = null;
    private $m_rows = 5;
    private $m_cols = 7;
    private $m_pattern = "/[0]{2,3}h[0]{2}/i";
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GTimesheet();  
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function saveData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        for($lRow = 0; $lRow < $this->m_rows; $lRow++) {
            for($lCol = 0; $lCol < $this->m_cols; $lCol++) {
                $lKey = sprintf("data_%d_%d", $lRow, $lCol);
                $lData = $datas[$lKey];
                if($lCol == 5) {if($lData == 0) {continue;}}
                else {if(preg_match($this->m_pattern, $lData)) {continue;}}
                //
                $lDatas = array(
                "month" => $datas["month"],
                "year" => $datas["year"],
                "row" => $lRow,
                "col" => $lCol,
                "data" => $lData,
                );
                //
                $lCount = $this->countData($lDatas);
                if($lCount == 0) {$this->insertData($lDatas);}
                else {$this->updateData($lDatas);}
            }
        }
    }    
    //===============================================
    public function countData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        and row = %d
        and col = %d
        ", $lApp->user_name, $lMonth, $lYear, $lRow, $lCol));
        return intval($lCount);
    }    
    //===============================================
    public function insertData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lData = $datas["data"];
        GSQLite::Instance()->queryWrite(sprintf("
        insert into timesheet_data (user_name, month, year, row, col, data)
        values ('%s', %d, %d, '%s', '%s', '%s')
        ", $lApp->user_name, $lMonth, $lYear, $lRow, $lCol, $lData));
    }    
    //===============================================
    public function updateData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lData = $datas["data"];
        GSQLite::Instance()->queryWrite(sprintf("
        update timesheet_data
        set user_name = '%s', month = %d, year = %d, row = '%s', col = '%s', data = '%s'
        where user_name = '%s'
        and month = %d
        and year = %d
        and row = %d
        and col = %d
        ", $lApp->user_name, $lMonth, $lYear, $lRow, $lCol, $lData,
        $lApp->user_name, $lMonth, $lYear, $lRow, $lCol));
    }    
    //===============================================
    public function getData($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lMonth = $datas["month"];
        $lYear = $datas["year"];
        $lRow = $datas["row"];
        $lCol = $datas["col"];
        $lData = GSQLite::Instance()->queryValue(sprintf("
        select data from timesheet_data
        where user_name = '%s'
        and month = %d
        and year = %d
        and row = %d
        and col = %d
        ", $lApp->user_name, $lMonth, $lYear, $lRow, $lCol));
        return $lData;
    }    
    //===============================================
}
//===============================================
?>