<?php   
//===============================================
class GSQLiteUi extends GWidget {
    //===============================================
    private $m_widgetMap;
    private $m_req = "show_tables";
    //===============================================
    public function __construct() {
        $this->m_widgetMap = GWidget::Create("stackwidget");
        $this->m_widgetMap->addPage("show_tables", "sqlitetables", "Afficher les tables");
        $this->m_widgetMap->addPage("execute_sql", "sqlitescript", "Exécuter une requête sql");
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $this->request();
        // header
        echo sprintf("<div class=''>\n");
        // 
        echo sprintf("<div class='header2'>\n");
        echo sprintf("<div class='item menu2 float2'>\n");
        echo sprintf("<button class='button'><i class='fa fa-cog'></i> Paramètres</button>\n");
        echo sprintf("<div class='menu6' style='min-width: 250px;'>\n");
        //
        echo sprintf("<form class='menu5' action='' method='post'>\n");
        echo sprintf("<button class='button4' type='submit' id='req' name='req' value='show_tables'>
        <i class='icon fa fa-book'></i> Afficher les tables</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("<form class='menu5' action='' method='post'>\n");
        echo sprintf("<button class='button4' type='submit' id='req' name='req' value='execute_sql'>
        <i class='icon fa fa-book'></i> Exécuter une requête sql</button>\n");
        echo sprintf("</form>\n");
        //
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        echo sprintf("</div>\n");
        // body
        echo sprintf("<div class='body4'>\n");
        $lPage = $this->m_widgetMap->getPage($this->m_req);
        GWidget::Create($lPage)->run();
        echo sprintf("</div>\n");
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["req"])) {
            $lReq = $_POST["req"];
            $this->m_req = $lReq;
            if($lReq == "show_table") {

            }
        }
    }
    //===============================================
}
//===============================================
?>