<?php
//===============================================
class GViewUi extends GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    // method
    //===============================================
    public function run() {
        $lView = GView::Instance()->getView();
        echo sprintf("<div class='view_id'>\n");
        echo sprintf("<div class='date'>29/10/2021</div>\n");
        echo sprintf("<div class='view'><div class='data'>$lView</div></div>\n");
        echo sprintf("<div id='view_time' class='time'>17:15:00</div>\n");
        echo sprintf("</div>\n");
    }
    //===============================================
}
//===============================================
?>