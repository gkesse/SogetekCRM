<?php   
//===============================================
class GSQLiteShow extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        echo sprintf("<div class='sqliteshow_id'>\n");
        echo sprintf("<div>GSQLiteShow</div>\n");
        var_dump($_POST);
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>