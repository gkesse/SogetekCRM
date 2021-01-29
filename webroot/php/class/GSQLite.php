<?php   
//===============================================
class GSQLite {
    //===============================================
    private static $m_instance = null;
    private $m_headers = array();
    //===============================================
    private function __construct() {
        // config_data
        $this->queryWrite(sprintf("
        create table if not exists config_data (
        config_key text,
        config_value text
        )"));
        // view_data
        $this->queryWrite(sprintf("
        create table if not exists view_data (
        view_key text,
        view_value integer
        )"));
        // tables
        $this->queryWrite(sprintf("
        select * from view_data
        order by view_key
        "), "40;20", 20);
    }
    //===============================================
    public static function Instance() {
        if(is_null(self::$m_instance)) {
            self::$m_instance = new GSQLite();  
        }
        return self::$m_instance;
    }
    //===============================================
    // method
    //===============================================
    public function open() {
        $lApp = GManager::Instance()->getData()->app;
        $lPath = "";
        $lPath .= $_SERVER["DOCUMENT_ROOT"];
        $lPath .= $lApp->sqlite_db_path;
        $lPath = "sqlite:$lPath";
        
        $lPdo = null;
        
        try {
            $lPdo = new PDO($lPath);
            $lPdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $lPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (Exception $e) {
            $lApp->debug .= sprintf("[sqlite] erreur ouverture : %s<br>\n", $e->getMessage());
        }

        return $lPdo;
    }
    //===============================================
    public function queryShow($sql, $widthMap, $defaultWidth) {
        $lApp = GManager::Instance()->getData()->app;
        $lPdo = $this->open();
        $lStmt = $lPdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        // sep
        $lApp->debug .= sprintf("+-");
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            $j = 0;
            foreach($lResult as $lKey => $lValue) {
                if($j != 0) {$lApp->debug .= sprintf("-+-");}
                $lWidth = GManager::Instance()->getWidth($widthMap, $j, $defaultWidth);
                for($k = 0; $k < $lWidth; $k++) {
                    $lApp->debug .= sprintf("-");
                }
                $j++;
            }
            break;
        }
        $lApp->debug .= sprintf("-+");
        $lApp->debug .= sprintf("<br>");
        // header
        $lApp->debug .= sprintf("| ");
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            $j = 0;
            foreach($lResult as $lKey => $lValue) {
                if($j != 0) {$lApp->debug .= sprintf(" | ");}
                $lWidth = GManager::Instance()->getWidth($widthMap, $j, $defaultWidth);
                $lData = sprintf("%'^-".$lWidth."s", $lKey);
                $lData = str_replace('^', '&nbsp;', $lData);
                $lApp->debug .= $lData;
                $j++;
            }
            break;
        }
        $lApp->debug .= sprintf(" |");
        $lApp->debug .= sprintf("<br>\n");
        // sep
        $lApp->debug .= sprintf("+-");
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            $j = 0;
            foreach($lResult as $lKey => $lValue) {
                if($j != 0) {$lApp->debug .= sprintf("-+-");}
                $lWidth = GManager::Instance()->getWidth($widthMap, $j, $defaultWidth);
                for($k = 0; $k < $lWidth; $k++) {
                    $lApp->debug .= sprintf("-");
                }
                $j++;
            }
            break;
        }
        $lApp->debug .= sprintf("-+");
        $lApp->debug .= sprintf("<br>");
        // data
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            $j = 0;
            $lApp->debug .= sprintf("| ");
            foreach($lResult as $lKey => $lValue) {
                if($j != 0) {$lApp->debug .= sprintf(" | ");}
                $lWidth = GManager::Instance()->getWidth($widthMap, $j, $defaultWidth);
                $lData = sprintf("%'^-".$lWidth."s", $lValue);
                $lData = str_replace('^', '&nbsp;', $lData);
                $lApp->debug .= $lData;
                $j++;
            }
            $lApp->debug .= sprintf(" |");
            $lApp->debug .= sprintf("<br>\n");
        }
        // sep
        $lApp->debug .= sprintf("+-");
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            $j = 0;
            foreach($lResult as $lKey => $lValue) {
                if($j != 0) {$lApp->debug .= sprintf("-+-");}
                $lWidth = GManager::Instance()->getWidth($widthMap, $j, $defaultWidth);
                for($k = 0; $k < $lWidth; $k++) {
                    $lApp->debug .= sprintf("-");
                }
                $j++;
            }
            break;
        }
        $lApp->debug .= sprintf("-+");
        $lApp->debug .= sprintf("<br>");
        
        $lPdo = null;
    }
    //===============================================
    public function queryWrite($sql) {
        $lPdo = $this->open();
        $lPdo->exec($sql);
        $lPdo = null;
    }
    //===============================================
    public function queryValue($sql) {
        $lApp = GManager::Instance()->getData()->app;
        $lPdo = $this->open();
        $lStmt = $lPdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lData = "";
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                $lData = $lValue;
                break;
            }
            break;
        }
        
        return $lData;
    }
    //===============================================
    public function queryCol($sql) {
        $lApp = GManager::Instance()->getData()->app;
        $lPdo = $this->open();
        $lStmt = $lPdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lDataMap = array();
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                array_push($lDataMap, $lValue);
                break;
            }
        }
        
        return $lDataMap;
    }
    //===============================================
    public function queryRow($sql) {
        $lApp = GManager::Instance()->getData()->app;
        $lPdo = $this->open();
        $lStmt = $lPdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lDataMap = array();
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                array_push($lDataMap, $lValue);
            }
            break;
        }
        
        return $lDataMap;
    }
    //===============================================
    public function queryMap($sql) {
        $lApp = GManager::Instance()->getData()->app;
        $lPdo = $this->open();
        $lStmt = $lPdo->query($sql);
        $lResultMap = $lStmt->fetchAll();
        
        $lDataMap = array();
        
        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            foreach($lResult as $lKey => $lValue) {
                array_push($this->m_headers, $lKey);
            }
            break;
        }

        for($i = 0; $i < count($lResultMap); $i++) {
            $lResult = $lResultMap[$i];
            $lDataRow = array();
            foreach($lResult as $lKey => $lValue) {
                array_push($lDataRow, $lValue);
            }
            array_push($lDataMap, $lDataRow);
        }
        
        return $lDataMap;
    }
    //===============================================
    public function getHeaders() {
        return $this->m_headers;
    }
    //===============================================
}
//===============================================
?>