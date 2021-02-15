<?php   
//===============================================
class GProfile {
    //===============================================
    private static $m_instance = null;
    //===============================================
    private function __construct() {

    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GProfile();  
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function createProfile($datas) {
        $lCount = $this->countProfile($datas);
        if($lCount == 0) {$this->insertProfile($datas);}
        else {$this->updateProfile($datas);}
    }    
    //===============================================
    public function countProfile($datas) {
        $lApp = GManager::Instance()->getData()->app;
        $lCount = GSQLite::Instance()->queryValue(sprintf("
        select count(*) from profile_data
        where user_name = '%s'
        ", $datas["user_name"]));
        return intval($lCount);
    }    
    //===============================================
    public function insertProfile($datas) {
        GSQLite::Instance()->queryWrite(sprintf("
        insert into profile_data (user_name, full_name, manager_name, client_name, client_address)
        values ('%s', '%s', '%s', '%s', '%s')
        ", $datas["user_name"], $datas["full_name"], $datas["manager_name"], $datas["client_name"], $datas["client_address"]));
    }    
    //===============================================
    public function updateProfile($datas) {
        GSQLite::Instance()->queryWrite(sprintf("
        update profile_data 
        set full_name = '%s', 
        set manager_name = '%s', 
        set client_name = '%s', 
        set client_address = '%s'
        where user_name = '%s'
        ", $datas["full_name"], $datas["manager_name"], $datas["client_name"], $datas["client_address"], $datas["user_name"]));
    }    
    //===============================================
}
//===============================================
?>