<?php   
//===============================================
class GSQLiteShow extends GWidget {
    //===============================================
    private $m_pageNumber;
    private $m_colMax;
    //===============================================
    public function __construct() {
        $this->m_pageNumber = &$_SESSION["sqlite_show_page_number"];
        $this->m_colMax = &$_SESSION["sqlite_show_col_max"];
        
        if(!isset($this->m_pageNumber)) {$this->m_pageNumber = 1;}
        if(!isset($this->m_colMax)) {$this->m_colMax = 20;}
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
            select * from %s
            ", $lApp->table_name));
            $lHeaders = GSQLite::Instance()->getHeaders();
        }
        //
        $lTotal = count($lDataMap);
        $lMax = $this->m_colMax;
        $lPageMax = ceil($lTotal/$lMax);
        $lPage = $this->m_pageNumber;
        //
        if($lPage > $lPageMax) {$lPage = 1;}
        //
        echo sprintf("<div class='header left overflow'>\n");
        //
        echo sprintf("<div class='item7 margin2'>\n");
        echo sprintf("<div class='item'>Total : </div>\n");
        echo sprintf("<div class='item'>%d</div>\n", $lTotal);
        echo sprintf("</div>\n");
        //
        echo sprintf("<form id='sqlite_show_page_number_form' class='item7 margin2' action='' method='post'>\n");
        echo sprintf("<div class='item'>Page : </div>\n");
        echo sprintf("<input type='hidden' id='req' name='req' value='page_number'/>\n");
        echo sprintf("<input style='min-width: 30px;' class='item' type='number' id='page' name='page' value='%d' min='1' max='%d' maxlength='6' size='6' 
        onchange='onItemClick(this, \"sqlite_show_page_number\")'/>\n", $lPage, $lPageMax);
        echo sprintf("<div class='item'> / %d</div>\n", $lPageMax);
        echo sprintf("</form>\n");
        //
        echo sprintf("<form id='sqlite_show_col_max_form' class='item7' action='' method='post'>\n");
        echo sprintf("<div class='item'>Max : </div>\n");
        echo sprintf("<input type='hidden' id='req' name='req' value='col_max'/>\n");
        echo sprintf("<input style='min-width: 30px;' class='item' type='number' id='page' name='page' value='%d' min='10' max='50' maxlength='6' size='6' step='10'
        onchange='onItemClick(this, \"sqlite_show_col_max\")'/>\n", $lMax);
        echo sprintf("</form>\n");
        //
        echo sprintf("</div>\n");
        //
        echo sprintf("<div class='overflow'>\n");
        echo sprintf("<div class='box5'>\n");
        echo sprintf("<div class='title3'>%s</div>\n", $lApp->table_name);
        echo sprintf("<table>\n");
        echo sprintf("<thead>\n");
        echo sprintf("<tr>\n");
        for($i = 0; $i < count($lHeaders); $i++) {
            $lHeader = $lHeaders[$i];
            echo sprintf("<th>%s</th>\n", $lHeader);
        }
        echo sprintf("</tr>\n");
        echo sprintf("</thead>\n");
        echo sprintf("<tbody>\n");
        for($i = 0; $i < $lMax; $i++) {
            $lIndex = ($lPage - 1)*$lMax + $i;
            if($lIndex >= $lTotal) {break;}
            $lDataRow = $lDataMap[$lIndex];
            echo sprintf("<tr>\n");
            for($j = 0; $j < count($lDataRow); $j++) {
                $lData = $lDataRow[$j];
                echo sprintf("<td>%s</td>\n", $lData);
            }
            echo sprintf("</tr>\n");
        }
        echo sprintf("</tbody>\n");
        echo sprintf("</table>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            if($lReq == "page_number") {
                $this->m_pageNumber = $_POST["page"];
            }
            else if($lReq == "col_max") {
                $this->m_colMax = $_POST["page"];
            }
        }
    }
    //===============================================
}
//===============================================
?>