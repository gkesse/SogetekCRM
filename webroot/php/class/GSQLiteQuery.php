<?php   
//===============================================
class GSQLiteQuery extends GWidget {
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
        echo sprintf("<textarea class='textarea' form='run_query' id='query' name='query' rows='4' cols='50' maxlength='200'
        placeholder='Saisir une requête'>\n");
        echo sprintf("</textarea>\n");
        //
        echo sprintf("</div>\n");
    }
    //===============================================
    public function request() {
        $lApp = GManager::Instance()->getData()->app;
        if(isset($_POST["action"])) {
            $lReq = $_POST["action"];
            if($lReq == "") {

            }
        }
    }
    //===============================================
}
//===============================================
?>