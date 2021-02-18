<?php   
//===============================================
class GSQLiteOutput extends GWidget {
    //===============================================
    private $m_output = "Aucun texte n'a été généré en sortie";
    //===============================================
    public function __construct() {

    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $this->request();
        //
        echo sprintf("<div class=''>\n");
        // 
        echo sprintf("<div class='output'>%s</div>\n", $this->m_output);
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["action"])) {
            $lAction = $_POST["action"];
            if($lAction == "run_query") {
                $lOutput = "";
                if(isset($_POST["query"])) {
                    $lQuery = $_POST["query"];
                    if($lQuery != "") {
                        $lFormat = sprintf("dir .\\data\\sqlite");
                        $lOutput = shell_exec($lFormat);
                        $lOutput = PHP_OS;
                    }
                }
                if($lOutput != "") {$this->m_output = $lOutput;}
            }
        }
    }
    //===============================================
}
//===============================================
?>