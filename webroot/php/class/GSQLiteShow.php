<?php   
//===============================================
class GSQLiteShow extends GWidget {
    //===============================================
    private $order = "";
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lApp = GManager::Instance()->getData()->app;
        $this->request();
        $lDataMap = array();
        $lHeaders = array();
        if($lApp->table_name != "") {
            $lDataMap = GSQLite::Instance()->queryMap(sprintf("
            select * from %s %s
            ", $lApp->table_name, $this->order));
            $lHeaders = GSQLite::Instance()->getHeaders();
        }
        echo sprintf("<div class='table_id'>\n");
        echo sprintf("<table>\n");
        echo sprintf("<div class='name'>%s</div>\n", $lApp->table_name);
        echo sprintf("<thead>\n");
        echo sprintf("<tr>\n");
        for($i = 0; $i < count($lHeaders); $i++) {
            $lHeader = $lHeaders[$i];
            echo sprintf("<th>$lHeader</th>\n");
        }
        echo sprintf("</tr>\n");
        echo sprintf("</thead>\n");
        echo sprintf("<tbody>\n");
        for($i = 0; $i < count($lDataMap); $i++) {
            $lDataRow = $lDataMap[$i];
            echo sprintf("<tr>\n");
            for($j = 0; $j < count($lDataRow); $j++) {
                $lData = $lDataRow[$j];
                echo sprintf("<td>$lData</td>\n");
            }
            echo sprintf("</tr>\n");
        }
        echo sprintf("</tbody>\n");
        echo sprintf("</table>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "show_table") {
                $lApp->table_name = $_POST["table"];
                if($lApp->table_name == "view_data") {$this->order = "order by view_key";}
                else if($lApp->table_name == "config_data") {$this->order = "order by config_key";}
            }
        }
    }
    //===============================================
}
//===============================================
?>