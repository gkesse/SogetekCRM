<?php   
//===============================================
class GFooter extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        //===============================================
        // script
        echo sprintf("<script type='text/javascript' src='/js/class/GManager.js'></script>\n");
        echo sprintf("<script type='text/javascript' src='/js/request/request.js'></script>\n");
        //===============================================
        echo sprintf("</body>\n");
        echo sprintf("</html>\n");
    }
    //===============================================
}
//===============================================
?>