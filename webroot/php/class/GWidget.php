<?php   
//===============================================
class GWidget {
    //===============================================
    public function __construct() {
        
    }
    //===============================================
    public static function Create($key) {
        // widget
        if($key == "widget") {return new GWidget();}
        if($key == "header") {return new GHeader();}
        if($key == "body") {return new GBody();}
        if($key == "footer") {return new GFooter();}
        if($key == "addresskey") {return new GAddressKey();}
        if($key == "stackwidget") {return new GStackWidget();}
        if($key == "titlebar") {return new GTitleBar();}
        if($key == "view") {return new GViewUi();}
        if($key == "network") {return new GNetwork();}
        // page
        if($key == "window") {return new GWindow();}
        if($key == "home") {return new GHome();}
        if($key == "login") {return new GLoginUi();}
        if($key == "user") {return new GUserUi();}
        if($key == "profile") {return new GProfileUi();}
        //
        if($key == "sqlite") {return new GSQLiteUi();}
        if($key == "sqliteshow") {return new GSQLiteShow();}
        //
        if($key == "timesheet") {return new GTimesheetUi();}
        if($key == "filesystem") {return new GFilesystem();}
        if($key == "debug") {return new GDebug();}
        if($key == "message") {return new GMessage();}
        // default
        return new GError();
    }
    //===============================================
    // method
    //===============================================
    public function getSummary() {
        $lSummary = "Système d'administration produit par Sogetek";
        return $lSummary;
    }
    //===============================================
    public function run() {}
    public function load() {}
    public function start() {}
    public function end() {}
    public function space($size) {}
    //===============================================
    public function addItem($key, $text, $icon) {}
    public function addStack($key, $text, $title) {}
    public function getPage($key) {return null;}
    public function getTitle($key) {return null;}
    public function lineEdit($id, $type, $holder) {}
    public function lineEdit2($id, $type, $icon, $holder) {}
    public function lineEdit3($id, $type, $icon, $goto, $holder) {}
    public function lineEdit4($id, $type, $icon, $goto, $holder) {}
    public function lineEdit5($id, $type, $label, $width) {}
    public function lineEdit6($id, $type, $icon, $label, $width) {}
    public function lineEdit7($id, $type, $icon, $label, $width, $goto) {}
    public function lineEdit8($id, $type, $icon, $label, $width, $goto) {}
    public function button($text, $href) {}
    public function button2($text, $icon, $href) {}
    public function button3($text, $req) {}
    public function button4($text, $icon, $req) {}
    public function icon($icon, $href, $tooltip) {}
    public function icon2($icon, $action, $req, $tooltip) {}
    public function form($action) {}
    //===============================================
}
//===============================================
?>